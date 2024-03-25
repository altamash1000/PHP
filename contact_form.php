<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    
    $formatted_data = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message\n\n";

    
    $file_path = "contact_entries.txt";

  
    file_put_contents($file_path, $formatted_data, FILE_APPEND);

   
    echo "Thank you! Your information has been saved.";
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Form in PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="" name="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $("#contactForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                }
            }
        });
    });
</script>

</body>
</html>
