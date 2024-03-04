<?php
// Formdan gelen verileri al
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Alıcı e-posta adresi
$to = 'iletisim@example.com'; // Buraya kendi e-posta adresinizi ekleyin

// E-posta başlığı
$subject = 'Yeni İletişim Formu Mesajı';

// E-posta içeriği
$body = "Ad Soyad: $name\n";
$body .= "Email Adresi: $email\n";
$body .= "Telefon Numarası: $subject\n";
$body .= "Mesaj: $message\n";

// E-posta gönderme
$mailSuccess = mail($to, $subject, $body);

// Gönderilen e-postanın durumunu kontrol et
if ($mailSuccess) {
    // Eğer e-posta başarıyla gönderildiyse, başarılı mesajını göster
    echo json_encode(['status' => 'success', 'message' => 'Mesajınız İlgili Departmana İletilmiştir.']);
} else {
    // Eğer e-posta gönderilemediyse, hata mesajını göster
    echo json_encode(['status' => 'error', 'message' => 'Mesajınız Gönderilirken Beklenmedik Bir Sorun Oluştu.']);
}
?>
