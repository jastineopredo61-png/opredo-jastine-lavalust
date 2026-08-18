<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - Jastine Opredo</title>
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
            padding: 2.5rem 1rem;
            position: relative;
            overflow-x: hidden;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                radial-gradient(ellipse 60% 50% at 50% -10%, rgba(221,72,20,0.16), transparent 60%),
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
            padding: 2.75rem 2.5rem;
            max-width: 460px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.5);
        }
        .top {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.6rem;
        }
        .avatar {
            width: 60px; height: 60px;
            flex-shrink: 0;
            border-radius: 50%;
            background: linear-gradient(135deg, #dd4814, #b83a10);
            display: flex; align-items: center; justify-content: center;
            font-family: 'Unbounded', sans-serif;
            font-weight: 800;
            font-size: 1.25rem;
            box-shadow: 0 0 24px rgba(221,72,20,0.3);
        }
        h1 {
            font-family: 'Unbounded', sans-serif;
            font-weight: 800;
            font-size: 1.25rem;
            letter-spacing: -0.01em;
        }
        .top .role {
            font-size: 0.8rem;
            color: #a1a1aa;
            margin-top: 0.15rem;
        }
        .quote {
            font-style: italic;
            color: #f97316;
            font-size: 0.92rem;
            border-left: 3px solid #dd4814;
            padding-left: 0.9rem;
            margin-bottom: 1.6rem;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.9rem 1.2rem;
            margin-bottom: 1.4rem;
        }
        .field { min-width: 0; }
        .field .label {
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #71717a;
            margin-bottom: 0.15rem;
        }
        .field .value {
            font-size: 0.9rem;
            color: #f4f4f5;
            word-break: break-word;
        }
        .field.full { grid-column: 1 / -1; }
        .desc {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 10px;
            padding: 0.9rem 1.1rem;
            font-size: 0.85rem;
            color: #d4d4d8;
            line-height: 1.55;
            margin-bottom: 1.5rem;
        }
        .socials {
            display: flex;
            gap: 0.55rem;
            margin-bottom: 1.6rem;
        }
        .socials a {
            flex: 1;
            text-align: center;
            text-decoration: none;
            color: #e4e4e7;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 8px;
            padding: 0.55rem 0.4rem;
            font-size: 0.78rem;
            font-weight: 600;
            transition: background 0.2s, border-color 0.2s;
        }
        .socials a:hover {
            background: rgba(221,72,20,0.1);
            border-color: rgba(221,72,20,0.4);
        }
        nav {
            display: flex;
            gap: 0.6rem;
        }
        nav a {
            color: #f4f4f5;
            background: #dd4814;
            text-decoration: none;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: background 0.2s, transform 0.2s;
        }
        nav a:last-child {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.15);
            color: #d4d4d8;
        }
        nav a:hover { background: #b83a10; transform: translateY(-1px); }
        nav a:last-child:hover { background: rgba(255,255,255,0.06); }
    </style>
</head>
<body>
    <div class="card">
        <div class="top">
            <div class="avatar">JO</div>
            <div>
                <h1><?= $name ?></h1>
                <div class="role"><?= $course ?> &middot; <?= $year ?></div>
            </div>
        </div>

        <div class="quote">&ldquo;You win some, you lose some.&rdquo;</div>

        <div class="grid">
            <div class="field"><div class="label">Student ID</div><div class="value"><?= $student_id ?></div></div>
            <div class="field"><div class="label">Section</div><div class="value"><?= $section ?></div></div>
            <div class="field"><div class="label">Email</div><div class="value"><?= $email ?></div></div>
            <div class="field"><div class="label">Contact No.</div><div class="value"><?= $contact_no ?></div></div>
            <div class="field full"><div class="label">Address</div><div class="value"><?= $address ?></div></div>
            <div class="field full"><div class="label">Skills</div><div class="value"><?= $skills ?></div></div>
            <div class="field full"><div class="label">Hobbies</div><div class="value"><?= $hobbies ?></div></div>
        </div>

        <div class="desc"><?= $description ?></div>

        <div class="socials">
            <a href="https://github.com/jastineopredo61-png" target="_blank">GitHub</a>
            <a href="https://www.facebook.com/tinesztunna/" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/soultied2rheian/" target="_blank">Instagram</a>
        </div>

        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>