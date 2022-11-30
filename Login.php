<?php
    session_start();
    require_once('config.php');
?>

<?php
    $message = "";
    try{
        if(isset($_POST["login"])){
            if(empty($_POST["email"]) || empty($_POST["password"])){
                $message = '<label>Email dan Password tidak boleh kosong!</label>';
            }else{
                $id = "SELECT UserID FROM users WHERE Email = :email AND Password = :password";
                $query = "SELECT * FROM users WHERE Email = :email AND Password = :password";
                $statement = $conn->prepare($query);
                $statement->execute(array('email'=>$_POST["email"], 'password'=>$_POST["password"]));

                $count = $statement->rowCount();
                if($count > 0){
                    $_SESSION["login"] = $id
                    // $_SESSION["login"] = $_POST["email"];
                    echo "<script type='text/javascript'>alert('Selamat datang! :3');location='_index.php';</script>";
                }else{
                    $message = '<label>Email atau Password salah.</label>';
                }
            }
        }
    }catch(PDOException $error){
        $message = $error->getMessage();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to CommeownityID!</title>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css"
          href="main.css" title="Default Styles" media="screen">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <div class="login100-pic js-tilt" data-tilt>
                                <img src="img/logo_dark.png" alt="IMG">
                    </div>
                    
                    <form class="login100-form validate-form" action="" method="post">
                        <span class="login100-form-title"> Selamat Datang! &#128049; </span>
                        <?php
                            if(isset($message)){
                                echo '<label class="text-danger">'.$message.'</label>';
                            }
                        ?>
                        <div class="wrap-input100 validate-input" data-validate="valid email is required: meow@paw.com">
                            <input class="input100" type="email" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true">
                                </i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true">
                                </i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn" name="login" value="login">Masuk</button>
                        </div>
                        <div class="text-center p-t-12">
                            <span class="txt1">Belum memiliki akun?</span>
                            <a class="txt2" href="Register.php"> Daftar di sini meow~ </a>
                        </div>
                        <!-- <div class="text-center p-t-136">
                            <a class="txt2" href="#">
                                "Register"
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true">
                                </i>
                            </a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
        <script src="login.js"></script>
    </body>
</html>
