<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Site Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $heroTitle = "Welcome to Our Gaming World";
    $heroText = "Discover the ultimate gaming experience with us.";

    $aboutTitle = "About Us";
    $aboutContent = "We are pioneers in gaming, providing top-notch gaming experiences.";

    $servicesTitle = "Our Services";
    $servicesContent = "Explore our wide range of gaming services and products.";

    $contactTitle = "Contact Us";
    $contactContent = "Get in touch for more information about our services.";
    ?>

    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h1><?php echo $heroTitle; ?></h1>
        <p><?php echo $heroText; ?></p>
    </section>

    <section id="about">
        <h2><?php echo $aboutTitle; ?></h2>
        <p><?php echo $aboutContent; ?></p>
    </section>

    <section id="services">
        <h2><?php echo $servicesTitle; ?></h2>
        <p><?php echo $servicesContent; ?></p>
    </section>

    <section id="contact">
        <h2><?php echo $contactTitle; ?></h2>
        <p><?php echo $contactContent; ?></p>
    </section>

    <footer>
        <p>© 2024 Game Site. All rights reserved.</p>
    </footer>
</body>
</html>

