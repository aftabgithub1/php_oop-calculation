<?php include '../inc/header.php';
spl_autoload_register(function($class_name){
    include "../class/".$class_name.".php";
});

$calc = new Calculation;
$me = new Me;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if(empty($num1) || empty($num2)){
        echo "The fild must be empty!";
    } else {
        echo $me->intro.$calc->add($num1, $num2);
    }

    


include '../inc/footer.php';