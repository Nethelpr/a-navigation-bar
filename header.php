<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collapsible Navbar with Dropdowns</title>
    <link rel="stylesheet" href="style.css"><!--link to stylesheet-->
</head>
<body>
    <header> <!--header-->
        <nav class="navbar"><!--navbar-->

            <div class="brand"><!--for logo-->
                <a href="#">MASHENI FUEL & DIESEL</a>
            </div>

            <div class="menu-toggle" id="menu-toggle"><!--toogle icon-->
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="menu"><!--Menu-->
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="dropdown"><!--menu with dropdown links-->
                    <a href="#">Services</a>

                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>

                </li>

                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
<!--js for toggle function-->
    <script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.querySelector('.menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
    </script>
</header>

