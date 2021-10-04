<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <style>
        .required{
            color: #FF0000;
        }
    </style>
</head>
<body>
<?php
$name = $myemail = $gender = $comment = $website = "";
$name = test_input($_POST["name"]);
$myemail = test_input($_POST["myemail"]);
$website = test_input($_POST["website"]);
$comment = test_input($_POST["comment"]);
$gender = test_input($_POST["gender"]);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<h1>PHP Form Validation Example</h1>
<p class="required">* required field</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required value="<?php echo $name?>"><br />
    <label for="myemail">E-mail:</label>
    <input type="email" id="myemail" name="myemail" required value="<?php echo $myemail?>"><br />
    <label for="website">Website:</label>
    <input type="url" name="website" id="website" required value="<?php echo $website?>"><br />
    <label for="comment">Comment:</label>
   <textarea id="comment" name="comment" placeholder="Any comments?" rows="5" cols="40" ><?php echo $comment?></textarea><br />
    <label>Gender:</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" required>Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" required>Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other" required>Other<br />
    <input type="submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $myemail;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
