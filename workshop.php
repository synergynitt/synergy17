<?php
$workshop = $_GET['workshop'];
require 'functions.php';
if (array_key_exists($workshop, $workshops)){
  ?>
  <html>
  <head>
    <title> Synergy 2017 | <?php echo $workshops[$workshop][0]; ?> </title>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/button.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/modal.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/header.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/dimmer.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/transition.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/form.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/menu.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/sticky.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/sidebar.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/container.min.css" rel="stylesheet" />


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/modal.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/dimmer.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/transition.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/form.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/sidebar.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/components/sticky.min.js" ></script>
  </head>

  <body>
    <div class="ui sidebar vertical menu">
      <a class="ui item" href="index.php">
        <h3 class="ui header">
          <img class="ui micro image" src="images/synergy_logo.jpg" >
          <div class="content">
            Synergy '17
          </div>
        </h3>
      </a>
      <div class="ui item basic segment">
        <h5 class="ui header login-data ">
        </h5>
      </div>
      <a class="item" href="workshops.php">
        <div class="left aligned ui basic segment">

        Workshops
      </div>
      </a>
      <a class="item" href="events.php">
        <div class="left aligned ui basic segment">

        Events
      </div>
      </a>
      <a class="item" >
        <div class="left aligned ui basic compact segment">

        Guest Lectures (coming soon)
      </div>
      </a>
      <a class="item" href="team.php">
        <div class="left aligned ui basic segment">
          <i class="green phone icon"></i>
        Contacts
      </div>
      </a>
      <a class="item" href="index.php">
        <div class="left aligned ui basic segment">

          <i class="green hotel icon"></i>
        Hospitality
      </div>
      </a>

      <a class="item" >
        <div class="left aligned ui basic segment">
        <i class="green calendar icon"></i>

        Schedule (coming soon)
      </div>
      </a>
    </div>

    <div class="ui small modal" id="workshop-register-modal">
      <div class="ui icon green header" style="width:100%;position:relative;">
        <h2><?php echo "Register for ".$workshops[$workshop][0]; ?></h2>
      </div>
      <div class="content">
        <form class="ui form" id="workshop-register-form">

          <p>
            <div class="two fields" >
              <div class="field">
                <label>Member 1</label>
                <input readonly="" type="text" name="member1name">
              </div>
              <div class="field">
                <label>Email</label>
                <input readonly="" type="text" name="member1email">
              </div>
            </div>
            <?php
            for($i=2;$i<=$workshops[$workshop][1];$i++){
              ?>
              <div class="two fields">
                <div class="field">
                  <label>Member <?php echo $i ?> </label>
                  <input type="text" name=<?php echo "member".$i."name";?>>
                </div>
                <div class="field">
                  <label>Email</label>
                  <input type="text" name=<?php echo "member".$i."email";?>>
                </div>
              </div>

              <?php
            }
            ?>
            <div class="ui success message" id="workshopRegisterSuccessLabel">
              <div class="header">Workshop Registration success!</div>
              <p></p>
              <div class="ui basic segment">You can go to <a href="https://www.thecollegefever.com/events/synergy-17-mechanical-engineering-symposium-of-nit-trichy">TheCollegeFever.com</a> for payment . If you do not prefer to stand in a queue on the day of synergy, you can pay online or if you prefer, you can also pay onsite on the day of the workshop</div>
            </div>

            <div class="ui error message" id="workshopRegisterFailedLabel">
              <div class="header">Workshop Registration failed</div>
              <p></p>
            </div>
          </form>
        </div>
        <div class="actions" style="text-align:right">
          <div class="ui red basic cancel button">
            <i class="remove icon"></i>
            Close
          </div>
          <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>
            Register
          </div>
        </div>
      </div>
    </div>
    <div class="pusher ui">
      <div class="ui container computer only grid">

        <div class="ui secondary borderless  fixed menu sticky-header">
          <div class="left menu">
            <a class="view-ui item">
              <i class="sidebar icon"></i>
            </a>
            <div class="ui item">
              <div class="ui big breadcrumb">
                <a class="section" href="index.php">
                  <img class="ui mini middle aligned image" src="images/synergy_logo.jpg" >
                </a>
                <i class="right chevron icon divider"></i>
                <a class="section" href="workshops.php">Workshops</a>
                <i class="right chevron icon divider"></i>
                <p class="section"> <?php echo $workshops[$workshop][0]; ?></p>

              </div>
            </div>
          </div>
          <div class="right menu">
            <div class="ui item" id = "welcome-text" style="text-transform:capitalize">Hello User</div>
            <a class="ui item synergy-login">
              <button class="ui basic button" >
                <i class="icon user"></i>
                Login
              </button>
            </a>
            <a class="ui item logout">
              <button class="ui basic button" >
                <i class="icon user"></i>
                Logout
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="ui container mobile tablet only grid">
        <div class="ui secondary borderless fixed menu sticky-header">
          <div class="left menu">
            <a class="view-ui item">
              <i class="sidebar icon"></i>
            </a>
            <h4 class="ui item header">
              Workshops
            </h4>

          </div>

          <div class="right menu">
            <a class="ui item synergy-login">
              <button class="ui basic button" >
                <i class="icon user"></i>
                Login
              </button>
            </a>
            <a class="ui item logout">
              <button class="ui basic button" >
                <i class="icon user"></i>
                Logout
              </button>
            </a>
          </div>
        </div>

      </div>

      <div class="ui basic segment">
        <div class="ui text container main-contents">
          <?php
          if ($workshop ==="cnc"){
            ?>
            <h2 class="ui center aligned header "> Advanced CNC Machining using Arduino</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>1290 per participant.</h4>
            <h4 class="ui center aligned header"> On March 17 & 18, 2 day workshop.</h4>
            <h4 class="ui center aligned header">Conducted by “Aerotrix”</h4>
            <h3 class="ui header">What is this course about?</h3>
            <p> CNC stands for Computerized Numerical Control. CNC Machining is about automating the machine tool operations for more precision and ease in manufacturing. In this project you will build a fully functional 3 axis CNC machine using Arduino which can perform manufacturing operations like drilling, milling and cutting. The tool will be operated with the help of G Codes and Arduino interfacing</p>
            <p>By building this project, you will practically understand about CNC machining and work with stepper motors, Arduino board, G Codes, CNC calibration and programming.</p>
            <h3 class="ui header">Course Outcomes</h3>
            <ul class="ui list">
              <li>Learn about CNC and its programming</li>
              <li>Build your CNC machine which can cut, drill and mill</li>
              <li>Work with Arduino shield and stepper motors</li>
              <li>Simulate tool movements programs using software</li>
              <li>Learn and implement G Codes</li>
              <li>Cut your own shape using your CNC machine</li>
            </ul>
            <h3 class="ui header">Kit Contents</h3>
            <ul class="ui list">
              <li>Stepper Motor</li>
              <li>DC Motor</li>
              <li>Tool and Chuck</li>
              <li>Arduino Uno</li>
              <li>GRBL Shield</li>
              <li>CNC Machine Frame</li>
              <li>Miscellaneous Items</li>
              <li>Tools</li>
            </ul>
            <h3 class="ui header">Eligibility</h3>
            <p> Anybody interested in Manufacturing and CNC Machinning can attend this course.</p>
            <?php
          }elseif ($workshop==="selfbalancingrobot") {
            ?>
            <h2 class="ui center aligned header">Self balancing workshop</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>800 per participant. 5 participants per team</h4>
            <h4 class="ui center aligned header">On March 17 & 18, 2 day workshop</h4>
            <h4 class="ui center aligned header">Conducted by “Robokart”</h4>
            <h3 class="ui header">	Two Wheeled Balanced Robot:</h3>
            <p> 	Two wheel self-balancing robot is a development in the field of robotics. This two wheel self-balancing robot is actually based on the concept of Inverted pendulum theory. This type of robot has gained fame and interest among researchers and engineers because it utilizes such a control system that is used to stabilize an unstable system using efficient microcontrollers and sensors. Two-wheeled balancing robots can be used in several applications with different perspectives such as an intelligent gardener in agricultural fields, an autonomous trolley in hospitals, shopping malls, offices, airports, healthcare applications or an intelligent robot to guide blind or disable people. Self-balancing systems can be seen in many places and they are essential for the smooth running of numerous types of machines. These types of robots can effectively work in non-uniform surfaces due to their balanced control system.</p>
            <p>Some of the obvious include Segways, bipedal robots and space rockets.</p>
            <h3 class="ui header">Workshop Session Details:</h3>
            <p>This is a Two Day Workshop, including a total 4 sessions.</p>
            <h3 class="ui header">Day 1:  </h3>
            <h3 class="ui header">Session 1: </h3>
            <ul class="ui list">
              <li>Introduction to basic of Embedded System</li>
              <li>Introduction & Explanation of Microcontrollers</li>
              <li>Explanation of PID & Formulas</li>
              <li>Explanation of Arduino Board & Programming</li>
            </ul>
            <h3 class="ui header">Session 2:</h3>
            <ul class="ui list">
              <li>Basic Arduino Based programs for interfacing I/O Devices</li>
              <li>Motor Driver & Motor Interfacing & Programming</li>
              <li>Explanation of Accelero-Gyro Sensor & Interfacing & Reading Sensor Values </li>
              <li>Assembling of Robot</li>
            </ul>
            <h3 class="ui header">Day 2:</h3>
            <h3 class="ui header">Session 3:</h3>
            <ul class="ui list">
              <li>Programming codes for balancing robot</li>
              <li>Setting PID parameter for standalone balancing</li>
              <li>Interfacing with Bluetooth and reading values from android application</li>
              <li>Programming robot with self balancing with Bluetooth code</li>

            </ul>
            <h3 class="ui header">Session 4:</h3>
            <ul class="ui list">
              <li>Tuning Speed and PID parameters to self balance robot in motion</li>
              <li>Controlling robot using android application</li>
              <li>Doubt Solving & Questionnaires</li>
              <li>Workshop Based Challenges for Students</li>
            </ul>
            <h3 class="ui header">Kit Content:</h3>
            <ul class="ui list">
              <li>Arduino Nano Board</li>
              <li>DC Motor</li>
              <li>DC Motor Driver</li>
              <li>Bluetooth Module</li>
              <li>Accelero-Gyro Sensor</li>
              <li>Potentiometer for PID</li>
              <li>Wheel Pair</li>
              <li>Robot Chassis</li>
              <li>Screw Packet</li>
              <li>Screw Driver</li>
              <li>USB Cable</li>
              <li>Connecting Wires</li>
              <li>Battery</li>
              <li>Battery Adapter</li>
            </ul>

            <?php
          }elseif($workshop ==="spheredrone"){
            ?>
            <h2 class="ui center aligned header">Sphere drone</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>1300 per participant. 5 participants per team</h4>
            <h4 class="ui center aligned header">On March 18 & 19,  2 day workshop</h4>
            <h4 class="ui center aligned header">Conducted by “Aerotrix”</h4>
            <h3 class="ui header">	What is this workshop about?</h3>
            <p>Sphere drone is a new type of unmanned aerial vehicle having a distinctive ball-like shape and single rotor design allowing for some amazing flyability. It has possible applications in search & rescue, film making, military and many more such domains.</p>
            <p>This unique workshop in sphere drone making, introduces you to various UAV structures and engineering principles. Developing the sphere  drone on your own will help you gain practical insights on flight theory  and other drone technologies.</p>
            <h3 class="ui header">Course Highlights</h3>
            <ul class="ui list">
              <li>Learn all concepts of UAV Development and Engineering</li>
              <li>Design, Fabricate and Test a Sphere Drone</li>
              <li>Learn about stability and control of Drones</li>
              <li>Hands-on experience with in-flight electronics - Transmitter, Receiver,Servos, Brushless Motors, Electronic Controller, etc.</li>
            </ul>
            <h3 class="ui header">Course Structure</h3>
            <ul class="ui list">
              <li>Lecture Session - 4 hrs</li>
              <li>Design Session - 1 hr</li>
              <li>Fabrication Session - 7 hrs</li>
              <li>Testing Session all drones designed by the participants are flown by an expert flyer of Team AerotriX - 3.5 hrs</li>
              <li>Certificate Distribution - 0.5 hr</li>
            </ul>
            <h3 class="ui header">Topics Covered</h3>
            <ul class="ui list">
              <li>Introduction to Drones and UAVs</li>
              <li>Aerodynamics of Drone</li>
              <li>Stability and Control of Drone</li>
              <li>Advanced technologies used in UAVs</li>
            </ul>
            <h3 class="ui header">Kit Content</h3>
            <ul class="ui list">
              <li>Brushless DC Motor</li>
              <li>Electronic Speed Controller - ESC</li>
              <li>Transmitter*</li>
              <li>Receiver *</li>
              <li>Li-Po Battery</li>
              <li>Servo Motor</li>
              <li>Coroplast</li>
              <li>Working Tools *</li>
              <li>Other miscellaneous items</li>
            </ul>
            <p>All the above components would be provided during the program to  participants in groups of 5 but would be taken back at the end. This is being done to reduce the cost of the program and make it affordable for students who do not want to buy the take-away kit.</p>
            <p>Take-away kit consists of all the above items excluding the items marked with *. Take-away kit can be purchased at the venue by paying an additional fee of ₹ 6,500 </p>
            <h3 class="ui header">Online Portal</h3>
            <p>Participants have access to an exclusive online portal to:</p>
            <ul class="ui list">
              <li>View status of registered and attended workshops</li>
              <li>View study material for workshops</li>
              <li>Write online exams and receive separate certificates with scores. These certificates with scores will provide students an opportunity to show their learning in job interviews.</li>
            </ul>
            <h3 class="ui header">Certification</h3>
            <ul class="ui list">
              <li>All AerotriX certificates have a unique ID which can be verified</li> online for authentication
              <li>Certificate of Completion</li>
              <li>Certificate of Completion with Distinction (for top performers)</li>
            </ul>
            <h3 class="ui header">Eligibility</h3>
            <p>Anybody interested in unmanned aerial vehicles can attend this workshop.</p>
            <?php
          }elseif($workshop==="creo"){
            ?>
            <h2 class="ui center aligned header">Creo Workhsop</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>450 per participant</h4>
            <h4 class="ui center aligned header">On March 18 & 19, 1 Day Workshop</h4>
            <h4 class="ui center aligned header">Conducted by: Designer's Consortium</h4>
            <p>Computer-aided design (CAD) is the use of computer systems to aid in the creation, modification, analysis, or optimization of a design. CAD software is used to increase the productivity of the designer, improve the quality of design, improve communications through documentation, and to create a database for manufacturing. Computer-aided design is used in many fields. In mechanical design it is known as or computer-aided design (CAD), which includes the process of creating a technical drawing with the use of computer software.CAD software for mechanical design uses either vector-based graphics to depict the objects of traditional drafting, or may also produce raster graphics showing the overall appearance of designed objects. However, it involves more than just shapes. As in the manual drafting of technical and engineering drawings, the output of CAD must convey information, such as materials, processes, dimensions, and tolerances, according to application-specific conventions. CAD may be used to design curves and figures in two-dimensional (2D) space; or curves, surfaces, and solids in three-dimensional (3D) space. CAD is extensively used in many applications, including automotive, shipbuilding, and aerospace industries, industrial and architectural design, prosthetics, and many more. CADD skill is an integral part of every engineering profession today. Hence Engineers are expected to acquire the fundamental knowledge of CADD.</p>
            <p>Modules Taught:</p>
            <ol class="ui list">
              <li>2D Design</li>
                           <li>3D Design</li>
                           <li>Drafting And Annotation</li>
                           <li>Assembly</li>
                           <li>Simulation</li>
            </ol>
            <p>Duration :- 6 hrs</p>


            <?php
          }elseif($workshop==="automobile"){
            ?>
            <h2 class="ui center aligned header">Automobile Workshop</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>750 per participant</h4>
            <h4 class="ui center aligned header">On March 17 & 18, 1 day Workshop</h4>
            <h4 class="ui center aligned header">Conducted By : PSI NITT</h4>
            <p>The loud, screaming sound of a “Vroom” gets your pulse racing and mind running faster than ever, trying to figure out where and what made that sound that got you racing. And if you’re one of them who’s bothered about how they work, and how they squeeze out every bit of power from their engines, you’re at the right place. Welcome to the Automobile Workshop, conducted by the PSI Racing Team, one of the top teams in South India who build their own ATV’s that can terrain any type of surface and slopes and race them at the famed BAJA SAE INDIA in association with Synergy, the Mechanical Engineering Department symposium of NIT-Trichy. </p>
            <p>The Workshop is here to start from the very basic fundamentals of an automobile, along with the elements of design which are considered during the manufacturing and assembly of the vehicle.</p>
            <p> The key features of the Workshop include:</p>
            <ul class="ui list">

              <li>Theory session, where all the subsystems, the engine, transmission, chassis, brakes, suspension and steering being covered in detail, to clear all the fundamentals.</li>

              <li>New technologies, developments, and aspects of design and production being discussed.</li>

              <li>Practical hands-on session, where all the theory will come live, with all mechanisms being demonstrated and explained, to ensure complete understanding of the working of the automobile.</li>
            </ul>
            <p>So come, join us in this exciting workshop to satiate the inner automobile thirst in you.</p>

            <?php
          }elseif($workshop==="solidworks"){
            ?>
            <h2 class="ui center aligned header">Solid Works Workhsop</h2>
            <h4 class="ui center aligned header">Workshop Fee: <i class="rupee icon"></i>450 per participant</h4>
            <h4 class="ui center aligned header">On March 18 & 19, 1 Day Workshop</h4>
            <h4 class="ui center aligned header">Conducted by: Designer's Consortium</h4>
            <p>Computer-aided design (CAD) is the use of computer systems to aid in the creation, modification, analysis, or optimization of a design. CAD software is used to increase the productivity of the designer, improve the quality of design, improve communications through documentation, and to create a database for manufacturing. Computer-aided design is used in many fields. In mechanical design it is known as or computer-aided design (CAD), which includes the process of creating a technical drawing with the use of computer software.CAD software for mechanical design uses either vector-based graphics to depict the objects of traditional drafting, or may also produce raster graphics showing the overall appearance of designed objects. However, it involves more than just shapes. As in the manual drafting of technical and engineering drawings, the output of CAD must convey information, such as materials, processes, dimensions, and tolerances, according to application-specific conventions. CAD may be used to design curves and figures in two-dimensional (2D) space; or curves, surfaces, and solids in three-dimensional (3D) space. CAD is extensively used in many applications, including automotive, shipbuilding, and aerospace industries, industrial and architectural design, prosthetics, and many more. CADD skill is an integral part of every engineering profession today. Hence Engineers are expected to acquire the fundamental knowledge of CADD.</p>
            <p>Modules Taught:</p>
            <ol class="ui list">
              <li>2D Design</li>
                           <li>3D Design</li>
                           <li>Drafting And Annotation</li>
                           <li>Assembly</li>
                           <li>Simulation</li>
            </ol>
            <p>Duration :- 6 hrs</p>


            <?php
          } ?>

          <div class="ui center aligned header">
            <button class="ui primary button" id="workshop-register">Register</button>
          </div>

        </div>
      </div>
      <div class="ui black inverted vertical footer segment" id="footer">
        <div class="ui inverted  divider"></div>
        <div class="ui center aligned container">
          Contact us on:
          <h2>
            <a href ="https://www.facebook.com/synergynitt"><i class="inverted blue facebook icon"></i></a>
            <a href ="https://www.linkedin.com/company-beta/17982136/"><i class="blue linkedin icon"></i></a>
            <a href ="mailto:mea17.nitt@gmail.com"><i class="inverted white mail icon"></i></a>
          </h2>

        </div>
        <div class="ui center aligned container">
          Made with <i class=" red heart icon"></i> by Synergy Web Team
        </div></div>
      </div>
    </div>

    <div class="ui small modal" id="login-modal">

      <div class="ui icon green header" style="width:100%;position:relative;">
        <h2>Login</h2>
      </div>
      <div class="content">
        <p>
          <form class="ui form" id="login-form" method="post">

            <div class="field">
              <p>Email</p>
              <input placeholder="E-Mail" name="email" type="email">
            </div>
            <div class="field">
              <p>Password</p>
              <input type="password" name="login-password" placeholder="Password">
            </div>

            <div class="ui success message" id="loginSuccessLabel">
              <div class="header">Login success!</div>
              <p></p>
            </div>
            <div class="ui error message" id="loginFailedLabel">
              <div class="header">Login failed</div>
              <p></p>
            </div>
          </form>

        </p>
      </div>
      <div class="actions" style="text-align:right">
        <div class="ui red basic cancel button">
          <i class="remove icon"></i>
          Close
        </div>
        <div class="ui green ok inverted button">
          <i class="checkmark icon"></i>
          Login
        </div>
      </div>

    </div>

    <script src= "js/main_script.js" ></script>
    <script src="js/workshop-register.js"></script>
  </body>

  </html>

  <?php
}else{
  header("Location: workshops.php");
}

?>
