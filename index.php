<?php
    session_start();
    if(!isset($_SESSION['id']))include("./sources/core/authentication/verification.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Planning in Love</title>
</head>

<?php if(isset($_SESSION["id"]))include("./template/header.php");?>

<?php
 if(isset($_SESSION["id"]))include("./template/main.php");
 else include("./pages/login.php");
?>

<?php if(isset($_SESSION["id"]))include("./template/footer.php"); ?>

</html>


