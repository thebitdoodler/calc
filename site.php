<form action ="" method="post">
        <input type="text" name="number1" value="" placeholder="Enter first number"> <br>
        <input type="text" name="number2" value="" placeholder="Enter second number"> <br>
        <input type="submit" name="add" value=" ADD + ">
        <input type="submit" name="subs" value=" SUB - ">
        <input type="submit" name="mul" value=" MUL * ">
        <input type="submit" name="div" value=" DIV / ">
</form>

<?php
if(isset($_POST['add']))
{
        $numeber1 = $_POST['number1'];
        $numeber2 = $_POST['number2'];
        $add = $numeber1+$numeber2;
        echo "Addition is :".$add;
}
if(isset($_POST['subs']))
{
        $numeber1 = $_POST['number1'];
        $numeber2 = $_POST['number2'];
        $subs = $numeber1-$numeber2;
        echo "Subtraction is :".$subs;
}
if(isset($_POST['mul']))
{
        $numeber1 = $_POST['number1'];
        $numeber2 = $_POST['number2'];
        $mul = $numeber1*$numeber2;
        echo "Multiplication is :".$mul;
}
if(isset($_POST['div']))
{
        $numeber1 = $_POST['number1'];
        $numeber2 = $_POST['number2'];
        $div = $numeber1/$numeber2;
        echo "Division is ".$div;
}
?>