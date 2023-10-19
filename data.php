<?php require_once('form.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <title>data</title>
</head>
<body>
    <div class="tweet">
    <?php
        echo "<p>".$_POST['title']."</p>";    
        echo "<p>".$_POST['author']."</p>";
        echo "<p>".$_POST['content']."</p>";
    ?>
    </div>
</body>
</html>
