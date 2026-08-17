<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Home - Jastine Opredo</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #0a0a0b;
            color: #f4f4f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .card {
            background: #18181b;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            padding: 2.5rem 3rem;
        }
        h1 { color: #dd4814; margin-bottom: 0.5rem; }
        p { color: #a1a1aa; margin-bottom: 1.5rem; }
        nav a {
            color: #f4f4f5;
            background: #dd4814;
            text-decoration: none;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 600;
            margin: 0 0.4rem;
        }
        nav a:hover { background: #b83a10; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome, Jastine!</h1>
        <p>This is the Student Home Page (Laboratory Activity No. 3)</p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>
