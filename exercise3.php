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
    <h2 class="text-white text-center pt-5">EXERCISE 3</h2>
</nav>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card my-3">
<div class="card-header bg-success">
<p class="text-white">3.)Create a function that reads a file, and displays a line based on the number of vowel letters found in the filename. 
</p>
</div>
<div class="card-body">
<?php

function randomLiner($filename){
    $fileContents = "newTxt.txt" ;
    $document = fopen($fileContents,'r');
    $text =  fread($document,filesize("newTxt.txt"));
    fclose($document);  
    echo "<br><br>";
    $vowels = array("a", "e", "i", "o", "u"); 

    $length = strlen($text);
    $counter = 0; 
    for ($i =0; $i < $length; $i++){
        if (array_search($text[$i], $vowels)){
            $counter++; 
        }
    }
    
    $text_lines = file($fileContents); 
    if($counter%2!=0){
        echo "The number of vowels inside the file text is: $counter<br>";
        echo "Then the $counter is a odd numbers; <br> therefore ";
        echo "The 3rd Line of the file is <br>";
        echo ("<h3>$text_lines[2]</h3>");
    }else{
        echo "The number of vowels are $counter<br>";
        echo ($text_lines[3]);
    }

    }
    function readFiles($filename){
        if(file_exists($filename)){
            $fileContents = fopen($filename,'r');
            $contents = fread($fileContents, filesize($filename));  
            echo "<pre>$contents</pre>";  
            fclose($fileContents);

       }
    }
    readFiles('newTxt.txt');
    randomLiner('newTxt.txt');
?>
</div>
</div>
</div>
</div>
</div>
   
</body>
</html>
