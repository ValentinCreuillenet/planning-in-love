<?php
    include("./sources/core/authentication/guard.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <title>Planning in Love</title>
</head>

<?php if(isLogged())include("./template/header.php");?>

<?php
 if(isLogged())include("./template/main.php");
 else include("./pages/login.php");
?>

<?php if(isLogged())include("./template/footer.php"); ?>

<script src="/sources/core/DOM-manipulator.js"></script>
</html>


