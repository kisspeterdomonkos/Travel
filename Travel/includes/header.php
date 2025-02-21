<?php  
    $result = Distinct();
    
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Travel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- Font Awesome Solid + Brands -->
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">    
          <i class="fa-solid fa-umbrella-beach me-2"></i><a class="navbar-brand" href="./">Happy Travel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">

                <?php  while($row = mysqli_fetch_array($result)){ ?>
              <li class="nav-item">
                <a class="nav-link" href="./?p=adatlap.php"><?php echo $row["uticel"]; ?></a>
                <?php } ?>

            </ul>
          </div>
        </nav>
    </div>