<?php
  include("header.php");
  include("db.php");
 ?>

 <?php
 // define variables and set to empty values
 $nameErr = $emailErr = "";
 $name = $email = "";
 $isErr = false;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
     $isErr = true;
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
     $isErr = true;
   }

   if (!$isErr) {
     $nama = $_POST["name"];
     $email = $_POST["email"];
     $guests->add($nama, $email);
     //header("Location: index.php", TRUE, 301);
     ?>
     <html><head>
       <title>Redirecting...</title>
       <script type="text/javascript">
        location = 'index.php';
       </script>
     </head><body>Redirecting...</body></html>
     <?php
     exit;
   }
 }
 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
Name: <input type="text" name="Email">
<span class="error">* <?php echo $nameErr;?></span><br><br>
E-mail: <input type="text" name="Password">
<span class="error">* <?php echo $emailErr;?></span><br><br>
<input type="Login">
</form>

<?php
  include("footer.php");
?>
