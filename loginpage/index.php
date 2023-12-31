<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Form</title>
  </head>
  <body>
      <style>
          input [type="email"]{
              border-bottom-left-radius: 0px;;
              border-bottom-right-radius: 0px;;
          }
          input [type="password"]{
              border-top-left-radius: 0px;;
              border-top-right-radius: 0px;;
      </style>
 <div class= "text-center mt-5">
    <form style= "max-width:488px;margin:auto;">
      <img class= "mt-4 mb-4" src="selpdoodlelogo.png"  alt="logo" style="width:100px;height:100px;"> 
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
       <label class="sr-only">Email Address</label>
        <input type="email" id= "emailAddress" class="form-control" placeholder= "Email Address" required autofocus> 
         <label for="password"
         class="sr-only">Password</label>
        <input type="password" id= "password" class="form-control" placeholder= "Password" class= "form-control"> 
        <div class="chechbox">
            <label>
                <input type= "checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mt-3"><button class="btn btn-lg btn-primary 
        btn-block">Sign In</button>
        </div>
        
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>