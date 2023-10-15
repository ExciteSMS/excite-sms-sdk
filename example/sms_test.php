<!DOCTYPE html>
<html>
<head>
    <title>ExciteSMS Test</title>
</head>
<body>
    <h1>ExciteSMS Test</h1>

    <?php
    require 'vendor/autoload.php'; // Include the Composer autoloader

    use ExcitesmsPhpSdk\ExcitesmsPhpSdk\ExciteSms;

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $baseUrl = 'https://portal.excitesms.tech';
        $apiKey = 'Your-API-Key'; // Replace with your API key

        $exciteSms = new ExciteSms($baseUrl, $apiKey);

        // Get data from the form
        $recipient = $_POST['recipient'];
        $senderId = $_POST['sender_id'];
        $message = $_POST['message'];

        // Send the SMS
        $response = $exciteSms->sendSingleContactListSms($recipient, $senderId, $message);

        // Handle the response as needed
        echo '<p>API Response:</p>';
        echo '<pre>' . $response . '</pre>';
    }
    ?>

    <form method="post">
        <label for="recipient">Recipient:</label>
        <input type="text" name="recipient" id="recipient" required><br>

        <label for="sender_id">Sender ID:</label>
        <input type="text" name="sender_id" id="sender_id" required><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea><br>

        <input type="submit" value="Send SMS">
    </form>
</body>
</html>
