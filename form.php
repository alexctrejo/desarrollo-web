<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>form</title>
    <script defer src="./formValidator.js"></script>
</head>
<body>
    <form action="data.php" method="POST" id="form" >
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Title">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" placeholder="Author">
        <label for="content">Content</label>
        <input type="text" name="content" id="content" placeholder="Content">
        <input type="submit" value="Submit">
    </form>
</body>
</html>