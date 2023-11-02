<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add2.css">
</head>
<body>
<h2>Post a Product</h2>
<form action="post_ad.php" method="POST">



    <label for="title">Title:</label>
    <input type="text" name="title" required><br><br>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea><br><br>
    <label for="price">Price:</label>
    <input type="number" name="price" required><br><br>
    <label for="category">Category:</label>
    <input type="text" name="category" required><br><br>
    <label for="condition">Condition:</label>
    <select name="condition" required>
        <option value="new">New</option>
        <option value="used">Used</option>
    </select><br><br>
    <input type="submit" value="Post Ad">

<h1>Upload an Image</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="image" accept="image/*">

<input type="submit" value="Upload">
</body>
</html>