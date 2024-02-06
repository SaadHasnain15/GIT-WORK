<form action="index.php" method="post">
    <input type="text" name="num1">
    <input type="text" name="num2">

    <input type="submit" name="add" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="multi" value="*">
    <input type="submit" name="div" value="/">
</form>

<?php
if(isset($_POST['add'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$add = $num1 + $num2;

echo $add;


}

if(isset($_POST['sub'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $sub = $num1 - $num2;
    
    echo $sub;
}

if(isset($_POST['multi'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $multi = $num1 * $num2;
    
    echo $multi;
}


if(isset($_POST['div'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $div = $num1 / $num2;
    
    echo $div;
}



?>