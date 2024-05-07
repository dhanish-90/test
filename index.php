<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <!--Font asome icon  css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Box icon css link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Css file-->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="media-queries.css">
 
</head>

<body>
    <!--nav bar-->
    <header class="header">
        <a href="#" class="logo">portfolio </a>
        <nav class="navbar active" id="navbar">

            <input type="checkbox" id="click">
            <label for="click" class="nav_toggle hover_link">
                <i class="fa-solid fa-bars" id="bars" style="color: #00eeff;"></i>
            </label>
            
            <ul>
          <li> <a href="#home_id" style="--1:1" class="active_li" >Home</a></li> 
          <li> <a href="#about" style="--1:2" >About</a></li> 
          <li> <a href="#serivicse_id" style="--1:2" >Serivicse</a></li> 
          <li> <a href="#skill-id" style="--1:3" >Skill</a></li> 
          <li> <a href="#project_id" style="--1:3" >Projects</a></li> 
          <li> <a href="#" style="--1:4" >Contact</a></li> 
        </ul>
        </nav>  <!-- 
        <a href="#" class="nav_toggle hover_link" id="nav_toggle">
            <i class="fa-solid fa-bars" id="bars" style="color: #00eeff;"></i>
        </a>  -->

    </header>
    <!-- home section-->

    <section class="home" id="home_id">
        <div class="home-content">
            <h3>Hello,It's</h3>
            <h1>Dhanish Kumar</h1>
            <h3>And I'm a <span class="text"></span></h3><br>
            <h4> Download My CV <a href="path/to/your/file.pdf" download="Resume"><i class='bx bxs-download'
                        style='color:#00eeff'></i></a></h4>
            <div class="home-sci">
                <a href="#" style="--1:5"><i
                        class="fa-brands fa-linkedin"></i></a>
                <a href="#" style="--1:6"><i class="fa-brands fa-github"></i></a>
                <a href="#" style="--1:7"><img src="https://www.elevatorandlifts.com/wp-content/uploads/2024/03/Ground-Up-Logo-Up-Symbol-Only-1.png" alt="Freelancering icon" style="height: 28px;width: 28px;">
                        </a>

            </div>
            <a href="javascript:void(0)" class="bint-box">More About</a>

        </div>

        <div class="box-1">
            <div class="box-2"></div> 
        </div>

    </section>

    <!--About me -->

    <section class="about" id="about">
        <div class="box-1">
            <div class="box-3"></div>
        </div>

        <div class="about-text">
            <h2>About<span>me</span></h2>
            <h4>Pursuing Master of Computer Applications Education on parul university </h4>
            <h4 class="bca">Full stack Web Developer</h4>
            <p class="about_text">
                I've been honing my skills and learning about the world since my inception, constantly absorbing
                information from diverse sources. My expertise lies in language comprehension, understanding context,
                and generating human-like text. I don't have a job history or traditional achievements, but my
                accomplishments involve helping individuals with various tasks, providing information................
            </p>
            <a href="#" class="bint-box">More About We</a>
        </div>
    </section>

    <!-- services -->

    <section id="serivicse_id">
        <div class="serivices" id="serivices"></div>
        <div class="container">
            <h1 class="sub-title">My <span>Services</span></h1>
            <div class="serivices-list">
                <div class="web_services">
                    <i class='bx bx-code' style='color:#012290f7'></i>
                    <h2 class="heading_services">Web Developer</h2>
                    <p class="pairagraf_seriviese">
                        Welcome to our web development services! We specialize in crafting exceptional, user-centric
                        websites tailored to meet your unique needs. Whether you're a startup, small business, or a
                        large enterprise, we have the expertise to bring your vision to life on the digital frontier.
                    </p>
                    <a href="#" class="read">lern More</a>
                </div>

                <div class="web_services">
                    <img src="https://iconape.com/wp-content/png_logo_vector/uipath.png" alt="RPA icon" class="rpa_icon">
                    <h2 class="heading_services">RPA Developer</h2>
                    <p class="pairagraf_seriviese">
                        We design and develop customized RPA solutions tailored to your specific business needs. Whether 
                        it's automating data entry, invoice processing, customer service tasks, or any other repetitive
                         processes, we create bots that work tirelessly to execute tasks with precision and accuracy..
                    </p>
                    <a href="#" class="read">lern More</a>
                </div>

                <div class="web_services">
                    <img src="https://www.elevatorandlifts.com/wp-content/uploads/2024/03/Ground-Up-Logo-Up-Symbol-Only-1.png" alt="Freelancering icon" class="rpa_icon">
                    <h2 class="heading_services">Freelancer</h2>
                    <p class="pairagraf_seriviese">
                        This involves creating and maintaining websites. Web developers work with various programming languages like HTML, CSS, JavaScript,
                         and frameworks like React, Angular, or Vue.js. They build websites from scratch or enhance existing ones 
                         and visually appealing.
                         Web development encompasses both front-end (client-side) and back-end (server-side) development.
                    </p>
                    <a href="#" class="read">lern More</a>
                </div>

            </div>
        </div>
    </section>

    <!--Skills-->
    <!-- Technical Skills -->

    <h1 class="sub-title">My <span>Skills</span></h1>
    <section id="skill-id">
        <div class="container1" id="Skills">
            <div class="container1_heading1">
                <h1 class="heading1">Technical Skills</h1>
            </div>
            <div class="Technical-bars">
                <div class="bar">
                    <i class='bx bxl-html5' style='color:#c95d2e'></i>
                    <div class="info">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span ></span>
                    </div>
                </div>

                <div class="bar">
                    <i class='bx bxl-css3' style='color:#147bbc'></i>
                    <div class="info">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span ></span>
                    </div>
                </div>


                <div class="bar">
                    <i class='bx bxl-javascript' style='color:rgb(188, 188, 7)'></i>
                    <div class="info">
                        <span>JavaScript</span>
                    </div>
                    <div class="progress-line JavaScript">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <i class='bx bxl-c-plus-plus' style='color:#147bbc'></i>
                    <div class="info">
                        <span>C++</span>
                    </div>
                    <div class="progress-line c">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <i class='bx bxl-java' style='color:rgb(222, 90, 90)'></i>
                    <div class="info">
                        <span>Java</span>
                    </div>
                    <div class="progress-line java">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <i class='bx bxl-php' style='color:rgb(101, 51, 217)'></i>
                    <div class="info">
                        <span>PHP</span>
                    </div>
                    <div class="progress-line php">
                        <span></span>
                    </div>
                </div>

                <div class="bar">
                    <i class='bx bxl-php' style='color:rgb(101, 51, 217)'></i>
                    <div class="info">
                        <span>RPA</span>
                    </div>
                    <div class="progress-line RPA">
                        <span></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Professional Skills -->
        <div class="container2">
            <h1 class="heading1">Professional Skills</h1>

            <div class="radial-bars">
                <div class="radial-bar" id="Creativity">
                    <svg class="progress-svg" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">90%</div>
                    <div class="text">Creativity</div>
                </div>

                <div class="radial-bar" id="Communication">
                    <svg class="progress-svg" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-2" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">65%</div>
                    <div class="text">Communication</div>
                </div>

                <div class="radial-bar" id="Problem_Solving">
                    <svg class="progress-svg" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-3" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">55%</div>
                    <div class="text">Problem Solving</div>
                </div>

                <div class="radial-bar" id="Teamwork">
                    <svg class="progress-svg" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-4" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">85%</div>
                    <div class="text">Teamwork</div>
                </div>

            </div>

        </div>
        </div>
    </section>
    <!-- Project -->

    <section class="project-section" id="project_id">
        <div class="project" id="project"></div>
        <div class="project-container">
            <h1 class="project-title">My <span>Project</span></h1>
            <div class="project-list">
                <div>
                    <i class='bx bxl-html5' style='color:#c95d2e'> </i> <i class='bx bxl-css3'
                        style='color:#147bbc'></i>
                    <i class='bx bxl-javascript' style='color:rgb(188, 188, 7)'></i> <i class='bx bxl-c-plus-plus'
                        style='color:#147bbc'></i>
                    <i class='bx bxl-java' style='color:rgb(222, 90, 90)'></i> <i class='bx bxl-php'
                        style='color:rgb(101, 51, 217)'></i>
                    <h2>Projects</h2>
                    <p><span class="number"></span></p>
                    <a href="project.html" class="read">More Projects</a>
                </div>
            </div>
        </div>
    </section>

    <h2>Contact Us</h2>

<form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
    
    <button type="submit" name="send">Submit</button>
</form>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for SMTP
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'luckysingh49946@gmail.com';            // SMTP username
        $mail->Password = 'onybtehtyjlwjpbh';                // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        // Sender and recipient details
        $mail->setFrom('luckysingh49946@gmail.com', 'Mailer');        // Sender's email address and name
        $mail->addAddress('lk502295@gmail.com', 'Joe User'); // Recipient's email address and name (optional)

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact form submission';            // Email subject
        $mail->Body = "Name: $name<br><br>Email: $email<br>Message: $message"; // Email body (HTML)

        // Send email
        $mail->send();
        echo 'Message has been sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request.';
}
?>

    <script src="mens.js"></script>
</body>

</html>