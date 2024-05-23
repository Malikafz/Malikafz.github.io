<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MalReb Store</title>
    <!-- Icons-->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  </head>
  <body class="app flex-row align-items-center">
  <body style="background-color: #A1C9F2;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
                
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-muted">Sign In to your account</p>
              <form action="system/cek_login.php" method="POST">
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                    <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required="">
                </div>


                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>


                <div class="row">
                  <div class="col-6">
                      <button type="submit" name="submit" class="btn btn-success px-4">Login</button>
                  </div>
                </div>
              </form>
              
              </div>
            </div>


            
          </div>
        </div>
      </div>
    </div>
</body>
</html>