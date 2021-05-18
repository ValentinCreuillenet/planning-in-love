<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning in Love</title>
</head>
<body>
    
</body>
</html>


<?php
    include("./template/header.php");

    include("./template/navigation.php");

    include("./pages/{$_GET["folder"]}/{$_GET["file"]}.php");

    include("./template/footer.php");

    include("./template/footer.php");

?>