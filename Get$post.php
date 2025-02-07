<?php
$users = array(
    "fayhaa" => "123",
    "aml" => "435",
    "ghadeer" => "8274",
    "ghadah" => "8348",
    "afrah" => "7887",
    "tamim" => "2340"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] == $password) {
        echo "مرحبا بك، " . htmlspecialchars($username) . "!";
        // يمكنك إضافة توجيه إلى صفحة أخرى هنا باستخدام header()
        // header('Location: صفحة_الأخرى.php');
    } else {
        echo "الدخول غير مصرح به. تحقق من اسم المستخدم وكلمة المرور.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>تسجيل الدخول</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="تسجيل الدخول">
    </form>
</body>
</html>