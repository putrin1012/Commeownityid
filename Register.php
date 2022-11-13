<?php
    session_start();
    include('db.php');
    if (isset($_POST['register'])) {
        $userName = $_POST['userName'];
        $Email = $_POST['Email'];
        $Location = $_POST['Location'];
        $Password = $_POST['Password'];
        $password_hash = password_hash($Password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE Email =: Email");
        $query->bindParam("email",$Email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0){
            echo '<p class="error">Alamat email sudah terdaftar!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(userName, Email, Location, Password) VALUES (:userName, :Email, :Location, :password_hash, :email)");
            $query->bindParam("userName", $userName, PDO::PARAM_STR);
            $query->bindParam("Email", $Email, PDO::PARAM_STR);
            $query->bindParam("Location", $Location, PDO::PARAM_STR);
            $query->bindParam("Password", $Password, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Anda berhasil mendaftar!</p>';
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
</head>
<body>
    <form class="form-inline" name="Registration Form" action="" method="get">
        <h3>Username</h3>
        <input type="text" id="username" />
        <h3>Email</h3>
        <input type="email" id="userEmail" />
        <br />
        <br />
        <!-- <label class="my-1 mr-2" for="inlineFormCustomSelectLocation">Location</label> -->
        <h3>Location</h3>
        <select class="custom-select my-1 mr-sm-2" id="CustomSelectLocation">
            <option selected>Lokasi anda...</option>
            <option value="1">Aceh</option>
            <option value="2">Bali</option>
            <option value="3">Bangka Belitung</option>
            <option value="4">Banten</option>
            <option value="5">Bengkulu</option>
            <option value="6">Daerah Istimewa Yogyakarta</option>
            <option value="7">Gorontalo</option>
            <option value="8">Jakarta</option>
            <option value="9">Jambi</option>
            <option value="10">Jawa Barat</option>
            <option value="11">Jawa Tengah</option>
            <option value="12">Jawa Timur</option>
            <option value="13">Kalimantan Barat</option>
            <option value="14">Kalimantan Selatan</option>
            <option value="15">Kalimantan Tengah</option>
            <option value="16">Kalimantan Timur</option>
            <option value="17">Kalimantan Utara</option>
            <option value="18">Kepulauan Riau</option>
            <option value="19">Lampung</option>
            <option value="20">Maluku Utara</option>
            <option value="21">Maluku</option>
            <option value="23">Nusa Tenggara Barat</option>
            <option value="24">Nusa Tenggara Timur</option>
            <option value="25">Papua Barat</option>
            <option value="26">Papua</option>
            <option value="27">Riau</option>
            <option value="28">Sulawesi Selatan</option>
            <option value="29">Sulawesi Tengah</option>
            <option value="30">Sulawesi Tenggara</option>
            <option value="31">Sulawesi Utara</option>
            <option value="32">Sumatra Barat</option>
            <option value="33">Sumatra Selatan</option>
            <option value="34">Sumatra Utara</option>
        </select>
        <h3>Password</h3>
        <input type="text" id="userPassword" />
        <br />
        <br />
        <button type="submit">Register Now</button>
    </form>
</body>
</html>