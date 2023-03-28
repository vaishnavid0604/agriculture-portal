<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $crop = $_POST['crop'];
    $quantity = $_POST['quantity'];
    $TradeId = $_POST['TradeId'];
    $x = $_POST['x'];
    $flag = $_POST['flag'];

setcookie("crop", $crop);
setcookie("quantity", $quantity);
setcookie("TradeId", $TradeId);
setcookie("x", $x);
setcookie("flag", $flag);

header('Location: cbuy_crops.php'); // Redirect to file2.php
}
?>