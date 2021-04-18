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
    <h2 class="text-white text-center pt-5">EXERCISE 2</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card my-3">
<div class="card-header bg-success">
<p class="text-white">2.)Create a function that allows you to append a line into a file given the line number</p>
</div>
<div class="card-body">
<input type="submit" name="clear" value="Delete">
<?php
if(isset($_POST['clear'])){
     
}
    function existFiles($files_Name){
        if(file_exists($files_Name)){
             $file = fopen($files_Name,'a');
             fwrite($file,"\n This text  will added to the the myText file");
             fclose($file);

        }
    }


    function showFiles($files_Name){
        if(file_exists($files_Name)){
            $file = fopen($files_Name,'r');
            $filesContents = fread($file, filesize($files_Name));    
            echo "<pre>$filesContents</pre>"; 
            fclose($file);

       }
    }
    showFiles('newTxt.txt');
    existFiles('newTxt.txt')
?>
</div>
</div>
</div>
</div>
</div>
   
</body>
</html>