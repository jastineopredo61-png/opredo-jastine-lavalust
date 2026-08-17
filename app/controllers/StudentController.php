<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        // Student home page - simple landing/intro page
        $this->call->view('student');
    }

    public function profile()
    {
        // Student profile page - protected by StudentMiddleware
        $student = [
            'student_id' => 'MCC-00237',   // TODO: replace with your real student ID
            'name'       => 'Jastine Opredo',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'A',            // TODO: adjust to your real section
            'email'      => 'jastineopredo61@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}
