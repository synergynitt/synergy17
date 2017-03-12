<html>
<head>
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <title> Synergy 2017</title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" rel="stylesheet" />

  <link href="css/style.css" rel="stylesheet"/>
  <link rel="stylesheet" href="./css/animation.css">

  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js" ></script>

</head>

<body style="background:#1b1c1d">
  <div class="ui sidebar vertical menu">
    <a class="ui item" class="index.php">
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
    <a class="item" id="hospitality-verticalmenu" >
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

  <div class="pusher ui" style="background:#1b1c1d">
    <div class="ui container computer only grid">
      <div class="ui secondary borderless fixed menu sticky-header">
        <div class="left menu">
          <a class="view-ui item">
            <i class="sidebar icon"></i>
          </a>
          <div class="ui item">
            <img class="ui mini image" src="images/synergy_logo.jpg" >
          </div>
          <div class="ui item">      <h1 class="ui header" style="text-align:center">Synergy 2017</h1></div>

        </div>

        <div class="right menu">
          <div class="ui item" id = "welcome-text" style="text-transform:capitalize">Hello User</div>
          <a class="ui item" id = "accomodation-register" >Stay with us</a>
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
            Synergy 2017
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

    <div class="ui basic center aligned inverted segment">
      <!-- <img class="ui medium image" src="images/synergy_logo.jpg" > -->

      <div class="gear-animation">
        <div class="small top gear"><img src="images/gear_small.png"></div>
        <div class="big gear"><img src="images/gear_big.png"></div>
        <div class="small left gear"><img src="images/gear_small.png"></div>
        <div class="small right gear"><img src="images/gear_small.png"></div>
      </div>
      <h2 class="ui header" style="color:#ebed35">March 17-19th</h2>
      <div class="ui big horizontal divided inverted list">
        <div class="item">
          <a class="header" href="events.php">Events</a>
        </div>
        <div class="item">
          <a class="header" href="workshops.php">Workshops</a>
        </div>
        <div class="item">
          <a class="header" href="team.php">Team</a>
        </div>
        <div class="item">
          <a class="header" href="about.php">About</a>
        </div>
      </div>

      <button class="ui primary basic green button" id="synergy-register">Register</button>
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
      <div class="ui blue basic  button" id="login-register">
        Register
      </div>
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

  <div class="ui small modal" id="register-modal">

    <div class="ui icon green header" style="width:100%;position:relative;">
      <h2>Register</h2>
    </div>
    <div class="content">
      <p>
        <form class="ui form" id="register-form">

          <div class="field">
            <p>Name</p>
            <div class="two fields">
              <div class="field">
                <input type="text" name="first-name" placeholder="First Name">
              </div>
              <div class="field">
                <input type="text" name="last-name" placeholder="Last Name">
              </div>
            </div>

          </div>
          <div class="field">
            <p>Email</p>
            <input placeholder="E-Mail" name="email" type="email">
          </div>
          <div class="field">
            <p>Password</p>
            <div class="two fields">
              <div class="field">
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="field">
                <input type="password" name="confirm-password" placeholder="Confirm Password">
              </div>
            </div>

          </div>

          <div class="field">
            <p>College</p>
            <input type="text" name="college" placeholder="College">
          </div>
          <div class="field">
            <div class="two fields">
              <div class="field">
                <p>Department</p>
                <input type="text" name="department" placeholder="Department">
              </div>
              <div class="field">
                <p>Year of study</p>
                <input type="text" name="year" placeholder="Year of study">
              </div>
            </div>
          </div>
          <div class="field">
            <p>City</p>
            <input type="text" name="city" placeholder="City">
          </div>
          <div class="field">
            <div class="two fields">
              <div class="field">
                <p>Phone Number</p>
                <input type="text" name="phone" placeholder="Phone Number">
              </div>
              <div class="field">
                <p>Roll Number</p>
                <input type="text" name="rollno" placeholder="Roll Number">
              </div>
            </div>
          </div>
          <div class="ui success message" id="registerSuccessLabel">
            <div class="header">Success!</div>
            <p></p>
          </div>
          <div class="ui error message" id="registerFailedLabel">
            <div class="header">Registration Failed</div>
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
        Register
      </div>
    </div>

  </div>

  <div class="ui small modal" id="accomodation-modal">

    <div class="ui icon green header" style="width:100%;position:relative;">
      <h2>Hospitality Registration</h2>
    </div>
    <div class="content">
      <div class="ui warning message">
        <p>Registration Fees – Rs.200</p>
        <p>The fees will be collected at the PR Desk</p>
        <p>For Accomodation </p>
        <ol class="ui list">
          <li>Beds will be allotted to students based on availability.</li>
          <li>The cost per day is Rs. 200 which will be collected at the PR Desk in the mechanical engineering department.</li>
          <li>A caution deposit of Rs. 300 will be collected for accommodation, of which Rs.100 will be refunded after the fest.</li>
          <li>A hospitality kit will be provided to every student registering for accommodation</li>
          <li>In the case of any damage to the services provided, the caution deposit will not be refunded</li>
        </ol>
        <p> For any clarificaitons contact:</p>
        <div class="ui list">
          <p>Pratheek Denny:
            <i class="green icon whatsapp "></i>
            <a href="tel:+918489570540"><i class="green icon phone"></i>+91 8489570540</a>,
            <a href="tel:+917012204345"><i class="green icon phone"></i>+91 7012204345</a>
          </p>
          <p>V Prashanth: <i class="green icon whatsapp"></i> <a href="tel:+919445809446"><i class="green icon phone"></i>+91 9445809446</a></p>
        </div>
      </div>
      <p>
        <form class="ui form" id="accomodation-form">


          <div class="ui success message" id="accomodationRegisterSuccessLabel">
            <div class="header">Registered for Accomodation </div>
            <p></p>
          </div>
          <div class="ui error message" id="accomodationRegisterFailedLabel">
            <div class="header">Registration for accomodation failed </div>
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
        Register
      </div>
    </div>

  </div>



  <script src= "js/main_script.js" ></script>
  <script src= "js/register.js" ></script>
  <script src= "js/accomodation-register.js" ></script>
</body>

</html>
