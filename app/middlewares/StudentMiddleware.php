<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        // Unique access condition for this activity:
        // grants access automatically on first visit, then remembers it for the session.
        if (!isset($_SESSION['jastine_student_access'])) {
            $_SESSION['jastine_student_access'] = true;
        }

        if ($_SESSION['jastine_student_access'] === true) {
            return $next();
        }

        // Access denied - redirect back to the student home page
        redirect('student');
    }
}