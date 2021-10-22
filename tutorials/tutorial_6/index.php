<!doctype html>
<html>

<head>
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrap">
        <div id="gallery">
            <?php
            $list = scandir("photo");
            for ($i = 2; $i < count($list); $i++) {
                $name = $list[$i];
                echo "<img src='photo/$name' width='200'>";
            }
            ?>
        </div>
        <div id="gallery">
            <?php
            $list = scandir("text");
            for ($i = 2; $i < count($list); $i++) {
                $name = $list[$i];
                echo "<div>
                        <ul>
                            <li>$name<li/>
                        </ul>    
                      </div>";
            }
            ?>
        </div>
        <div id="form">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label for="photo text">Choose a Photo</label>
                <input type="file" name="photo" id="photo">
                <input type="submit" value="Upload" />
            </form>
        </div>
    </div>
</body>

</html>