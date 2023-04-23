



<?php
include 'connection.php';
if(isset($_POST['save']))
{
    $FirstName=$_POST['FirstName'];
    $LastName=$_POST['LastName'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contactnumber=$_POST['contactnumber'];
    $DOB=$_POST['date'];
  // $qualificationn=implode(',',$_POST['qualification']);
   
   
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $username=$_POST['username'];
    mysqli_query($con,"INSERT INTO `assignment1`( `FirstName`, `LastName`, `age`, `gender`, `contactnumber`, `DOB`, `qualification`, `email`, `password`, `address`, `state`,`username`) VALUES ('$FirstName','$LastName','$age','$gender','$contactnumber','$DOB','$qualificationn','$email','$password','$address','$state','$username')");
    mysqli_query($con,"INSERT INTO `login`( `username`, `Password`) VALUES ('$username','$password')");
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM  USING BOOTSTRAP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

    <section class="h-100 h-custom" style="background-color: Orange;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3>Registration Form</h3>
            <form method="POST">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="FirstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName"  name="LastName"class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">LastName</label>
                  </div>

                </div>
                <div class="form-outline">
                    <input type="number" id="age" name="FirstName" class="form-control form-control-lg" />
                    <label class="form-label" for="age">age</label>
                  </div>

              </div>
              <div class="col-md-6 mb-4">

<h6 class="mb-2 pb-1">Gender: </h6>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="femaleGender"
    value="option1" checked />
  <label class="form-check-label" for="femaleGender">Female</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="maleGender"
    value="option2" />
  <label class="form-check-label" for="maleGender">Male</label>
</div>


</div>
<div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">contactNumber</label>
                  </div>

                </div>
                <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox"  name=" qualification" id="inlineCheckbox1" value="SSLC" />
  <label class="form-check-label" for="inlineCheckbox1">SSLC</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="qualification" id="inlineCheckbox2" value="Graduation" />
  <label class="form-check-label" for="inlineCheckbox2">GRADUATION</label>
</div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date"  name="DOB"class="form-control form-control-lg" id="birthdayDate" />
                    <label for="birthdayDate" class="form-label">DOB</label>
                  </div>

                </div>
               
                

              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="password" name="passworc" class="form-control form-control-lg" />
                    <label class="form-label" for="password">password</label>
                  </div>

                </div>

                
              </div>

              <div class="row">
                <div class="col-12">

                  <select class="select form-control-lg">
                    <option value="1" disabled>select your state</option>
                    <option value="2">Kerala</option>
                    <option value="3">Tamilnadu</option>
                    <option value="4">Karnadaka</option>
                    <option value="4">Andra</option>
                  </select>
                  <label class="form-label select-label">choose your state</label>

                </div>
                                
              </div>
              <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="username" name="username" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">username</label>
                  </div>

               </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name="Save" />
              </div>
             </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

   </form>
       
  




  </body>
</html>