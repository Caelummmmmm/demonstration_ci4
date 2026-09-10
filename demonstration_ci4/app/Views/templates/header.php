<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'POS System') ?></title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #1f2937;
            background: #f8fafc;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 8%;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
        }

        .logo {
            color: #111827;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            color: #6b7280;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: #111827;
        }

        main {
            width: 90%;
            max-width: 1000px;
            min-height: 75vh;
            margin: 50px auto;
            padding: 40px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.04);
        }

        h1 {
            margin-top: 0;
            color: #111827;
            font-size: 32px;
        }

        p {
            color: #6b7280;
            line-height: 1.7;
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
        }

        th {
            padding: 14px;
            color: #374151;
            font-size: 13px;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: #f3f4f6;
        }

        td {
            padding: 15px 14px;
            color: #4b5563;
            border-bottom: 1px solid #e5e7eb;
        }

        tbody tr:hover {
            background: #f9fafb;
        }

        footer {
            padding: 20px;
            color: #9ca3af;
            font-size: 13px;
            text-align: center;
        }

        @media (max-width: 700px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                flex-wrap: wrap;
                gap: 15px;
            }

            main {
                margin: 25px auto;
                padding: 25px;
                overflow-x: auto;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

<nav>
    <a class="logo" href="/">SimplePOS</a>

    <div class="nav-links">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/customers">Customers</a>
        <a href="/users">Users</a>
    </div>
</nav>

<main>