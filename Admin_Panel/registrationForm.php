<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="validation.js"></script>
  <style>
    input[type='radio'] {
      height: 20px;
      width: 20px;
     vertical-align: left;
     }
     .r1 {
     font-size: 20px;
     text-align:left;
     }
     table,
        th,
        td {
            border: 2px solid black;
            border-collapse: collapse;
        }
  </style>
</head>

<body>
  <form action="storeintoDatabase.php" method="post" enctype="multipart/form-data" onsubmit="return validateUser()">
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Registration Form</h2>
                  <p class="text-white-50 mb-5">Please enter details in the form</p>
                  
                  <div class="form-outline form-white mb-4">
                    <input type="text" id="firstname" name="firstname" class="form-control form-control-lg"
                      placeholder="Enter your First Name" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="lastname" name="lastname" class="form-control form-control-lg"
                      placeholder="Enter your Last Name" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="email" name="email" class="form-control form-control-lg"
                      placeholder="Enter your Email Id" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="date" id="dob" name="dob" class="form-control form-control-lg"
                      placeholder="Enter your Date of birth" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="phoneNo" name="phoneNo" class="form-control form-control-lg"
                      placeholder="Enter your Phone Number" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4 r1">
                    <label class="form-label" required><input type="radio" value="male" id="male" name="gender" required="true"/> Male</label>
                  </div>
                  <div class="form-outline form-white mb-4 r1">
                    <label class="form-label" ><input type="radio" value="female" id="female" name="gender" required="true"/> Female</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="file" id="profile_photo" name="profile_photo" accept="image/png, image/jpeg " class="form-control form-control-lg"
                     placeholder="Enter your Profile Photo" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg"
                      placeholder="Enter your Password" required="true" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg"
                      placeholder="Enter your Confirm Password" required="true" />
                  </div>

                  <input type="submit" class="btn btn-outline-light btn-lg px-6" value="Register" id="submit" name="submit" >
                  
            </div>
          </div>
        </div>
      </div>
      </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous">
    </script>
</body>
</html>