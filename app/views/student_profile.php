<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile - Jastine Opredo</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0a0a0b;
            color: #f4f4f5;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 2rem 0;
        }
        .card {
            background: #18181b;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            padding: 2.5rem 3rem;
            min-width: 320px;
            max-width: 480px;
        }
        h1 { color: #dd4814; margin-bottom: 1rem; }
        p { margin: 0.4rem 0; color: #e4e4e7; }
        p span { color: #a1a1aa; }
        .desc {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.08);
            color: #d4d4d8;
            font-style: italic;
            line-height: 1.5;
        }
        nav { margin-top: 1.5rem; }
        nav a {
            color: #f4f4f5;
            background: #dd4814;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 600;
            margin-right: 0.4rem;
        }
        nav a:hover { background: #b83a10; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>
        <p><span>Student ID:</span> <?= $student_id ?></p>
        <p><span>Name:</span> <?= $name ?></p>
        <p><span>Course:</span> <?= $course ?></p>
        <p><span>Year Level:</span> <?= $year ?></p>
        <p><span>Section:</span> <?= $section ?></p>
        <p><span>Email:</span> <?= $email ?></p>
        <p><span>Address:</span> <?= $address ?></p>
        <p><span>Contact No.:</span> <?= $contact_no ?></p>
        <p><span>Skills:</span> <?= $skills ?></p>
        <p><span>Hobbies:</span> <?= $hobbies ?></p>
        <p class="desc"><?= $description ?></p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>