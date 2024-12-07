<?php

require_once('includes/connect.php');

//gather the form content
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['comments'];

$errors = [];

//validate and clean these values
$fname = trim($name);
$email = trim($email);
$phone = trim($phone);
$msg = trim($msg);

if(empty($name)) {
    $errors['name'] = 'Name cant be empty';
}
if(empty($msg)) {
    $errors['comments'] = 'Comment field cant be empty';
}
if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}
if(empty($phone)) {
    $errors['phone'] = 'Phone field cant be empty';
}

if(empty($errors)) {
    // Combine first name and last name into a single 'name' field this is based on my database table structure
    $name = $fname . ' ' . $lname;

    //insert these values as a new row in the contacts table
    $query = "INSERT INTO contacts (name, email, message, phone_num) VALUES(?, ?, ?, ?)";

    //As per class discussion, we need to secure our form to prevent SQL injection
    //So in our query, the ? in the query act as "blanks" where actual data will be inserted later
    $stmt = $connect->prepare($query); //Then prepare the query
    $stmt->bind_param("ssss", $name, $email, $msg, $phone); //The the bind_param function safely substitutes the ? with actual user inputs.
    // and the "sss" specifies the data types: s (for name, email, message).

    if ($stmt->execute()) {
        // Format and send these values in an email
        $to = 'sheldongohetia.ca@gmail.com';
        $subject = 'Message from your Portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Phone: " . $phone . "\n";
        $message .= "Message: " . $msg . "\n";

        // Send the email
        mail($to, $subject, $message);

        // Redirect to thank_you page
        header('Location: thank_you.php');
    } else {
        echo 'Error: Could not save your message. Please try again.';
    }

    $stmt->close();
} else {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: #0a0a0f;
            }

            .container {
                text-align: center;
                background: #16161d;
                padding: 30px 40px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                border: 1px solid rgba(24, 238, 88, 0.5);
            }

            h1 {
                color: #0ad647;
                font-size: 2em;
                margin-bottom: 20px;
            }

            p {
                font-size: 1.2em;
                color: white;
                margin-bottom: 30px;
            }

            a {
                display: inline-block;
                padding: 10px 20px;
                background: #0ad647;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                font-size: 1em;
                transition: background 0.3s;
            }

            a:hover {
                background: #17b045;
            }
        </style>
    </head>
    <body>';

    if (!empty($errors)) {
        $errorMessages = '';
        foreach ($errors as $error) {
            $errorMessages .= '<p>' . htmlspecialchars($error) . '</p>';
        }
    
        echo '
        <div class="container">
            <h1>Oops! Something went wrong!</h1> 
            ' . $errorMessages . '
            <a href="index.php">Back to Home</a>
        </div>';
    }

    echo '</body>
    </html>';
}

$connect->close();

?>