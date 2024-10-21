<?php
// Set cookies if form is submitted
if (isset($_POST['submit'])) 
{
    $bgcolor = $_POST['bgcolor'];
    $textcolor = $_POST['textcolor'];
    
    // Set cookies to expire in 30 days
    setcookie("bgcolor", $bgcolor, time() + (86400 * 30), "/");
    setcookie("textcolor", $textcolor, time() + (86400 * 30), "/");

    // Refresh to apply the color change immediately
    header("Location: " . $_SERVER['PHP_SELF']);
}

// Check if cookies are set and assign the default values if not
$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "#FFFFFF";
$textcolor = isset($_COOKIE['textcolor']) ? $_COOKIE['textcolor'] : "#000000";
?>

Form.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background and Text Color using Cookies</title>
</head>
<body style="background-color: <?php echo $bgcolor; ?>; color: <?php echo $textcolor; ?>;">

<h1>Change Background and Text Color</h1>

<form method="POST" action="">
    <label for="bgcolor">Select Background Color:</label>
    <input type="color" name="bgcolor" value="<?php echo $bgcolor; ?>"><br><br>

    <label for="textcolor">Select Text Color:</label>
    <input type="color" name="textcolor" value="<?php echo $textcolor; ?>"><br><br>

    <input type="submit" name="submit" value="Change Color">
</form>

</body>
</html>
