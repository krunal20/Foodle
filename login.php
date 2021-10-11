<?php
require_once 'connection.php';
require_once 'session.php';
$error = '';
$error1 = '';
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    switch($_POST['submit']){
        case 'signup':
            $error1 =  '';
            $name = trim($_POST['namefield']);
            $email = trim($_POST['mailfield']);
            $password = trim($_POST['passfield']);
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            if($query = $con->prepare('SELECT * FROM users WHERE email = ?;')){
                $error = '';
                $query->bind_param('s', $email);
                $query->execute();
                $query->store_result();
                if($query->num_rows > 0){
                    $error .= '<p class="error">The email address is already registered!</p>';
                }
                else{
                    $query = $con->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?);');
                    $query->bind_param('sss', $name, $email, $password_hash);
                    $result = $query->execute();
                    if($result){
                        $error .= '<p class="success">Your registration was successful!';
                    }
                    else{
                        $error .= '<p class="error">Something went wrong!';
                    }
                }
            }
            $query->close();
            mysqli_close($con);
            break;
        case 'login':
            $email = trim($_POST['mailfield']);
            $password = trim($_POST['passfield']);
            $error = '';
            if($query = $con->prepare('SELECT * FROM users WHERE email = ?')){
                $query->bind_param('s', $email);
                $query->execute();
                $query->bind_result($id1,$name1,$pass1,$mail1);
                $query->fetch();
                $row = ['id'=>$id1,'name'=>$name1,'password'=>$pass1,'email'=>$mail1];
                if($mail1 == $email && $email!=''){
                    if(password_verify($password, $row['password'])){
                        $_SESSION['userid'] = $row['id'];
                        $_SESSION['user'] = $row;
                        header('location: menu.php');
                        exit;
                    }
                    else{
                        $error1 .= '<p class="error">Invalid password!';
                    }
                }
                else{
                    if($email=''){
                        $error1 .= '<p class="error">Email address not provided!';    
                    }
                    else{
                    $error1 .= '<p class="error">Email address not registered!';
                    }
                }
            }
            $query->close();
            mysqli_close($con);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="validation.js"></script>
    <link rel="stylesheet" href="styleK.css" />
    <title>Sign in & Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" onsubmit="return logincheck();" name="loginForm" method="post">
            <h2 class="title">Sign in</h2>
            <?php 
              echo $error1;
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email" name="mailfield" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passfield" />
            </div>
            <input type="submit" name="submit" value="login" class="btn solid" />
          </form>
          <form class="sign-up-form" name="signupForm" onsubmit="return signupcheck()" method="post">
            <h2 class="title">Sign up</h2>
            <?php 
                  echo $error;
            ?>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="namefield" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="mailfield" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passfield" onkeyup="pstrength(this.value)"/>
              <span id="password_strength"></span>
            </div>
            <input type="submit" name="submit" class="btn" value="signup" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New at</h3>
            <h2>Foodle?</h2>
            <br>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Come on in!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
   <script src="app.js"></script>
  </body>
</html>
