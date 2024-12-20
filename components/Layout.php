<?php
$layout = new class {
    #[\Darken\Attributes\Param]
    public $title;

    #[\Darken\Attributes\Slot]
    public $content;

    public function getYear() : int
    {
        return date('Y');
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $layout->title; ?></title>
    <!-- Google Fonts for Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container Styling */
        .container {
            width: 90%;
            max-width: 900px;
            min-width: 700px;
            background-color: #1e1e1e;
            border: 2px solid transparent;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
            transition: border 0.3s ease;
        }

        /* Gradient Border Effect */
        .container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #ff4b2b, #ff416c);
            z-index: -1;
            border-radius: 14px;
            filter: blur(8px);
            opacity: 0.7;
        }

        /* Navigation Bar Styling */
        nav {
            width: 100%;
            padding: 20px 40px;
            background: rgba(30, 30, 30, 0.9);
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        /* Logo Styling */
        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: #ff416c;
        }

        /* Navigation Links */
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        /* Underline Effect on Hover */
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #ff416c;
            left: 0;
            bottom: -5px;
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        nav ul li a:hover {
            color: #ff416c;
        }

        /* Content Section */
        .content {
            padding: 60px 40px;
            text-align: center;
        }

        .content h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff416c;
            transition: transform 0.3s ease;
        }

        .content p {
            font-size: 1.2rem;
            color: #cccccc;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Button Styling */
        .content .cta-button {
            margin-top: 30px;
            padding: 12px 30px;
            background-color: #ff416c;
            color: #ffffff;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-family: 'Montserrat', sans-serif;
        }

        .content .cta-button:hover {
            background-color: #ff4b2b;
            transform: translateY(-3px);
        }

        /* Subtle Animation on Content Hover */
        .content:hover h1 {
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                padding: 15px 20px;
            }

            .content {
                padding: 40px 20px;
            }

            .content h1 {
                font-size: 2.5rem;
            }

            .content p {
                font-size: 1rem;
            }

            nav ul {
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
            }

            nav ul li {
                width: 100%;
            }

            nav ul li a {
                display: block;
                padding: 10px 0;
            }

            .content h1 {
                font-size: 2rem;
            }

            .content p {
                font-size: 0.95rem;
            }

            .content .cta-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav>
            <div class="logo">Darken</div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/blogs">Blogs</a></li>
            </ul>
        </nav>

        <!-- Splash Screen Content -->
        <div class="content">
            <?= $layout->content; ?>
        </div>

    <!-- Footer Section -->
    <footer style="padding: 20px 40px; text-align: center;  color: #cccccc; font-size: 0.9rem;">
        &copy; <?= $layout->getYear(); ?> Darken. All rights reserved.
    </footer>
    </div>
</body>
</html>
