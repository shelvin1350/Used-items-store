
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .tile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .tile {
            background-color: #333;
            border-radius: 10px;
            border-style: box-shadow;
            margin: 10px;
            padding: 10px;
            width: 200px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .tile img {
            max-width: 100%;
            border-radius: 5px;
        }

        .tile h3 {
            color: #3498db;
        }
    </style>
</head>
<body>
    <h2>Image Tiles</h2>
    <div class="tile-container">
        <div class="tile">
            <img src="images/jeep.jpg" alt="Image 1">
            <h3>Title 1</h3>
        </div>
        <div class="tile">
            <img src="image2.jpg" alt="Image 2">
            <h3>Title 2</h3>
        </div>
        <div class="tile">
            <img src="image3.jpg" alt="Image 3">
            <h3>Title 3</h3>
        </div>
        <div class="tile">
            <img src="image4.jpg" alt="Image 4">
            <h3>Title 4</h3>
        </div>
        <div class="tile">
            <img src="image5.jpg" alt="Image 5">
            <h3>Title 5</h3>
        </div>
    </div>
</body>
</html>