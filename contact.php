<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>যোগাযোগ | সরকারি হাজী আসমত কলেজ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>সরকারি হাজী আসমত কলেজ</header>
<nav>
    <a href="index.php">হোম</a>
    <a href="notices.php">নোটিস</a>
    <a href="contact.php">যোগাযোগ</a>
</nav>

<div class="container">
    <h2>যোগাযোগ করুন</h2>
    <?php
    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo '<p><strong>'.$row['type'].':</strong> '.$row['detail'].'</p>';
    }
    ?>
</div>

<footer>© 2026 সরকারি হাজী আসমত কলেজ. সব অধিকার সংরক্ষিত.</footer>
</body>
</html>
