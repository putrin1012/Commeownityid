<?php
    require_once('config.php');
?>
<?php
    if (isset($_POST['register'])) {
        $userName = $_POST['username'];
        $Email = $_POST['Email'];
        $Location = $_POST['Location'];
        $Password = $_POST['Password'];
        $Password2 = $_POST['Password2'];

        if($Password != $Password2){
            echo "<script type='text/javascript'>alert('Konfirmasi password tidak sesuai!');location='Register.php';</script>";
        }
        $password_hash = password_hash($Password, PASSWORD_DEFAULT);
        $sql = $conn->prepare("SELECT COUNT(*) AS 'total' FROM users WHERE Email = :Email");
        $sql->execute(array(':Email' => $Email));
        $result = $sql->fetchObject();

        if ($result->total > 0){
            echo '<p class="error">Alamat email sudah terdaftar!</p>';
        }else {
            $sql = "INSERT INTO users(userName, Email, Location, Password) VALUES(?,?,?,?)";
            $stmtinsert = $conn->prepare($sql);
            $result = $stmtinsert->execute([$userName, $Email, $Location, $Password]);
            if ($result) {
                echo "<script type='text/javascript'>alert('Anda berhasil terdaftar!')</script>";
            } else {
                echo '<p class="error">Oh no! ada sesuatu yang salah.. :(</p>';
            }
        }
    }
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset'"UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    <link rel="stylesheet" href="RegisterStyling.css" />
</head>
<body>
    <!-- <div>
        ?php
            if (isset($_POST['register'])){
                echo "Data Submitted.";
                $userName = $_POST['username'];
                $Email = $_POST['Email'];
                $Location = $_POST['Location'];
                $Password = $_POST['Password'];

                $sql = "INSERT INTO users(userName, Email, Location, Password) VALUES(?,?,?,?)";
                $stmtinsert = $conn->prepare($sql);
                $result = $stmtinsert->execute([$userName, $Email, $Location, $Password]);
                if ($result){
                    echo "Anda telah terdaftar.";
                } else {
                    "Terjadi kesalahan ketika mendaftar.";
                }
            }
        ?> -->
        <div class="limiter">
            <div class="container-register">
                <div class="wrap-register">
                <span class="register-form-title"> Registrasi &#128049; </span>
                    <!-- <h2>Registrasi</h2> -->
                    <form class="form-inline" name="Registration Form" action="Register.php" method="post">
                        <!-- <h3>Username</h3>
                        <input type="text" name="username" /> -->
                        <div>
                            <h3>Username</h3>
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div>
                            <h3>Email</h3>
                            <input class="input100" type="email" name="Email" placeholder="Email">
                            <span class="focus-input100"></span>
                        <!-- </div>
                        <h3>Email</h3> -->
                        <!-- <input type="email" name="Email" /> -->
                        </div>
                        <br />
                        <!-- <label class="my-1 mr-2" for="inlineFormCustomSelectLocation">Location</label> -->
                        <div class="dropdown">
                            <select class="btn btn-secondary dropdown-toggle" type="button" name="Location" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" placeholder="Location">
                                <option selected>Lokasi anda...</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Bali">Bali</option>
                                <option value="Bangka Belitung">Bangka Belitung</option>
                                <option value="Banten">Banten</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Jakarta">Jakarta</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Papua Barat">Papua Barat</option>
                                <option value="Papua">Papua</option>
                                <option value="Riau">Riau</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Sumatra Barat">Sumatra Barat</option>
                                <option value="Sumatra Selatan">Sumatra Selatan</option>
                                <option value="Sumatra Utara">Sumatra Utara</option>
                            </select>
                        </div>

                        <!-- <h3>Location</h3>
                        <select class="custom-select my-1 mr-sm-2" name="Location">
                            <option selected>Lokasi anda...</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Bali">Bali</option>
                            <option value="Bangka Belitung">Bangka Belitung</option>
                            <option value="Banten">Banten</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                            <option value="Riau">Riau</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                        </select> -->
                        <!-- <h3>Password</h3>
                        <input type="password" name="Password" /> -->
                        <div>
                            <h3>Passsword</h3>
                            <input class="input100" type="password" name="Password" placeholder="Password">
                            <span class="focus-input100"></span>

                            <h3>Confirm Passsword</h3>
                            <input class="input100" type="password" name="Password2" placeholder="Password2">
                            <span class="focus-input100"></span>
                        </div>
                        <!-- <h3>Confirm Password</h3>
                        <input type="password" name="Password2" /> -->
                        <br />
                        <br />
                        <!-- <button type="submit" name="register" value="register">Daftar</button> -->
                        <div class="container-register-form-btn">
                            <button type="submit" class="register-form-btn" name="register" value="register">Daftar</button>
                        </div>

                        <div class="text-center p-t-12">
                            <a class="txt2" href="Login.php"> Masuk ke CommeownityID </a>
                        </div>
                    </form>
                    <!-- <div class="text-center p-t-12">
                        <a class="txt2" href="Login.php"> Masuk ke CommeownityID </a>
                    </div> -->
                </div>
            </div>
        </div>
</body>
</html>
