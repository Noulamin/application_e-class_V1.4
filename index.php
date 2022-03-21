<?php 
    session_start();
    if(isset($_SESSION["user_name"]))
    {
      header("location: dashboard.php");
    }
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>e_class</title>
</head>
<body>
    <section class="body_">
        <div class="container_sign_in" id="container_sign_in">
          <p class="e-class-logo">
              E-classe
          </p>
          <p class="sign_text">
                SIGN IN
          </p>
          <p class="enter_text">
                Enter your credentials access your account
          </p>
          
          <p class="text_succes">
                  <?php
                    if(isset($_SESSION["message_succes"]))
                    {
                      if($_SESSION["message_succes"] != null)
                      {
                        echo $_SESSION["message_succes"];
                        $_SESSION["message_succes"] = null;
                      }
                    }
                  ?>
          </p>
          <div class="div_">
            <div class="inputs">
              <form action="connect.php" method="post">
                  <p class="label">
                    Email
                  </p>
                  <input id="email_login" type="email" name="email_" value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"]; } ?>"  placeholder="Enter your email">
                  <p class="label">
                    Password
                  </p>
                  <input id="password_login" type="password" name="password_" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; } ?>" placeholder="Enter your password">
                  <div class="form-check form-switch">
                    <input name="check" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">remember me</label>
                  </div>
                  <button class="bu01" name="sign_in">
                    SIGN IN
                  </button>
              </form>
                  <p class="text_error">
                    <?php
                      if(isset($_SESSION["message_error"]))
                      {
                        if($_SESSION["message_error"] != null)
                        {
                            echo $_SESSION["message_error"];
                            echo    '<script>
                                        document.getElementById("email_login").style.border = "2px solid red";
                                        document.getElementById("password_login").style.border = "2px solid red";
                                    </script>';
                          $_SESSION["message_error"] = null;
                        }
                      }
                    ?>
                  </p>
            </div>
          </div>
          <footer>
            <p class="forgot">
              Forget your password? <a href="">Reset Password</a>
            <br>
              have an account? <button onclick="open_sign_up()" class="bu2"> SIGN UP </button>
            </p>
          </footer>
        </div>
        <div class="container_sign_up" id="container_sign_up">
          <p class="e-class-logo_2">
              E-classe
          </p>
          <p class="sign_text_2">
                SIGN UP
          </p>
          <p class="enter_text_2">
                Enter your infos to create your account
          </p>
          <div class="div_">
            <div class="inputs">
              <form method="post" action="connect.php" onsubmit="return check_()">
                <p class="label_2">
                  Full name
                </p>
                <input name="name" type="text" id="name" placeholder="Enter your name">
                <p class="label_2">
                  Email
                </p>
                <input name="email" type="text" id="email" placeholder="Enter your email">
                <p class="label_2">
                  Password
                </p>
                <input name="c_password" type="password" id="password" placeholder="Enter your password">
                <p class="label_2">
                  Confirm password
                </p>
                <input name="password" type="password" id="c_password" placeholder="Enter your password">
                <p class="warning" id="warning">
                  
                </p>
                <button type="submit" class="bu" name="sign_up">
                      SIGN UP
                </button>
              </form>
            </div>
          </div>
          <footer>
            <p class="forgot">
              Forget your password? <a href="">Reset Password</a>
              <br>
              have an account? <button onclick="open_sign_in()" class="bu2"> SIGN IN </button>
            </p>
          </footer>
        </div>
    </section>
    <script src="javascript.js"></script>
</body>
</html>