<?php include 'inc/header.php';
spl_autoload_register(function($class_name){
    include "class/".$class_name.".php";
});
?>


<form action="" method="post">
    <input type="text" name="num1" placeholder="First Number">
    <input type="text" name="num2" placeholder="Second Number">
    <input type="submit" name="calculation" value="Add">
</form>

<?php
$calc = new Calculation;
$me = new Me;

if(isset($_POST['calculation'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if(empty($num1) || empty($num2)){
        echo "The feild(s) must be empty!";
    } else {
        echo $me->intro."<br>";
        echo "The Addition is: ".$calc->add($num1, $num2)."<br>";
        echo "The Subtraction is: ".$calc->subtract($num1, $num2)."<br>";
        echo "The Multiplication is: ".$calc->multiply($num1, $num2)."<br>";
        echo "The Division is: ".$calc->divide($num1, $num2)."<br>";
    }
}
    
?>

<?php include 'inc/footer.php'; ?>