<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
body {
    background-color: #ff7700;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cpolygon fill='%23cc0000' points='957 450 539 900 1396 900'/%3E%3Cpolygon fill='%23aa0000' points='957 450 872.9 900 1396 900'/%3E%3Cpolygon fill='%23d6002b' points='-60 900 398 662 816 900'/%3E%3Cpolygon fill='%23b10022' points='337 900 398 662 816 900'/%3E%3Cpolygon fill='%23d9004b' points='1203 546 1552 900 876 900'/%3E%3Cpolygon fill='%23b2003d' points='1203 546 1552 900 1162 900'/%3E%3Cpolygon fill='%23d3006c' points='641 695 886 900 367 900'/%3E%3Cpolygon fill='%23ac0057' points='587 900 641 695 886 900'/%3E%3Cpolygon fill='%23c4008c' points='1710 900 1401 632 1096 900'/%3E%3Cpolygon fill='%239e0071' points='1710 900 1401 632 1365 900'/%3E%3Cpolygon fill='%23aa00aa' points='1210 900 971 687 725 900'/%3E%3Cpolygon fill='%23880088' points='943 900 1210 900 971 687'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
}

</style>
</head>
<body>
<nav class="bg-dark pb-5">
    <h2 class="text-white text-center pt-5">EXERCISE 4</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-4">
    <div class="card my-3 bg-info">
    <div class="card-header bg-success">
            <p class="text-white">4.) Create a function to test the loyalty of a name based on the number of letters in the name and the occurences of the letters E, A, or N in the string.If you have 3 or more occurrences for E, A, or N together, and the product of the occurrences and the length of the string is divisible by 6</p>
    </div>
    <div class="card-body bg-white pb-5"> 
    <form action="" method="post">
    <label for="" class="form-label text-dark">Enter Name:</label>
    <input type="text" class="form-control form-control-large" name="name">
    <input style="margin-left:150px;margin-top:10px" type="submit" value="Submit" name="button">
    </form>          
<?php
        if(isset($_POST['button'])){
            $name = $_POST['name'];
        
        function testLoyalty($name){
            $vowelE = substr_count($name,'E');
            $vowelA = substr_count($name,'A');
            $vowelN = substr_count($name,'N');

            $totalVowelIn = $vowelA + $vowelE + $vowelN;

            $givenName = strlen($name);

            $totalProduct = $totalVowelIn * $givenName;
            echo '<span style="color:black;font-weight:bold;">The product of occurences & length of name is :'.$totalProduct.'</span> <br>';
            if($totalVowelIn >= 3){
                if($totalProduct % 6==0){
                    echo '<span style="color:blue">And '.$totalProduct.' is divisible by 6:</span>';
                    echo "<br>";
                    echo "<span style='color:black;font-weight:bold;'>The given name $name is:<h3 style='color:#063970;'>'Loyal'</h3></span>";
                    
                }else{
                    
                    echo '<span style="color:blue">And '.$totalProduct.' is not divisible by 6 so:</span>';
                    echo "<br>";    
                    echo "<span style='color:black;font-weight:bold;'>The given name $name is:<h3 style='color:#063970;'>'Di sure'</h3></span>";
                }
            }else{
                echo '<span style="color:blue">And '.$totalProduct.' is not divisible by 6 then,</span>';
                echo "<br>";    
                echo "<span style='color:black;font-weight:bold;'>The given name $name is:<h3 style='color:#063970;'>'Di sure'</h3></span>";
            }

        }
            
        
testLoyalty($name);
    }
?>
                </div> 
            </div>  
        </div>
    </div>
</div>
</body>
</html>
