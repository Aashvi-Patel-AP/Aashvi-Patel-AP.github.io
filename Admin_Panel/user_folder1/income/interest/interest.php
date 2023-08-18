<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<form action="interestStoreintoDatabase.php" method="post">
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <p class="text-white-50 mb-5">Please select option and enter income!</p>

              <div class="form-outline form-white mb-4">
                <!-- <label>Country</label> -->
                    <select name="interest" id="interest" class="form-control form-control-lg">
                        <option value="fixed_deposit">Fixed Deposit</option>
                        <option value="ppf">Public Providant Fund(PPF)</option>
                        <option value="saving">Saving</option>
                    </select>
               </div>

              <div class="form-outline form-white mb-4">
                <input type="number" id="interest_inc" name ="interest_inc" class="form-control form-control-lg" placeholder="Enter Income" required="true"/>
                <!-- <label class="form-label" for="typeEmailX">Email</label> -->
              </div>

              <input type="submit" class="btn btn-outline-light btn-lg px-6" value="Submit" id="submit" name="submit" >

          </div>
          <?php session_start();
          if(isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])){ ?>
          <div><?php echo $_SESSION['success_message'];?></div>
          <?php unset($_SESSION['success_message']);
          } ?>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>
