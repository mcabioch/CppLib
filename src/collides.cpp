#include "C++/collides.hpp"

namespace mcd
{
    bool collidesC(double64_t r1,
                   double64_t x1,
                   double64_t y1,
                   double64_t r2,
                   double64_t x2,
                   double64_t y2) {
        double64_t d = dist(x1, x2, y1, y2);

        if (abs(r1 + r2) <= d) { return true; }

        return false;
    }

    bool collidesRC(double64_t rx,
                    double64_t ry,
                    double64_t w,
                    double64_t h,
                    double64_t cx,
                    double64_t cy,
                    double64_t r) {
        if (!collidesR(rx, ry, w, h, cx, cy, r * 2, r * 2)) { return false; }

        if (collidesPC(cx, cy, r, rx, ry) || collidesPC(cx, cy, r, rx, ry + h) ||
            collidesPC(cx, cy, r, rx + w, ry) || collidesPC(cx, cy, r, rx + w, ry + h)) {
            return true;
        }

        if (collidesPR(rx, ry, w, h, cx, cy)) { return true; }

        bool projvertical   = ProjectionSurSegment(cx, cy, rx, ry, rx, ry + h);
        bool projhorizontal = ProjectionSurSegment(cx, cy, rx, ry, rx + w, ry);

        if (projvertical || projhorizontal) { return true; }

        return false;
    }

    bool ProjectionSurSegment(double64_t Cx,
                              double64_t Cy,
                              double64_t Ax,
                              double64_t Ay,
                              double64_t Bx,
                              double64_t By) {
        double64_t ACx = Cx - Ax;
        double64_t ACy = Cy - Ay;

        double64_t ABx = Bx - Ax;
        double64_t ABy = By - Ay;

        double64_t BCx = Cx - Bx;
        double64_t BCy = Cy - By;

        double64_t s1 = (ACx * ABx) + (ACy * ABy);
        double64_t s2 = (BCx * ABx) + (BCy * ABy);

        return (s1 * s2 == 0);
    }

    bool collidesR(double64_t x1,
                   double64_t y1,
                   double64_t w1,
                   double64_t h1,
                   double64_t x2,
                   double64_t y2,
                   double64_t w2,
                   double64_t h2) {
        if (x1 >= x2 + w2 || x1 + w1 <= x2) { return false; }
        if (y1 >= y2 + h2 || y1 + h1 <= y2) { return false; }

        return true;
    }

    bool collidesPR(double64_t rx,
                    double64_t ry,
                    double64_t w,
                    double64_t h,
                    double64_t x,
                    double64_t y) {
        if (x > rx + w || x < rx) { return false; }
        if (y > ry + h || y < ry) { return false; }

        return true;
    }

    bool collidesPC(double64_t cx, double64_t cy, double64_t r, double64_t x, double64_t y) {
        double64_t d = dist(cx, x, cy, y);

        if (d <= r) { return true; }

        return false;
    }
}   // namespace mcd
