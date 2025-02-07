<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .thank-you-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        .thank-you-container h1 {
            font-size: 24px;
            color: #4CAF50;
        }

        .thank-you-container p {
            font-size: 16px;
            color: #333;
        }

        .thank-you-container a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .thank-you-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <h1>Thank you for logging in!</h1>
        <p>You will get your product delivered soon. Thanks for your patience, and we hope you stay healthy!</p>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['user_id']); ?></p> 
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
