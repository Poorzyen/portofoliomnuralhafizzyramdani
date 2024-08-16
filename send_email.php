<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile_number = htmlspecialchars($_POST['mobile_number']);
    $email_subject = htmlspecialchars($_POST['email_subject']);
    $message = htmlspecialchars($_POST['message']);

    // Menyiapkan email
    $to = "ha9263826@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "Contact Form Submission: $email_subject";
    $email_body = "Full Name: $full_name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Mobile Number: $mobile_number\n";
    $email_body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Mengirim email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan dalam pengiriman pesan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
