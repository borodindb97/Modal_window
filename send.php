$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['text'];

$name = htmlspecialchars($name);
$tel =htmlspecialchars($tel);
$email = $htmlspecialchars($email);
$text = htmlspecialchars($text);

$name = urldecode($name);
$tel =urldecode($tel);
$email = $urldecode($email);
$text = urldecode($text);

$name = trim($name);
$tel =trim($tel);
$email = $trim($email);
$text = trim($text);

mail($email, "Ваши данные", "Имя:".$name."Телефон:".$tel."Почта:".$email."Товар:".$text , "From: borodindb97@mail.ru \r\n")