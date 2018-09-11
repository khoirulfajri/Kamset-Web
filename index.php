<!DOCTYPE html>
<html lang="id">
  <head>
    <title> Kamasetra UNY || Log In </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/theme.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="”icon”" type="”image/png”" href="”img/logo.png”">
    
  </head>
  <body style="background-image:url(img/bg-login.png);background-size: cover;">
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="align-self-center col-md-6 text-white">
            <h1 class="text-center text-md-left display-3">Kamasetra UNY</h1>
            <p class="lead">Keluarga Mahasiswa Seni Tradisi UNY</p>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body p-5">
                <h3 class="pb-3">Login</h3>
                <form action="login.php" method="post" onSubmit="return validasi()">
                  <div>
                    <label> Email </label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                  </div>
                  <div>
                    <label> Password </label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>      
                  <div>
                    <input type="submit"  name="login" value="Login" class="btn mt-2 btn-outline-dark btn-block">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/dist/sweetalert.min.js"></script>

  <script type="text/javascript">
  function validasi() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;   
    if (email != "" && password!="") {
      return true;
    }else{
      swal("WRONG!!","Masukan Email dan Password dengan benar!")
      return false;
    }
  }
 
</script>
</html>