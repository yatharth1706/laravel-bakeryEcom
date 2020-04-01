<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/authpage.css?v=<?php echo time()?>" media="all"/>
  
  </head>
  <body>
    <div class="wrapper">

      <div class="first"></div>
      <div class="second"></div>
      <div class="form-box">
        <!--signup-->
        <div class="signup">
         
          <button class="signup-heading">SIGN UP</button>
          <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div>
              <label for="">Username:</label>
              <span class="error"><br />
              <input
                type="text"
                name="username"
                placeholder="please enter your username"
              />
            </div>
            <div>
              <label for="email">Email:</label
              ><span class="error"></span><br />
              <input
                type="text"
                name="email"
                placeholder="please enter your email"
              />
            </div>
            <div>
              <label for="">Password:</label>
              <span class="error"></span><br />
              <input
                type="password"
                name="password"
                placeholder="please enter your password"
        
              />
            </div>
            <div>
              <label for="">Confirm Password:</label
              ><br />
              <input
                type="password"
                name="conpassword"
                placeholder="confirm your password"
                >"
              />
            </div>
            <div class="signup-button">
              <button class="btn btn-success btn-block" type="submit">
                submit
              </button>
            </div>
            <!-- <p class="error"><?= $signup_message ?></p> -->
          </form>
        </div>

        

        <div class="switcher">
          <div class="login-switcher">
            <p>If you have existing account</p>
            <button > <a href="loginpage.php">LOG IN</a>  </button>
          </div>
          
        </div>
      </div>
    </div>
    <!-- <script type="text/javascript" src="../js/authpage.js"></script> -->
  </body>
</html>
