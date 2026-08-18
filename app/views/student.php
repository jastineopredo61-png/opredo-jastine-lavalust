<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home - Jastine Opredo</title>
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;600;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0b;
            color: #f4f4f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                radial-gradient(ellipse 60% 50% at 50% -10%, rgba(221,72,20,0.18), transparent 60%),
                linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
            background-size: 100% 100%, 48px 48px, 48px 48px;
            pointer-events: none;
        }
        .card {
            position: relative;
            z-index: 1;
            background: #141416;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 3rem 3.5rem;
            text-align: center;
            max-width: 460px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(221,72,20,0.12);
            border: 1px solid rgba(221,72,20,0.35);
            color: #f97316;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.3rem 0.8rem;
            border-radius: 999px;
            margin-bottom: 1.5rem;
        }
        .avatar {
            width: 76px; height: 76px;
            border-radius: 50%;
            background: linear-gradient(135deg, #dd4814, #b83a10);
            display: flex; align-items: center; justify-content: center;
            font-family: 'Unbounded', sans-serif;
            font-weight: 800;
            font-size: 1.6rem;
            margin: 0 auto 1.2rem;
            box-shadow: 0 0 30px rgba(221,72,20,0.35);
        }
        h1 {
            font-family: 'Unbounded', sans-serif;
            font-weight: 800;
            font-size: 1.7rem;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }
        .sub {
            color: #a1a1aa;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.8rem;
        }
        nav {
            display: flex;
            gap: 0.6rem;
            justify-content: center;
        }
        nav a {
            color: #f4f4f5;
            background: #dd4814;
            text-decoration: none;
            padding: 0.65rem 1.3rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: background 0.2s, transform 0.2s;
        }
        nav a:last-child {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.15);
            color: #d4d4d8;
        }
        nav a:hover { background: #b83a10; transform: translateY(-1px); }
        nav a:last-child:hover { background: rgba(255,255,255,0.06); }
        .footer-tag {
            margin-top: 2rem;
            font-size: 0.72rem;
            color: #52525b;
            letter-spacing: 0.02em;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="badge">Laboratory Activity No. 3</div>
        <div class="avatar">JO</div>
        <h1>Welcome, Jastine!</h1>
        <p class="sub">3rd Year &middot; BS Information Technology<br>Mindoro State University &ndash; Main Campus</p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
        <div class="footer-tag">Built with LavaLust PHP Framework</div>
    </div>
</body>
</html>