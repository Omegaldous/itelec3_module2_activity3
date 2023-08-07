<?php
$email = $_POST['floatingInput'];
$message = $_POST['floatingTextarea2'];

$conn = mysqli_connect('localhost','root','','contact');
if(!$conn){
    die("Connection Failed : ". mysqli_connect_error());
} else {
    $stmt = $conn->prepare("insert into contact(email, message) values(?, ?)");
    $stmt->bind_param("ss", $email, $message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Sent successfully...";
    $stmt->close();
    mysqli_close($conn);
}
?>
