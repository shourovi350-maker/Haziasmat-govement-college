<?php include 'config.php'; ?>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];

    $imageName = '';
    if(isset($_FILES['image']) && $_FILES['image']['name'] != ''){
        $imageName = time().'_'.$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$imageName);
    }

    $sql = "INSERT INTO notices (title, description, image) VALUES ('$title', '$desc', '$imageName')";
    if($conn->query($sql)){
        echo "<p style='color:green;'>নোটিস সফলভাবে আপলোড হয়েছে।</p>";
    } else {
        echo "<p style='color:red;'>ত্রুটি: ".$conn->error."</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>অ্যাডমিন | নোটিস আপলোড</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>সরকারি হাজী আসমত কলেজ - অ্যাডমিন</header>
<div class="container">
    <h2>নতুন নোটিস আপলোড</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="নোটিস শিরোনাম" required>
        <textarea name="description" placeholder="বিস্তারিত" required></textarea>
        <input type="file" name="image">
        <button type="submit" name="submit">আপলোড করুন</button>
    </form>
</div>
</body>
</html>
