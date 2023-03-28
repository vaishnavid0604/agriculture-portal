<?php
include 'contact.php';
include 'sql.php';


if (isset($_POST["submit"])) {
    $user_name = $_POST['user_name'];
    $user_mobile = $_POST['user_mobile'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];
    $user_message = $_POST['user_message'];
    $show_modal = false;

    $query = "INSERT into contactus(c_name,c_mobile,c_email,c_address,c_message) VALUES('$user_name','$user_mobile','$user_email','$user_address','$user_message')";
    $success = $conn->query($query);
    if ($success) {
        echo "<script type='text/javascript'>
        $('#mysuccessModal').modal('show');
        function pagesuccessRedirect() {
            location.replace('index.php');
        }</script>";
    } else {
        echo "<script type='text/javascript'>
        $('#myunsuccessModal').modal('show');
        function pageunsuccessRedirect() {
            location.replace('contact.php');
        }</script>";
    }
}
?>

<!-- <html>
</html> -->