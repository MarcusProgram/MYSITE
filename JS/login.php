<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';
include 'templates/header.php';


if (isset($_SESSION['user_id'])) {
    header("Location: events.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, username, password, status, role FROM users WHERE username = ?");

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $fetched_username, $hashed_password, $status, $role);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['status'] = $status;
                $_SESSION['role'] = $role;
                $_SESSION['avatar'] = 'images/avatar.jpg';

                header("Location: events.php");
                exit();
            } else {
                echo "<p>Invalid password.</p>";
            }
        } else {
            echo "<p>No user found with that username.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Error preparing statement: " . $conn->error . "</p>";
    }
}
?>
    <form method="POST">
        <input type="text" name="username" required placeholder="Username">
        <input type="password" name="password" required placeholder="Password">
        <button type="submit">Login</button>
        <script>alert("Братья африки приветствуют вас (F0R8IDD3N is there)")</script>
        <button type="button" onclick="window.location.href='register.php'">Register</button>
    </form>
</body>
<?php include 'templates/footer.php'; ?>
