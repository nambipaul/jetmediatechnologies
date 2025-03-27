<?php
$file = 'subscribers.txt';

if (file_exists($file)) {
    $emails = file($file, FILE_IGNORE_NEW_LINES);
    echo "<h2>Subscribed Emails:</h2><ul>";
    foreach ($emails as $email) {
        echo "<li>" . htmlspecialchars($email) . "</li>";
    }
    echo "</ul>";
} else {
    echo "No subscribers yet.";
}
?>
