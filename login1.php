
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="" style="background-color: #eee; ">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-xl-6">
        <div class="card rounded-3 text-black">
          <div class="row ">
            <div class="">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://img.freepik.com/free-vector/way-concept-illustration_114360-1191.jpg?w=2000"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Courier Admin panel</h4>
                </div>

                <form action="login1.php" method="POST">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example11"name="name"  class="form-control"
                       />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" name="pass" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit"  name="Loginbtn">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="submit" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$conn=mysqli_connect('localhost','root','','admin') or die ("Query Execute Failed");
session_start();
if(isset($_POST['Loginbtn']))
{
 $user=   $_POST['name'];
 $userpass=   $_POST['pass'];

 $query="select * from admin_login where username ='$user'  and password = '$userpass' ";
 $res=mysqli_query($conn,$query) or die ('Failed');

 $total=mysqli_num_rows($res);
 //echo $total;
 if($total == 1)
 {
   $_SESSION['username'] = $user;
   header('location:index.php');
 }
else
{
    echo"<script>alert('Incorrect Username and Password')
    window.location.href='login.php'
    </script>";
    
}

}




?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>