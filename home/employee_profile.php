<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $person = new Person($id);
  $userType = $person->getUserType();
}

if(isset($_POST['submit'])) {
  header('Location: employee_profile_edit.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Employee-info</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee_profile_style.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--font for logo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>


<body>
    <!--navbar starts-->
  <nav class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="navbar">
      <div class="navbar-menu">
        <a href="#jobs">Jobs</a>
        <a href="#myjobs">Myjobs</a>
        <a href="#elearning">E-learning</a>
        <a href="#tender"></a>
        <a href="#employers"></a>
      </div>
      <div class="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>


      <div class="nb-class1">
        <div class="sign-in">
          <?php

          if (isset($_SESSION['id'])) {
            $html = '';
            if($userType == 'employee') {
              $html = $html . '<a href="employee_profile.php">';
            } elseif($userType == 'employer') {
              $html = $html . '<a href="employer_profile.php">';
            }
            echo $html . $_SESSION['id'] . '</a>
                  <a href="../loginAndRegistration/logout.php">Logout</a>';
          } else {
            echo '<a href="../loginAndRegistration/login.php">Sign in</a>
                  <a href="../loginAndRegistration/register.php">Sign up</a>';
          }

          ?>
          </div>
          <div class="career-resources-dropdown">
              <select class="career-resource" id="career-resource">
                  <option value="Career-Advice"><label for="Career-Advice">Career Advice</label></option>
                  <option value="Career-Guidline"> <a href="https://www.bdjobs.com/career/careerguide/">Career Guideline</a></option>
                  <option value="Interview-Tips"> <a href="#">Interview Tips</a></option>
                  <option value="Resume-writing-tips"> <a href="#">Resume writing tips</a></option>
                  <option value="Skill-development tips"> <a href="#">Skill development tips</a></option>
                  <option value="Articles"> <a href="#">Articles</a></option>
              </select>
          </div>
          <div class="contact-us">
              <a href="./contact_us.php">Contact Us</a>
          </div>
      </div>



    </nav>
    <!-- navbar-1 ends -->

    <!--navbar2 starts-->
    <nav class="navbar2">
      <h2 class="navbar-logo"> <a href="index.php">Kaajkormo.com</a></h2>

      
      <div class="nb-class2">
        <div class="facebook">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="linkedin">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="instagram">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="gmail">
          <a href="#"> <i class=""></i></a>
        </div>
        <div class="youtube">
          <a href="#"><i class=""></i></a>
        </div>
      </div>
    </nav>
    <!-- navbar-2 ends -->
  </nav>
  <!-- navbar ends -->

    <!-- employee info starts -->
    <form action="" method="post" enctype="multipart/form-data">
        <h1 class="employee">Employee</h1>
        <div class="basic-info">
            <br>
            <p>Name : <?php echo $person->getName(); ?></p><br>
            <p>Date of birth : <?php echo $person->getDateOfBirth(); ?></p><br>
            <p>Skill : <?php echo $person->getSkill(); ?></p><br>
            <p>Availability : <?php echo $person->getAvailability(); ?></p><br>
            <p>Blood Group : <?php echo $person->getBloodGroup(); ?></p><br>
        </div>
        <div class="detailed-info">
            <div class="detailed-info-title">
                <h2> Detailed Information </h2>
            </div>
            <div class="present-address">
                <p>Present address : </p>
                <br>
                <?php echo $person->getPresentAddress(); ?>
            </div>
            <div class="permanent-address">
                <p>Permanent address : </p>
                <br>
                <?php echo $person->getPermanentAddress(); ?>
            </div>
            <div class="father-info">
                <p>Father's Name : </p>
                <br>
                <?php echo $person->getFathersName(); ?>
            </div>
            <div class="mother-info">
                <p>Mother's Name : </p>
                <br>
                <?php echo $person->getMothersName(); ?>
            </div>
            <div class="marital-status">
                <p>Marital Status : </p>
                <br>
                <?php echo $person->getMaritalStatus(); ?>
            </div>
            <div class="religion">
                <p>Religion : </p>
                <br>
                <?php echo $person->getReligion(); ?>
            </div>
        </div>
        <br>
        <br>
        <div class="employee-edit">
          <div class="submit">
            <input type="submit" name="submit" id="submit" value="Edit Your Profile" class="submit">
          </div>
        </div>
    </form>
    <!-- footer starts -->
    <div class="footer">

        <!-- about us starts -->
        <div class="about-us">
            <div class="heading-about-us">
                <h2>ABOUT US</h2>
            </div>
            <div class="links">
                <a href="about_us.php">About Kaajkormo</a>
                <a href="terms_and_conditions.php">Terms & conditions</a>
                <a href="privacy_policy.php">Privacy Policy</a>
                <a href="#">Contact us</a>
            </div>
        </div>
        <!-- about us ends -->

        <!-- job seekers starts -->
        <div class="Job-Seekers">
            <div class="heading-job-seekers">
                <h2>JOB SEEKERS</h2>
            </div>
            <div class="links-of-jobseekers">
                <a href="../loginAndRegistration/register.php">Create Account</a>
            </div>
        </div>
        <!-- job seekers ends -->


        <!-- EMPLOYERS starts -->
        <div class="Job-Seekers">
            <div class="heading-job-seekers">
                <h2>EMPLOYERS</h2>
            </div>
            <div class="links-of-jobseekers">
                <a href="../loginAndRegistration/register.php">Create Account</a>
            </div>
        </div>
        <!-- EMPLOYERS ends -->
    </div>
    <!-- footer ends -->
    <div class="hotline">

        <h2><span>Hot Line:</span>1068944</h2>
    </div>
</body>

</html>