<?php
    session_start();
    $num1 = rand(0,10);
    $num2 = rand(0,10);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $_POST will contain all values provided by 
        // inputs with name attributes
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];  
}
     if($number1 == $number1 && $number2 == $number2){
        $_SESSION["$number1"] = $number1;
        $_SESSION["$number2"] = $number2;
         //$both = array( 1=> num1, 2 => num2);
        $correct_guess1 = false;
        $correct_guess2 = false;
//}

   
//while($correct_guess1 == false && $correct_guess2 == false){
if($number1 > $num1 && $number2 > $num2) {
    echo "The first number should be lower";
    echo"The second number should be lower";
}
elseif($number1 < $num1 && $number2 < $num2){
    echo"The first number should be higher";
    echo"The second number should be higher";
}
elseif($number1 > $num1 && $number2 < $num2){
    echo"The first number should be lower";
    echo"The second number should be higher";
}
elseif($number1 < $num1 && $number2 > $num2){
    echo"The first number should be higher";
    echo"The second number should be lower";
}
elseif($number1 == $num1 && $number2 > $num2){
    echo"You got first number!";
    echo"The second number should be lower";
     $correct_guess1 = true;



?>
<!DOCTYPE html>
<html>
    <head>
        <title> Guess Numbers </title>
    </head>
    <body>
        <h1>Guess Numbers</h1>
        <h2> Enter two number from 0 to 10 </h2>
        
        <form method="POST" action="numGuess.php">
            <div>
                <label>Number 1</label>
                <!--If there is no name attribute, the input does not go to the server-->
                <input type="int" name="number1" value="number1"/>
            </div>
            <div>
                <label>Number 2</label>
                <!--If there is no name attribute, the input does not go to the server-->
                <input type="int" name="number2" value="<?php echo $number2 ?>"/>
            </div>
            <div>
                <input type="submit" name="submit" value="Guess"/>
            </div>
        </form>
    </body>
</html>