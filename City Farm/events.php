<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events - The City Farm</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="visit.html">Visit Us</a></li>
                <li><a href="involved.html">Get Involved</a></li>
                <li><a href="donate.html">Donate</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="newsletter.php">Newsletter</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        </nav>
        <div class="hero-image">
            <div class="hero-text">
                <h1>The City Farm</h1>
                <p>Discover Sustainable Living at The City Farm</p>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="container">
                <h2>Upcoming Events</h2>
                <?php include 'upcoming_events.php'; ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 City Farm. All rights reserved.</p>
    </footer>
</body>

</html>
