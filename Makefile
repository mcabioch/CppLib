DEBUG = no

#
#	Softwares
#
FTP = ~/Bureau/Mes_Documents/Programmation/functions/transferWebtoFtp

#
#	Folders
#
BASEDIR = ~/Bureau/Web/Bases
TEMPDIR = $(BASEDIR)/templates
TRANSFERDIR = $(BASEDIR)/../transfer

#
#	Needed files
#


#
#	Output software name
#
EXE = $(shell basename $(CURDIR))

#
#	Flags
#
FTPFLAGS = $(TRANSFERDIR) $(CURDIR) $(EXE)

#
#	Link flags
#


#
#	Others
#


#
#	Rules
#
all:
	

#
#	Implicit rules
#
.PHONY: transfer get

transfer:
	$(FTP) $(FTPFLAGS) "transfer" "-eR"

get:
	$(FTP) $(FTPFLAGS) "get" "-x design/css/home_made -x design/css/home_made.less -x js/bases -x php/bases"

