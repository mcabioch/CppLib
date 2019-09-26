DEBUG = no

#
#	Softwares
#
AR = ar
RM = rm
INFO = doxygen
ARCHIVE = tar
libCreate = $(TEMPDIR)/libCreate

CXXExtension =
CCExtension =

ifeq ($(TARGET),rpi1)
	CXXExtension = arm-linux-gnueabihf-
	CCExtension = arm-linux-gnueabihf-
else ifeq ($(TARGET),rpi2)
	CXXExtension = arm-linux-gnueabihf-
	CCExtension = arm-linux-gnueabihf-
else ifeq ($(TARGET),rpi3)
	CXXExtension = arm-linux-gnueabihf-
	CCExtension = arm-linux-gnueabihf-
else ifeq ($(TARGET),beaglebb)
	CXXExtension = arm-linux-gnueabihf-
	CCExtension = arm-linux-gnueabihf-
else ifeq ($(TARGET),win)
	CXXExtension = x86_64-w64-mingw32-
	CCExtension = x86_64-w64-mingw32-
endif

CXX = $(CXXExtension)g++
CC = $(CCExtension)gcc

ifeq ($(TARGET),win)
	CXX = x86_64-w64-mingw32-g++-win32
endif

#
#	OS
#
ifeq ($(OS),Windows_NT)
	DETECTED_OS = Windows
else
	DETECTED_OS = $(shell uname)
endif

#
#	Folders
#
BINDIR = bin
SRCDIR = src
INCDIR = inc
OBJDIR = obj
LIBDIR = lib
DOCDIR = doc
SQLDIR = sql
RESDIR = res
TEMPDIR = $(HOME)/Bureau/Mes_Documents/Programmation/Makefiles/Templates
MAINDOCDIR = $(HOME)/Bureau/Mes_Documents/Docs

#
#	Needed files
#
BIN := $(wildcard $(BINDIR)/*)
SRC := $(wildcard $(SRCDIR)/*.cpp) $(wildcard $(SRCDIR)/*.c)
NAME := $(basename $(notdir $(SRC)))
CINC := $(wildcard $(INCDIR)/*.h)
CXXINC := $(wildcard $(INCDIR)/*.hpp)
OBJ := $(addprefix $(OBJDIR)/, $(addsuffix .o, $(NAME)))
DOC := $(wildcard doc/*.doxyfile)

ifneq ($(TARGET),)
	LIB := $(wildcard $(LIBDIR)/*-$(TARGET).a)
else
	LIB := $(filter-out $(wildcard $(LIBDIR)/*-*.a), $(wildcard $(LIBDIR)/*.a))
endif

LIBS := $(addprefix -l, $(subst lib, , $(subst .a, , $(LIB))))

ISSFML = $(basename $(notdir $(wildcard $(LIBDIR)/SFML.a)))

#
#	Output software name
#
EXE_TMP = $(shell basename $(CURDIR))

#
#	Flags
#
CCXXWARNINGS = -W -Wconversion
CCXXWARNINGS += -Wall -Wextra -pedantic

CXXWARNINGS = -Wcast-qual -Wcast-align -Wpointer-arith
CXXWARNINGS += -Woverloaded-virtual -Wctor-dtor-privacy -Wdelete-non-virtual-dtor
CXXWARNINGS += -Wshadow -Weffc++
CXXWARNINGS += -Wwrite-strings -Wredundant-decls -Wdouble-promotion -Winit-self -Wswitch-default -Wundef -Wlogical-op

CCXXFLAGS = -I$(INCDIR) $(CCXXWARNINGS)

ifeq ($(DEBUG), yes)
	CCXXFLAGS += -g -ggdb -Werror -Wfatal-errors -Og
else
	CCXXFLAGS += -O2 -s
endif

CXXFLAGS = $(CCXXFLAGS) -std=c++14  $(CXXWARNINGS) -Wold-style-cast
CFLAGS = $(CCXXFLAGS)
ARFLAGS = crf
RMFLAGS = -rf

ifeq ($(TARGET),rpi1)
	CXXFLAGS += -mcpu=arm1176jzf-s -mfloat-abi=hard -mfpu=vfp -mtune=arm1176jzf-s
else ifeq ($(TARGET),rpi2)
	CXXFLAGS += -mcpu=cortex-a7 -mfloat-abi=hard -mfpu=neon-vfpv4 -mtune=cortex-a7
else ifeq ($(TARGET),rpi3)
	CXXFLAGS += -mcpu=cortex-a53 -mfloat-abi=hard -mfpu=neon-fp-armv8 -mneon-for-64bits -mtune=cortex-a53
else ifeq ($(TARGET),beaglebb)
	CXXFLAGS += -mcpu=cortex-a8 -mfloat-abi=hard -mfpu=neon -mtune=cortex-a8
else ifeq ($(TARGET),win)
	CXXFLAGS += 
endif

#
#	Link flags
#
UNKNOWNLIBS = -Wl,--no-as-needed

ifeq ($(ISSFML),SFML)
	SFMLLIBS = -L/usr/local/lib -lsfml-graphics-s -lsfml-window-s -lsfml-system-s -lsfml-network-s -lsfml-audio-s $(OPENGLLIBS)
endif

PTHREADLIBS = -pthread -lpthread

CXXLIBS = -lm $(PTHREADLIBS) -static
ifeq ($(TARGET),win)
	CXXLIBS += -static-libstdc++
endif

LDFLAGS = $(LIB) $(SFMLLIBS) $(BDDLIBS) $(CXXLIBS)# -lOpenCL

#
#	Targets
#
ifeq ($(TARGET),rpi1)
	EXTENSION = -rpi1
else ifeq ($(TARGET),rpi2)
	EXTENSION = -rpi2
else ifeq ($(TARGET),rpi3)
	EXTENSION = -rpi3
else ifeq ($(TARGET),beaglebb)
	EXTENSION = -beaglebb
else ifeq ($(TARGET),win)
	EXTENSION = -win.exe
endif

ifeq ($(DETECTED_OS), Windows)
	EXTENSION += .exe
endif

EXE = $(EXE_TMP)$(EXTENSION)



#
#	Rules
#
$(OBJDIR)/%.o: $(SRCDIR)/%.c $(CINC)
	$(CC) -c $< -o $@ $(CFLAGS) $(OTHERFLAGS)

$(OBJDIR)/%.o: $(SRCDIR)/%.cpp $(CXXINC)
	$(CXX) -c $< -o $@ $(CXXFLAGS) $(OTHERFLAGS)

#
#	Implicit rules
#
PHONY =

PHONY += cleanConfigure clean

cleanConfigure:
	$(RM) $(RMFLAGS) autoscan.log
	$(RM) $(RMFLAGS) config.h.in
	$(RM) $(RMFLAGS) configure.ac
	$(RM) $(RMFLAGS) autom4te.cache

clean: cleanConfigure
	$(RM) $(RMFLAGS) $(OBJDIR)/*
#
	$(RM) $(RMFLAGS) configure
#
	$(RM) $(RMFLAGS) $(ARCHNAME)

PHONY += lib

lib: $(OBJ)
ifeq ($(DEBUG),yes)
	make lib DEBUG=no
else
	$(AR) $(ARFLAGS) $(LIBDIR)/$(EXE).a $(OBJ)
endif

.PHONY: $(PHONY)

