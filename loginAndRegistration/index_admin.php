<?php

include_once '../phpDependencies/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTS-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  <link rel="stylesheet" href="css/login_styles.css">
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="../loginAndRegistration/css/index_admin_style.css">
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!--font for logo-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Kaajkormo - Home</title>

<body>
  <!--navbar starts-->
  <nav class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="admin-panel">
        <div class="admin-panel-header">
            <h1>Admin Panel</h1>
        </div>
    </nav>
    <!-- navbar-1 ends -->

    <!--navbar2 starts-->
    <nav class="navbar2">
      <h2 class="navbar-logo"> <a href="../home/index.php">Kaajkormo.com</a></h2>
    </nav>
    <!-- navbar-2 ends -->
  </nav>
  <!-- navbar ends -->

  <form class="form" action="" method="post">
        <div class="jobs">
            <h2>Jobs List</h2>
        </div>
        <div class="form-container-admin">
            <div class="job">
                <h4><a href="#">Software Engineer</a></h4>
                <p>Company: Google</p>
                <p>Salary: 200000 BDT/Month</p>

                <div class="verify">
                    <input type="submit" id="submit" name="submit" value="Verify" class="verify">
                </div>
            </div>
            <div class="job">
                <h4><a href="#">Civil Engineer</a></h4>
                <p>Company: Akij</p>
                <p>Salary: 100000 BDT/Month</p>

                <div class="verify">
                    <input type="submit" id="submit" name="submit" value="Verify" class="verify">
                </div>
        </div>
    </form>
</body>

</html>
