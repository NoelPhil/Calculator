<!DOCTYPE html>
<html>
<head>
    <h4>CALCULATOR</h4>
</head>
<body>

<form action="" method="post">
    <input type="text" name="num1" value="0" placeholder="Enter Number">
        
        <input type="submit" name="Add" value="+">
        <input type="submit" name="Subtract" value="-">
    <br>
    <input type="text" name="num2" value="0" placeholder="Enter Number">
        
        <input type="submit" name="Multiply" value="*">
        <input type="submit" name="Divide" value="/">
    <br>
</form>

<p>=
<?php
    if (isset($_POST['Add'])){
        $num1 = $_POST['num1']; //textbox 1
        $num2 = $_POST['num2']; //textbox 2
        $result = $num1 + $num2;
    }
    if (isset($_POST['Subtract'])){
        $num1 = $_POST['num1']; //textbox 1
        $num2 = $_POST['num2']; //textbox 2
        $result = $num1 - $num2;     
    }
    if (isset($_POST['Multiply'])){
        $num1 = $_POST['num1']; //textbox 1
        $num2 = $_POST['num2']; //textbox 2
        $result = $num1 * $num2;  
    }
    if (isset($_POST['Divide'])){
        $num1 = $_POST['num1']; //textbox 1
        $num2 = $_POST['num2']; //textbox 2
        $result = $num1 / $num2;   
    }
?>
<input type="text" value="<?php echo $result;?>">
</p>

</body>

</html>