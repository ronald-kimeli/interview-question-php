<?php

?>


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
            <h1>PHP Function</h1>
            <div class="py-5">
   
            <div class="card">
                    <div class="card-header">
                        <h4>Enter Your First Integer and Last Integer</h4>
                    </div>
                    <div class="card-body">

                        <form action="calculation.php" method="post">
                            <div class="form-group mb-3">
                                <label>First Integer</label>
                                <input required type="number" name="firstInt" placeholder="First Int" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label>Second Integer</label>
                                <input  type="number" name="lastInt" placeholder="Last Int" class="form-control" required>
                            </div>
                           
                            <div class="form-group mb-3">
                                <button type="submit" name="submit" class="btn btn-outline-danger">Calculate</button>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
       
        </div>
    </div>

<!-- References -->
<!-- Last Array == $numArr[count($numArr)-1] given array to be $numArr or end($numArr) assists to output the values both in associative or indexed--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

