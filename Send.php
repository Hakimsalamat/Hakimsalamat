<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $details = $_POST['details'];

    $message = "اطلاعات مشاوره:\n";
    $message .= "نام کامل: $name\n";
    $message .= "سن: $age\n";
    $message .= "شماره تماس: $phone\n";
    $message .= "توضیحات: $details\n";

    $token = "7673899486:AAEFvC_UWc50Kd5H_fTv_0frQk9fjFMxFNc";
    $chat_id = "6801497242";
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

    file_get_contents($url);
}
?>