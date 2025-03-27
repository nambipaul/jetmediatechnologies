<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // File where emails will be saved
        $file = 'subscribers.txt';

        // Check if email is already subscribed
        if (strpos(file_get_contents($file), $email) === false) {
            file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
            echo "Thank you for subscribing!";
        } else {
            echo "You are already subscribed!";
        }
    } else {
        echo "Invalid email address!";
    }
} else {
    echo "Invalid request!";
}
?>
