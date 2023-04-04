<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The City Farm - Newsletter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
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
        <div class="hero-image">
            <div class="hero-text">
                <h1>The City Farm</h1>
                <p>Discover Sustainable Living at The City Farm</p>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Stay up-to-date with the latest news and events at The City Farm by subscribing to our newsletter.</p>
            <form action="newsletter_submit.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <input type="submit" value="Subscribe">
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 City Farm. All rights reserved.</p>
    </footer>
</body>

</html>
