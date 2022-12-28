<?php

include '../phpDependencies/config.php';

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
                <a href="#tender">Tender/Eoi</a>
                <a href="#employers">Employers</a>
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
                        echo '<a href="#">' . $_SESSION['id'] . '</a>
                              <a href="../loginAndRegistration/logout.php">Logout</a>';
                    } else {
                        echo '
                        <a href="../loginAndRegistration/login.php">Sign in</a>
                        <a href="../loginAndRegistration/register.php">Sign up</a>';
                    }

                    ?>
                </div>
                <div class="career-resources-dropdown">
                    <select class="career-resource" id="career-resource">
                        <option value="Career-Advice"><label for="Career-Advice">Career Advice</label></option>
                        <option value="Career-Guidline"> <a href="#">Career Guideline</a></option>
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
                    <a href="#"><i class="fa-brands fa-square-facebook fa-x"></i></a>
                </div>
                <div class="linkedin">
                    <a href="#"><i class="fa-brands fa-linkedin fa-x"></i></a>
                </div>
                <div class="instagram">
                    <a href="#"><i class="fa-brands fa-instagram fa-x"></i></a>
                </div>
                <div class="gmail">
                    <a href="#"> <i class="fa-solid fa-at "></i></a>
                </div>
                <div class="youtube">
                    <a href="#"><i class="fa-brands fa-youtube fa-x"></i></a>
                </div>
            </div>
        </nav>
        <!-- navbar-2 ends -->
    </nav>
    <!-- navbar ends -->

<!-- employee info starts -->
<div class="employee-info">
    <div class="display-info">

        <div class="image">
            <img src="images\tanzim.jpg" alt="Shahrier Al Tanzim">
        </div>

        <div class="basic-info">
            <h3>Employee</h3>
            <h1>Shahrier Al Tanzim </h1>
            <p>Age : 21 Years</p>
            <p>Quality : Software Engineer</p>
            <p>Work Experience : 4 Years</p>
            <p>Availabity : Free</p>
            <p>Adress : House 60, Road 2/1A, Dhap, Lalkuthi</p>
            <p>District : Rangpur</p>
            <p>Division : Rangpur</p>
            <P>Rating : 5 star</P>
        </div>
    </div>
</div>
<div class="detailed-info">
    <div class="detaile-info-title">
        <h2> Detailed Information </h2>
    </div>
    <div class="present-adress">
        <p>hello</p>
    </div>
    <div class="permanent-adress">
        <p>hello</p>
    </div>
    <div class="father-info">
        <p>hello</p>
    </div>
    <div class="mother-info">
        <p>hello</p>
    </div>
    <div class="education">
        <p>hello</p>
    </div>
    <div class="previous-jobs">
        <p>hello</p>
    </div>
    <div class="skills">
        <p>hello</p>
    </div>
    <div class="interests">
        <p>hello</p>
    </div>
    <div class="marital-status">
        <p>hello</p>
    </div>
    <div class="religion">
        <p>hello</p>
    </div>
    <!-- <div class="present-adress"></div>
    <div class="permanent-adress"></div>
    <div class="father-info"></div>
    <div class="mother-info"></div>
    <div class="education"></div>
    <div class="previous-jobs"></div>
    <div class="skills"></div>
    <div class="interests"></div>
    <div class="marital-status"></div>
    <div class="religion"></div> -->
</div>
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
            <a href="#">Our Services</a>
            <a href="privacy_policy.php">Privacy Policy</a>
            <a href="#">Feedback</a>
            <a href="./contact_us.php">Contact us</a>
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
            <a href="#">Career Guideline</a>
            <a href="#">Resume Templates</a>
            <a href="#">Myb Rating</a>
            <a href="#">FAQ</a>
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
            <a href="#">Post a job</a>
            <a href="#">Service</a>
            <a href="#">My/Company's Rating</a>
            <a href="#">FAQ</a>
        </div>
    </div>
    <!-- EMPLOYERS ends -->
</div>
<!-- footer ends -->
<div class="hotline">

    <h2><span>Hot Line:</span>1068944</h2>
</div>