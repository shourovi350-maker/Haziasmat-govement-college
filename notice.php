<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>নোটিস | সরকারি হাজী আসমত কলেজ</title>
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
    <h2>নোটিস বোর্ড</h2>
    <?php
    $sql = "SELECT * FROM notices ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<div class="notice">';
            echo '<h3>'.$row['title'].'</h3>';
            echo '<p>'.$row['description'].'</p>';
            if($row['image']){
                echo '<img src="uploads/'.$row['image'].'" alt="Notice Image">';
            }
            echo '</div>';
        }
    } else {
        echo '<p>কোনো নোটিস নেই।</p>';
    }
    ?>
</div>

<footer>© 2026 সরকারি হাজী আসমত কলেজ. সব অধিকার সংরক্ষিত.</footer>
</body>
</html>
