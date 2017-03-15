<?php
$event = $_GET['event'];
require 'functions.php';
if (array_key_exists($event, $events)){
  ?>
  <html>
  <head>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />

    <title> Synergy 2017 | <?php echo $events[$event][0]; ?> </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" rel="stylesheet" />


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js" ></script>
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
      <a class="ui item registrations" href="profile.php">
        <div class="left aligned ui basic segment">
        My Registrations
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

    <div class="pusher ui">
      <div class="ui container computer only grid">

        <div class="ui secondary borderless fixed menu sticky-header">
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
                <a class="section" href="events.php">Events</a>
                <i class="right chevron icon divider"></i>
                <p class="section"> <?php echo $events[$event][0]; ?></p>

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
              Events
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

      <div class="ui small modal" id="event-register-modal">
        <div class="ui icon green header" style="width:100%;position:relative;">
          <h2><?php echo "Register for ".$events[$event][0]; ?></h2>
        </div>
        <div class="content">
          <form class="ui form" id="event-register-form">

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
            for($i=2;$i<=$events[$event][1];$i++){
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
            <div class="ui success message" id="eventRegisterSuccessLabel">
              <div class="header">Event registration success!</div>
              <p></p>
            </div>
            <div class="ui error message" id="eventRegisterFailedLabel">
              <div class="header">Event registration failed</div>
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

      <div class="ui full height text container main-contents">
        <?php
        if ($event=="fixthemup"){
          ?>
          <h2 class="ui center aligned header"> Fix Them Up</h2>
          <h3 class="ui header">      Event objective:</h3>
          <p>Join the dismantled components.</p>
          <h3 class="ui header">Event rules: </h3>
          <ol class="ui list">
            <li>First round will be a written round of one hour duration. The participants will be
              tested on their basic mechanical engineering knowledge and on their practical
              understanding. Both objective and subjective questions will be asked .This is a
              qualifying round and marks scored in this round will not be considered for the
              final evaluation.
            </li>
            <li>Only top 10 performers in the first round will be eligible to participate in the
              second round.
            </li>
            <li>Second round will be the Fix ‘em up round where the participants will be given
              dismantled components of two mechanical assemblies.
            </li>
            <li>Participants’ compete with time in fixing up the first component .A fixed time
              (decided on the basis of complexity of the given assembly) will be given to
              assemble the components in the right manner. Points will be awarded based on
              the degree of completion.
            </li>
            <li>Fixing of the second assembly is not time bound. Points will be awarded based
              on the order of completion.
            </li>
            <li>Top three contestants will get certificates and cash prizes. Criteria: points scored
              in Round 2.
            </li>
            <li>Judges decision will be final and binding.
            </li>
          </ol>
          <h3 class="ui header">Event required inventory:</h3>
          Question paper for round 1<br>
          Stuff to assemble
          <br>
          <?php
        }elseif($event ==="engineerofthefuture"){
          ?>
          <h2 class="ui center aligned header">Engineer Of The Future</h2>
          <h3 class="ui header">Event rules:</h3>
          <ol class="ui list">
            <li>
              A team can comprise a maximum of three people. The team-members can be
              from different colleges. An individual can be part of only ONE team
            </li>
            <li>
              Round 1: Your team and one opponent team will be asked to make a product
              based on the items provided to you in 15 minutes.
            </li>
            <li>
              Round 2: Market your product to a jury. This can take you 5 minutes. The jury
              may ask you questions following that.
            </li>
            <li>
              The question for the product will be given on the day of event.
            </li>
          </ol>
          <?php
        }elseif ($event ==="techyhunt") {
          ?>
          <h2 class="ui center aligned header">Techy Hunt</h2>
          <h3 class="ui header">Event format:</h3>
          <p>It is a written round/event. Almost all questions will be asked through a video, photos or demonstrations perhaps. The participants will be shown a clipping.
            Using fundamental laws of physics, they need to tell if the event is in the physical world and explain the physics behind it. (The participants will be shown a clipping
            and asked to judge its authenticity and if so, explain it). </p>
          <h3 class="ui header">Event Rules:</h3>
          <ol class="ui list">
            <li>Maximum members per team – 3.
            </li>
            <li>The answers should be as brief as possible. In case of a tie-breaker, the team
              explaining in the shortest answer will be given priority
            </li>
            <li>The decision of the judges will be final.
            </li>
          </ol>

          <?php
        }elseif ($event ==="junkyardwars") {
          ?>
          <h2 class="ui center aligned header">Junkyard Wars</h2>
          <h3 class="ui header">Event Format</h3>
          <h4 class="ui header">Round 1</h4>
          <ol class="ui list">
            <li>Each team will be given a question paper on the day of event. Questions will
              test the participants’ knowledge in basic physics, mechanics and engineering
              concepts (required for the second round).
            </li>
            <li>
              Time allotted for the round will be 50 minutes.
            </li>
            <li>
              Only one submission is allowed per team.
            </li>
            <li>
              No modifications can be made once the answers are submitted.
            </li>
            <li>
              After round 1 the teams selected for the round 2 will be informed.
            </li>
          </ol>
          <h4 class="ui header">Round 2</h4>
          <ol class="ui list">
            <li>Each team can have a maximum of 5 students per team.
            </li>
            <li>
              Each team must formulate their own ideas and designs. Plagiarism in any form
              shall lead to disqualification.
            </li>
            <li>
              Non-working models will not be allowed to be showcased.
            </li>
            <li>
              All the team members must be present during the finals.
            </li>
            <li>
              Participants must comply with the rules of the Workshop area where the model
              will be built.
            </li>
            <li>
              Junkyard Wars is not responsible for any loss of property, injury and delays
              caused by participants during the event.
            </li>
            <li>
              Junkyard Wars reserves the right to eliminate the participants in case of any
              misconduct.
            </li>
            <li>
              Decision of the judges is final and binding.
            </li>
          </ol>
          <?php
        }elseif ($event ==="paperpresentation") {
          ?>
          <h2 class="ui center aligned header">Paper Presentation</h2>
          <h3 class="ui header">Eligibility Criteria:</h3>
          <p> Participants with a valid identity card or a Bonafide Certificate from their institute are eligible to participate.</p>
          <h3 class="ui header">Event Format</h3>
          <ol class="ui list">
            <li>Preliminary round will be held online. New ideas are appreciated and papers with originality and feasibility are given preference in the selection.</li>
            <li>The number of teams which will be selected depends upon the participation.</li>
            <li>The topics for the presentation include:</li>
            <li>Clusters:
              <ol>
                <li>Manufacturing</li>
                <li>Automobiles</li>
                <li>Thermodynamics & Power generation</li>
                <li>Design</li>
                <li>Miscellaneous</li>
              </ol>
            </li>
          </ol>
          <h3 class="ui header">General Rules</h3>
          <ol class="ui list">
            <li>Maximum of two members allowed per team.</li>
            <li>Any number of teams from a college can submit their papers.</li>
            <li>Participants are not allowed to submit more than one paper.</li>
            <li>Participants can submit their papers in a maximum of 2 clusters, depending on the content of the paper.</li>
            <li>If shortlisted, they will be allowed to present it in only one cluster. (Specify your priorities in case of selection in both clusters).</li>
            <li>Participants are required to send a soft copy of their entire paper, in the IEEE format.</li>
            <li>The paper length should not exceed 12 pages, of the format specified.</li>
            <li>Participants whose papers are shortlisted shall be informed personally through mail. The names will be put up on the website as well.</li>
            <li>Participation certificate will be given to all the shortlisted participants. </li>
          </ol>
          <h3 class="ui header">Paper Submission</h3>
          <ol class="ui list">
            <li>Participants have to submit their full paper for scrutiny, abstracts will not be entertained.</li>
            <li>The document format has to be in Microsoft Word (.doc or .docx) or Printable Document Format (.pdf) only.</li>
            <li>The title of the submitted file must be a shortened version of their paper title. (eg: -Suppose my paper title is “How to make the tastiest lemon juice from a given lemon, squeezer, water and ice”, then the name of my file will be “making tastiest lemon juice.doc”)</li>
            <li>Participants are requested to submit their papers in IEEE format. In case it is not possible, submitting the papers in any internationally recognized format is allowed. Else, they can submit their papers in a neat, legible, coherently arranged format, with perfect alignment, font adjustments (sizes, font type), naming of figures/tables/charts and references.</li>
            <li>Papers with improper formatting will be sent back to the participants and they are encouraged to submit it again after re-formatting.</li>
            <li>Kindly keep the font color of your paper as black (excluding figures, charts, tables).</li>
            <li>Kindly provide your names, email addresses and contact numbers in the paper that you submit.</li>
            <li>Last date for submission of paper is 16 th March, 2017. The shortlisted participants will be informed. Those participants will be allowed to present their paper during Synergy. The papers must be submitted to paperpresentation.synergy17@gmail.com</li>
          </ol>
          <h3 class="ui header">Presentation Details</h3>
          <ol class="ui list">
            <li>The presentation time will be 8 minutes + some time for questions and answers as per discretion of the judges.  </li>
            <li>Exceeding of time limit will invoke negative points.</li>
            <li>Please bring your presentation in the form of .ppt or .pdf. Any other form of the file will not be entertained, please bring the file in a pen drive (avoid CD/DVD).</li>
            <li>The participants can include any type of media (pictures, videos) in their presentation, provided they do not show any controversial clips.</li>
            <li>All participants are strongly requested to be present at the venue15 minutes prior to the start of the presentation; once the event has begun the doors of the presentation hall will be closed and further entry will not be allowed. This is a very specific rule to be followed as it was requested by the judges themselves.</li>
            <li>Decision of judges will be final and binding on all participants. Any discussions regarding evaluation process at any stage shall not be entertained. Selected participants for the final round are requested to prepare their presentation in Microsoft PowerPoint format (.ppt) or Printable Document Format (.pdf) only.</li>
          </ol>

          <?php
        }elseif ($event==="waterrocketry") {
          ?>
          <h2 class="ui center aligned ui header">Water Rocketry</h2>
          <h3 class="ui header">Event Format</h3>
          <p>The hydro-rocket event will have two main round/stages for the participant. A team can have a maximum of 3 students. The members can be from different colleges.</p>
          <h3 class="ui header">ROUND 1: Endurance (Time of flight)</h3>
          <p>The water rocket can be launched from launch pad with any suitable angle as per your convenience and would be tested for maximum time of flight.</p>
          <h3 class="ui header">Point distribution for Round 1</h3>
          <ol class="ui list">
            <li>Number of points granted is equal to the time of flight measures in seconds multiplied by 10. (= time of flight in seconds * 10).</li>
            <li>A stopwatch will be used to measure the time of flight. The duration shall include the time when the rocket is launched and until it touches the ground in the first instance. </li>
          </ol>
          <h3 class="ui header">ROUND 2: Range</h3>
          <p>A specific range of the water rocket will be tested in this round. The rocket has to hit a provided target range marked on the ground as concentric circles. The centre of the circles lies at a distance of 50 m from the launch point.</p>
          <h3 class="ui header">Point distribution for Round 2:</h3>
          <ol class="ui list">
            <li>The circular arena is divided into 3 concentric circular regions with radius of 2m, 4m and 6m.</li>
            <li>The inner Region A (radius 2 m) holds 100 points.</li>
            <li>The next Region B (radius 2-4 m) holds 75 points.</li>
            <li>The last Region C (radius 4-6 m) holds 50 points.</li>
            <li>No points will be awarded if the water rocket lands outside the arena.</li>
            <li>The front tip of the water rocket will be considered as the point where the rocket has fallen on the ground. For this round, the position of the rocket once it comes to rest in considered and not the point of first contact with the ground.</li>
          </ol>
          <h3 class="ui header">Model Specifications</h3>
          <ol class="ui list">
            <li>Water Rocket and all of its components should be handmade. Readymade models are strictly not allowed. </li>
            <li>Your model can be of any size or shape and can be made of any material. But, it should not damage the arena or hurt any person. If your model is found dangerous, you will not be allowed to participate in the event.</li>
            <li>The water rocket may contain any of the following mechanisms suitable for different rounds:
              <ol >
                <li>Parachute mechanism</li>
                <li>Gliding (wings type) mechanism</li>
                <li>Booster mechanism: in this case, participants should ensure that they have proper launchers supporting the launching mechanism</li>
                <li>Any other innovative mechanism is encouraged provided that the material and mechanism used is not harmful or dangerous to any person in the field. In this case the decision of organizers will be final and no queries will be entertained in this regard.</li>
                <li>Teams are allowed to use more than one model for different rounds but must maintain the same model during the round. However, it is upon the team to choose what model to use for different rounds according to the mentioned rules.</li>
              </ol>
            </li>
            <li>Use of electrical/electronic components is strictly prohibited. The mechanism should be purely mechanical. </li>
          </ol>
          <h3 class="ui header">Rules</h3>
          <ol class="ui list">
            <li>The participants will be given three trials for round 2 out of which the best will be considered for the final judgment of that round.</li>
            <li>Only water and air can be used as propellants.</li>
            <li>Maximum pressure allowed is 70 psi.</li>
            <li>Air pump will be provided on the spot for pressurizing the water rocket.</li>
            <li>The team will be disqualified in case the bottle bursts while pressurizing and is still mounted on the launcher.</li>
            <li>Participants are allowed to use separate models for round one and two but the same model has to be used throughout a given round.</li>
            <li>Total Points for the Competition is equal to the sum of Round 1 points and Round 2 points.</li>
            <li>In event of any clash of final points a tiebreaker will be held between the concerned teams.</li>
            <li>The clashing teams will have to go through the second round until the points differ.</li>
            <li>The top three teams will be granted certificates and prize money. Criteria: points scored in Round 1 and Round 2.</li>
            <li>Participants are supposed to get their own launching pads which cannot be shared with other teams.</li>
            <li>The decision taken by the judges is final and binding.</li>
          </ol>
          <?php
        }elseif ($event ==="sanrachana") {
          ?>
          <h2 class="ui center aligned header">Sanrachana</h2>
          <p>Synergy presents you Sanrachana, an event where you race against the clock with other teams to make the best model out of the given materials and in the process test your creativity, resourcefulness and innovation.</p>
          <h3 class="ui header">Rules</h3>
          <p>Event will be conducted on Day 1 and 2. The Problem Statement and evaluation criteria will be given on the spot. Maximum of three participants for the team. Sufficient material and time will be given for model making. Teams should submit their models everyday on the same evening. Teams should use only the provided material. Judge’s decision will be final and abiding.</p>
          <p>Participant’s should sit in a given area and work on it to ensures outside materials are not used.</p>

          <?php
        }elseif ($event==="paperplane") {
          ?>
          <h2 class="ui center aligned header">Paper Plane</h2>
          <h3 class="ui header">JUDGING CRITERIA </h3>
          <p>The winners will be determined in the following three disciplines:</p>
          <ol class="ui list">
            <li><b>Longest Airtime</b> :Winner of this category will be the plane (made out of just one sheet of paper) that manages to stay in the air the longest.</li>
            <li><b>Longest Distance</b>:Winner of this category will be the plane (made out of just one sheet of paper) that flies the longest distance between the lift-off and the landing point within the provided Air Space.</li>
            <li><b>Aerobatics</b> :Creativity & style – that is what it takes to make a paper plane fly artistically through the air.</li>
          </ol>
          <p>A jury will determine the winner according to following criteria:</p>
          <ol class="ui list">

            <li>Construction (technical) of the paper plane</li>
            <li>Creativity (art & design)</li>
            <li>Flight performance</li>
          </ol>
          <h3 class="ui header">Rules</h3>
          <ol class="ui list">
            <li>Paper planes must only be constructed out of one A4 piece of paper:(Standard A4 format (297x210mm), not more than 100gms). The sheet must be modified by folding only! No ripping, gluing, cutting, stapling or ballasting is allowed!</li>
            <li>The body of the plane needs to be out of A4 paper but there are no restrictions with regards to paper quality, size and construction technique. Do not use support material for the construction of planes.</li>
            <li>Paper planes have to be built at site in front of the organizers.</li>
            <li>The aircraft must be launched by one person throwing the aircraft unaided from behind a straight launch line marked on the floor. Passing over the launch line leads to an invalid attempt. Touching the launch line or any point beyond during the launch, leads to an invalid attempt. The thrower may move beyond the launch line, after the paper plane hits the ground or any object.</li>
            <li>Two trials per participant are allowed. A participant can handle only one plane.</li>
            <li>Planes are not allowed to be remote controlled nor to use stored energy (battery, etc.)</li>
            <li>Ready-made planes cannot be brought along to the competition.</li>
            <li>There are no limitations with regards to the body style while throwing.</li>
            <li>Each participant has a time slot of 1 minute to perform.</li>
            <li>The decision taken by the event manager is final.</li>
          </ol>

          <?php
        }elseif ($event==="selfpropellingvehicle") {
          ?>
          <h2 class="ui center aligned header">Self Propelling Vehicle</h2>
          <h3 class="ui header">Event Format </h3>
          <ol class="ui list">
            <li><b>Round 1 :</b> The vehicle is to move on a straight track covering a minimum distance of 5m. The top 10 teams qualify for the next round. </li>
            <li><b>Round 2 :</b> In this round, the vehicle is to move through an undulating terrain of mountains and valleys. This round will be a race. The team that finishes first wins.</li>
            <li><b>NOTE :</b> Once you let go of the vehicle from the starting position, you are not allowed to externally apply force by any means.Use of electric/electronic components is NOT permittedThe vehicle must obey lane discipline. Size of lane and ramp angle will be updated soon... Decision of event manager is final. </li>
          </ol>
          <h3 class="ui header"> Rules</h3>
          <ol class="ui list">
            <li>Once you let go of the vehicle from the starting position, you are not allowed to externally apply force by any means.</li>
            <li>Use of electric/electronic components is NOT permitted</li>
            <li>The vehicle must obey lane discipline. Size of lane and ramp angle yet to be decided. </li>
            <li>The maximum dimensions for vehicle is 20x15cm</li>
            <li>Decision of event manager is final. </li>
          </ol>
          <?php
        }elseif ($event==="cadmodelling") {
          ?>
          <h2 class="ui center aligned header">CAD Modelling</h2>
          <h3 class="ui header">Event Format</h3>
          <p>Your task is simple. All you need to do is to solve the given problem statement by unleashing your design skills. Simpler and effective design would have the upper hand in the event. The event consists of two rounds- prelims and finals. </p>
          <ol class="ui list">
            <li>Round 1: A set of 5 subjective questions will be given and the top 10 TEAMS will be selected for the next round. The questions will be based on basic concepts of engineering drawing. A team can have a maximum of two students.</li>
            <li>Round 2: A problem statement will be given challenging your 3-D modeling skills. Your task is to solve it using your design skills. Design is supposed to completed within the given time duration. Time taken and number of features added will be taken into account. The problem statement will be given on the day of the event. (Time Limit - 2 hrs)</li>
          </ol>
          <h3 class="ui header">Rules</h3>
          <ol class="ui list">
            <li>A maximum of two per team is to enroll for this event. The team members can be from different colleges/institutions.</li>
            <li>Any of the following design software can be used in the event: Creo 2.0 parametric, Catia, Solidworks, Pro E. (In case you are using some other software ask the organizers prior to the event).</li>
            <li> No plagiarism encouraged.</li>
            <li> Originality, creativity, clarity of the idea, feasibility of design will be    checked rigorously.</li>
            <li> Decision of the judges will be final.</li>
          </ol>

          <?php
        }elseif ($event==="mcquiz") {
          ?>
          <h2 class="ui center aligned header">McQuiz</h2>
          <p>McQuiz is an offline event. It will be conducted during synergy.</p>
          <?php
        }
        ?>
        <div class="ui center aligned header">
          <button class="ui center aligned primary button" id="event-register">Register</button>
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
      <div class="ui black inverted vertical footer segment" id="footer" >
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
  </div>
  <script src= "js/main_script.js" ></script>
  <script src="js/event-register.js"></script>
</body>

</html>

<?php
}else{
  header("Location: events.php");
}

?>
