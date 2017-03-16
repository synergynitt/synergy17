<?php
require 'functions.php';
?>
<html>
<head>
  <title> Synergy 2017 | Team</title>
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
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

    <a class="item" href="schedule.xlsx" >
      <div class="left aligned ui basic segment">
      <i class="green calendar icon"></i>

      Schedule
    </div>
    </a>
  </div>

  <div class="ui pusher">
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
              <p class="section">Team</p>
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
            Team
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

    <div class=" ui basic center aligned container main-contents">

      <div class="ui basic center aligned segment">
        <div class="ui five doubling  link cards container">
          <div class="card">
            <div class="image">
              <img src="images/team/chendur.jpg">
            </div>
            <div class="content">
              <div class="header">Chendur Singaram</div>
              <div class="description">
                Chairman
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919790933882">
                  <i class="phone icon"></i>
                  +91 9790933882
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/srikumar.jpg">
            </div>
            <div class="content">
              <div class="header">Srikumar M	</div>
              <div class="description">
                Overall Coordinator
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919884849033">
                  <i class="phone icon"></i>
                  +91 9884849033
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/chakka.jpg">
            </div>
            <div class="content">
              <div class="header">Nikhil Chakka	</div>
              <div class="description">
                Treasurer
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919445692035">
                  <i class="phone icon"></i>
                  +91 9445692035
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/aviroop.jpg">
            </div>
            <div class="content">
              <div class="header">Aviroop Ghosal	</div>
              <div class="description">
                Vice President
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+91875306008">
                  <i class="phone icon"></i>
                  +91 875306008
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/raj.jpg">
            </div>
            <div class="content">
              <div class="header">Raj Srinivas		</div>
              <div class="description">
                Head, Organising
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919566061021">
                  <i class="phone icon"></i>
                  +91 9566061021
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/karthikeyan.jpg">
            </div>
            <div class="content">
              <div class="header">Karthikeyan R	</div>
              <div class="description">
                Head, Marketing
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919566040287">
                  <i class="phone icon"></i>
                  +91 9566040287
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/bhargav.jpg">
            </div>
            <div class="content">
              <div class="header">Bhargav Chebrolu		</div>
              <div class="description">
                Head, Content
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919994839822">
                  <i class="phone icon"></i>
                  +91 9994839822
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/pratheek.jpg">
            </div>
            <div class="content">
              <div class="header">Pratheek Denny	</div>
              <div class="description">
                Head, PR and Hospitality
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+918489570540">
                  <i class="phone icon"></i>
                  +91 8489570540
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/sb.jpg">
            </div>
            <div class="content">
              <div class="header">Saravana Balaji		</div>
              <div class="description">
                Head, Workshops
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+918220396645">
                  <i class="phone icon"></i>
                  +91 8220396645
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/sssganesh.jpg">
            </div>
            <div class="content">
              <div class="header">SSS Ganesh		</div>
              <div class="description">
                Head, Events
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+918754307892">
                  <i class="phone icon"></i>
                  +91 8754307892
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/gupta.jpg">
            </div>
            <div class="content">
              <div class="header">Subham Gupta	</div>
              <div class="description">
                Head, Techincal
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919025984311">

                  <i class="phone icon"></i>
                  +91 9025984311
                </a>
              </span>
            </div>
          </div>
          <div class="card">
            <div class="image">
              <img src="images/team/rizwan.jpg">
            </div>
            <div class="content">
              <div class="header">Rizwan H	</div>
              <div class="description">
                Head, Web Ops
              </div>
            </div>
            <div class="extra content">
              <span>
                <a href="tel:+919994289772">

                  <i class="phone icon"></i>
                  +91 9994289772
                </a>
              </span>
            </div>
          </div>

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
        <form class="ui form" id="login-form" method='post'>

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
</body>

</html>
