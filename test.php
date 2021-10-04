<?php
echo "<form method='POST'>
   <input type='text' name='s_amount' required>
   <input type='submit' name='submit' value='Submit' />
</form>";
$favcar = $_POST['s_amount'];
switch ($favcar){
    case "Toyota";
    echo "I love Toyota";
    break;
    case "Nissan";
    echo "I love Nissan";
    break;
    case "Mercedes";
    echo "I love Mercedes";
    break;
    case "Honda";
    echo "I love Honda";
    break;
    case "BMW";
    echo "I love BMW";
    break;
    default;
    echo "Not in list";
}