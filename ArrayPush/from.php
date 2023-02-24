<?php
session_start();
if(isset($_SESSION['number'])){
    $arr=$_SESSION['number'];
}else{
    $arr=[];
}
if (isset($_POST['num'])) {
    $num = $_POST['num'];

    if (is_numeric($num)) {
        array_push($arr, $num);
        $_SESSION['number']=$arr;
    } else {
        echo"Please enter valid value...";
    }
}
if (isset($_POST['reset'])) {
    $arr=[];
    $_SESSION['number']=$arr;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Enter Array</label>
             <input type="text" name="num"  placeholder="Enter the Array" required>
             <button type="submit" name="submit">ADD</button>
             <button type="submits" name="reset" > RESET</button><br/><br/>
             current Array is:<?php  echo implode(", ",$arr);?>

    </form>
</body>
</html>
