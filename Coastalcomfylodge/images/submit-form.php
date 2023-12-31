<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $guests=$_POST["guests"];
    $days=$_POST["days"];
    $hours=$_POST["hours"];
    $arrivalDate=$_POST["arrival-date"];
    $departureDate=$_POST["departure-date"];
    $room=$_POST["room"];
    $paymentMethod=$_POST["payment-Method"];

    $to="nkarupeni@gmail.com";
    $subject="New Reservation";
    $message="Name:$name\n";
    $message.="Email:$email\n";
    $message.="Number of Guests:$guests\n";
    $message.="Number of Days: $days\n";
    $message.="Number of Hours: $hours\n";
    $message.="Arrival Date:$arrivalDate\n";
    $message.="Departure Date:$departureDate\n";
    $message.="Number of rooms: $room\n";
    $message.="Payment Method:$paymentMethod\n";

    mail($to,$subject,$message);
    header("Location:thank-you.html");
    exit();
}
?>