<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php First App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="hero">
    <?php
    if(isset($_POST['submit'])) {
        echo "The username is " . ($_POST["name"]) . "📱💻🖱️📶";
    } else {
        echo "The username is empty " ;
    }
    ?>
</h1>

    <div class="container">
        <div class="holder">
            <form action="index.php" method="post">

            <div class="wrapper">
                <input type="text" placeholder="Enter username" name="name">
            </div>
            <br>
            <br>
        
            <div class="wrapper">
            <input type="submit" value="submit" name="submit">

            </div>
            </form>
        </div>
    </div>
    <h4 class="footer">made by shaaban <span>🦸</span>  </h4>
</body>
</html>