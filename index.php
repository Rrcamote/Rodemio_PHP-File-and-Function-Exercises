<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<div class="col-md-4">
<div class="card my-3">
<div class="card-header bg-success">
<p class="text-center">5.)Write a function to calculate the factorial of a number. The function accepts the number as an argument. If the argument given is a negative number, get its absolute value.
</p>
</div>
<div class="card-body bg-dark">
<form method="POST">
    <label class="form-label text-white">Enter a number:</label>
    <input type="text" placeholder="Enter a number" class="form-control" name="number"/><br>
    <input type="submit" name="submit" value="Submit" />
    </form>
</div>
</div>
</div>
<body>
<?php
if(isset($_POST['number'])){
    $input = $_POST['number'];
        if($input < 1){
            echo  '<br>'. 'The absolute value of the number '.$input.' is ' .abs($input);
        }else{
            echo  '<br>'. 'The factorial of the number '.$input.' is ' . Factorial_Function($input);
    }
}
    function Factorial_Function($input){
        if($input <=1){
            return abs($input);
        }
            return $input * Factorial_Function($input-1); 
        }
   
   
//       function exercise2($fileName){
//         if(file_exists($fileName)){
//            $file = fopen($fileName,'w');
//            fwrite($file,"Romeo Rodemio");
//         }
//     }
// exercise2("exercise1.php");
//     function existThenOpen($fileName){
//         if(file_exists($fileName)){
//            fopen($fileName,'a');
//         }
//         fopen($fileName,'a');
//     }
// existThenOpen("Testing.php");

    ?>
</body>
</html>