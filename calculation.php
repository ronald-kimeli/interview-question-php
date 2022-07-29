<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz[2]->FUNCTION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  
    .alert{
        font-weight: 500;
    }
</style>
<body>
    <div class="container">
        <div class="mt-4 col-8">
            <h1>You Output is</h1>
            <div class="py-5">
   
           
 <?php

function array_rangesum(array $numArr): int {

    if(isset($_POST['submit']))
    {
    $firstInt = $_POST['firstInt'];
    $lastInt = $_POST['lastInt'];

    if($firstInt>0 && $lastInt>0){
        if($firstInt<$lastInt){
            $firtSearch = array_search($firstInt, $numArr);
            $lastSearch = array_search($lastInt, $numArr);
            if ($lastSearch = array_search($lastInt, $numArr)>0){
                $lastSearch = array_search($lastInt, $numArr);
                }
            else{
                $lastSearch = array_search($numArr[count($numArr)-1], $numArr);
                }     
            $length = $lastSearch - $firtSearch + 1;
            $result = array_sum(array_slice($numArr, $firtSearch, $length));
            return $result;
        }
        else{
            return 0;
        }
    }
    else{
        return -1;
    }
 }
}

?>
<?php
$numArr = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];

echo "<div class='alert alert-success'>Compilation Successful!</div>";
echo "The output is"." ". "="." ". array_rangesum($numArr);

?>

            </div>
            <a href="index.php" class="btn btn-outline-danger ">Ok</a>
        </div>
    </div>


<!-- References -->
<!-- Last Array == $numArr[count($numArr)-1] given array to be $numArr or end($numArr) assists to output the values both in associative or indexed--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

