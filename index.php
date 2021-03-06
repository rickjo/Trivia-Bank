<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trivia Bank</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container" style="margin-top: 200px">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login untuk masuk "Trivia Bank"</div>
        <div class="card-body">
          <form action="auth.php" method="post" id="Login">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" class="form-control" placeholder="username" id=inputUsername name="username" required="required" autofocus="autofocus">
                <label for="inputUsername">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" class="form-control" placeholder="Password" id="inputPassword" name="password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="login" value="login">Login</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
