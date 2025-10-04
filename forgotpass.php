<!-- forgot_password.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: yellowgreen;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <img src="dist/img/download.jpeg" width=100%>
        <form action="" method="post">
            <label for="email">Enter your email address:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Submit</button>
            <br/>
            <h3><a href="index.php">                Login</a></h3>
        </form>
        
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <img src="dist/img/download.png" width=4%><strong> &copy;<?php echo date("Y");?>Payroll pulse | </strong> Developed By VEDIKA GUNJKAR</footer>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Simulate checking the email in the database
    $dummyEmail = "user@example.com";

    if ($email == $dummyEmail) {
        // Generate a simple token
        $token = bin2hex(random_bytes(16));

        // Simulate storing the token (in real scenarios, store it in a database)
        file_put_contents('tokens/' . $token, $email);

        // Simulate sending an email
        $resetLink = "http://yourwebsite.com/reset_password.php?token=" . $token;
        $subject = 'Password Reset Request';
        $message = "Here is your password reset link: \n" . $resetLink;

        // Simple mail function for demonstration (use a proper mailer in production)
        mail($email, $subject, $message);

        echo "Check your email for a link to reset your password.";
    } else {
        echo "No account found with that email.";
    }
} else {
    echo "";
}
?>
<!-- reset_password.php -->
<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Simulate checking the token (in real scenarios, check it in a database)
    if (file_exists('tokens/' . $token)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Reset Password</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .container {
                    max-width: 400px;
                    margin: 50px auto;
                    padding: 20px;
                    border: 1px solid #ccc;
                    border-radius: 10px;
                }
                h2 {
                    text-align: center;
                }
                input[type="password"] {
                    width: 100%;
                    padding: 10px;
                    margin: 10px 0;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }
                button {
                    width: 100%;
                    padding: 10px;
                    background-color: #007BFF;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }
                button:hover {
                    background-color: #0056b3;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Reset Password</h2>
                <form action="" method="post">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                    <label for="new_password">New Password:</label>
                    <input type="password" id="new_password" name="new_password" required>
                    <button type="submit">Reset Password</button>
                </form>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "";
    }
} else {
    echo "";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    // Simulate checking the token (in real scenarios, check it in a database)
    $tokenFile = 'tokens/' . $token;
    if (file_exists($tokenFile)) {
        $email = file_get_contents($tokenFile);

        // Simulate updating the user's password (in real scenarios, update it in a database)
        // In a real scenario, hash the password before storing it
        $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

        // Remove the token file
        unlink($tokenFile);

        echo "Your password has been reset successfully.";
    } else {
        echo "";
    }
} else {
    echo "";
}

?>
