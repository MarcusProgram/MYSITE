<?php
session_start();
include 'templates/header.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<header>
    <h1>Welcome to the Event Management App</h1>
</header>

<main>
    <section>
        <h2>About This App</h2>
        <p>This Event Management App is designed to help you easily manage and organize events.</p>
        <p>Here are some of the key features:</p>
        <ul>
            <li><strong>Create Events:</strong> Quickly create new events by providing essential details such as title, date, time, and location.</li>
            <li><strong>Manage Events:</strong> View and manage your upcoming events, including editing and deleting them as needed.</li>
            <li><strong>User-Friendly Interface:</strong> Enjoy a clean and intuitive interface that makes event management a breeze.</li>
            <li><strong>Responsive Design:</strong> Access the app from any device, whether it's a desktop, tablet, or smartphone.</li>
        </ul>
    </section>
    <script>alert("Братья африки приветствуют вас")</script>
    <section>
        <h2>Getting Started</h2>
        <ul>
            <li><strong>Home page</strong> is exactly where you are right now. This place is here to help you figure out the functionality of the app =)</li>
            <li><strong>Events</strong> is where all the action takes place. Manage your things in a simple and delicate manner.</li>
            <li><strong>Profile</strong> is your personal private space. A perfect place to be just a chill guy.</li>
            <li><strong>Logout.</strong> Not feeling like planning something? Do not forget to logout, but we will be waiting for you to come back later!</li>
        </ul> <!-- ÐÐ°ÐºÑÑÐ²Ð°ÑÑÐ¸Ð¹ ÑÐµÐ³ Ð´Ð¾Ð±Ð°Ð²Ð»ÐµÐ½ -->
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Event Management App. All rights reserved.</p>
</footer>

</body>
</html>
