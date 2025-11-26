<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

$request_method = $_SERVER["REQUEST_METHOD"];

if ($request_method == "POST") {
     $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];
    // $city = $_POST['city'];

    // Recipient email address
    $to = 'amrut.spandigit@gmail.com'; 

    // Email subject
    $subject = 'New Enquiry form Matrimony';
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    // $message .= "<tr><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Phone</strong> </td><td>" . $phone . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . $msg . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    // Email headers
    $headers = "From: inquiry@spandigitproject.me \r\n";
    $headers .= "Cc: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Application submitted successfully. We will contact you soon.";

             
    } else {
        echo 'Unable to submit application. Please try again later.';
    }
} else {
    echo "Invalid request method: $request_method";
}
?>

<div class=thankyoucontent>
 <div class="disp" style="display: flex;flex-direction: column;justify-content: center; align-items: center;" >
     <h1>Thank you</h1> 
 <p>Thankyou for contacting us! We will reach you soon......</p>
 </div>
</div>
 <style>
     .thankyoucontent{
         height:80vh;
         display:flex;
         justify-content:center;
         align-items:center;
     }
     @media screen and (max-width: 768px) {
        .disp p{
            text-align:center;
        }
        .thankyoucontent{
         height:50vh;
         display:flex;
         justify-content:center;
         align-items:center;
     }
}
 </style>



