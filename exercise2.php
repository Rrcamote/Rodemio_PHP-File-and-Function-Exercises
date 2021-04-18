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
    background-image: url('https://image.freepik.com/free-vector/wood-background-realistic_107791-102.jpg?1');
    background-repeat: no-repeat;
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
<?php
    function existFile($filename,$fileData,$lineNumber){
        if(file_exists($filename)){
            $file = fopen($filename,'a');
            $lines = file($filename,FILE_IGNORE_NEW_LINES);
            array_splice( $lines, $lineNumber-1, 0, $fileData );
            file_put_contents($filename,join("\n",($lines)));
            fclose($file);

        }else{
            echo "File does not exist!";
        }
    }
    function readFiles($filename){
        if(file_exists($filename)){
            $file = fopen($filename,'r');
            $contents = fread($file, filesize($filename));   
            echo "<pre>$contents</pre>";  
            fclose($file);

       }
    }
    readFiles('newTxt.txt');
    existFile('newTxt.txt',"This text will be added to the file",4);

?>
</div>
</div>
</div>
</div>
</div>
   
</body>
</html>
