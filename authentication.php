<!DOCTYPE html >

<html lang="en">
  <head>
    <title> Google Signin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="google-signin-client_id" content="462565318932-v3pa0eat9hsjkj1cjf8811rrdlqpgckb.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>Welcome to UploadClick</h1>
    <p>An online service where you can upload your documents</p>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <div class="page2">

        <!--==<form action="login.html">
        <input type="submit" value="Login">
      </form>==-->

    </div>
    <div class="details">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit"> UPLOAD </button>
      </form>
    <p>Profile Details </p>
    <img id="pic" class="img-circle" width="100" height="100"/>
    <p> Email Address</p>
    <p id="email" class="alert alert-danger"></p>
    <button onclick="SignOut()" class="btn btn-danger">SignOut</button>
    </div>

  </body>
</html>
