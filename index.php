<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quiz[2]->FUNCTION</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .alert {
    font-weight: 500;
  }
</style>

<body>
  <div class="container py-5" id="container">
    <div class="row">
      <h1 class="group">Main Function
      </h1>
      <div id="mainf">
        <span id="message" ></span>
        <div class="py-3">
          <div class="card shadow rounded">
            <div class="card-header">
              <h4>Enter Your First Integer and Last Integer</h4>
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group mb-3">
                  <label>First Integer</label>
                  <input type="number" name="firstInt" id="firstInt" placeholder="Enter First Int" class="form-control" required />
                </div>
                <div class="form-group mb-3">
                  <label>Second Integer</label>
                  <input type="number" name="lastInt" id="lastInt" placeholder="Enter Last Int" class="form-control" required />
                </div>
  
                <div class="form-group  mb-3  role=" group">
                  <button type="submit" name="submit" id="submitButton" class="btn btn-outline-danger group">
                    Calculate
                  </button>
                  <span class="group offset-2"><strong>The Output is = </strong> <span id="output"></span></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr/>
    <div class="row mt-4">
      <h1 class="group">Question
      </h1>
      <div id="mainf">
      <div >
        <p>Write a PHP function that receives two integers as parameters, the function returns the sum of the elements in the array found between the two integers. Use the array [10, 20, 30, 40, 50, 60, 70, 80, 90, 100]<br/><br/>
          Example to guide you, we use 20 and 40 as the parameters, the return value should be the sum of 20,30,40 which is 90.
          Additional requirements:<br/><br/>
          1. The two integers passed to the function should be positive; if not, the function should return -1<br/>
          2. Validate that the first integer is lower than the second integer. If not, the function should return 0<br/>
          3. If the first integer is in the array, and the second is above 100, for example 90 and 120, then the function should return the sum of those integers that are within the array and in between the range given. In this case it should be 190
        </p>
      </div>
      </div>
    </div>
  </div>

  <!-- References -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="src/main.js"></script>
  <script src="src/buttons.js"></script>
</body>

</html>