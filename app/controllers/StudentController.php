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
            'student_id'  => '2023-00123',   // TODO: replace with your real student ID
            'name'        => 'Jastine Opredo',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => 'A',            // TODO: adjust to your real section
            'email'       => 'jastineopredo61@gmail.com',
            'address'     => 'Del Pilar, Naujan, Oriental Mindoro',
            'contact_no'  => '0997-166-4922',
            'skills'      => 'PHP, HTML, CSS, and other web development tools',
            'hobbies'     => 'Playing online games, Basketball',
            'description' => 'A 3rd year IT student from MinSU Main Campus who enjoys building web applications and picking up new tech skills along the way.'
        ];

        $this->call->view('student_profile', $student);
    }
}