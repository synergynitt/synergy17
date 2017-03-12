<?php
require 'functions.php';
require 'connect.php';
session_start();
if (isset($_SESSION['userid'])){
  $email = $_SESSION['email'];
?>
<html>
<head>
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />

  <title> Synergy 2017 | Registrations</title>
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
              <p class="section">Profile</p>
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

    <div class="main-contents"  style="margin-top:150px;">
      <h2 class="ui center aligned header">Your Registrations</h2>
      <div class="ui basic segment">
        <h3 class="ui left aliged header">Workshops</h3>
        <?php
        $sql = "SELECT `workshop`, `member1name`, `member1email`,  `member2name`, `member3name`, `member4name` , `member5name`, `member2email`, `member3email`, `member4email`, `member5email` FROM `workshop-registration` WHERE `member1email`='$email'";
        $row = array("Workshop", "Member 1 Name", "Member 1 Email", "Member 2 Name", "Member 3 Name", "Member 4 Name" , "Member 5 Name", "Member 2 Email", "Member 3 Email", "Member 4 Email", "Member 5 Email");
        $result = executeQuery($db, $sql);
        ?>
        <h4 class="ui header">No of workshops registered for: <?php echo $result->num_rows;?> </h4>

        <table class="ui unstackable fixed single line celled striped table">
          <thead>
            <tr>
              <?php
              foreach ($row as $key => $value) {
                ?>
                <th><?php echo $value; ?></th>
                <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = $result->fetch_assoc()){
              echo "<tr>";
              foreach ($row as $key => $value) {
                ?>
                <td><?php echo $value; ?></td>
                <?php
              }
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>

      </div>
      <div class="ui basic segment">
        <h3 class="ui left aliged header">Events</h3>
        <?php
        $sql = "SELECT `event`, `member1name`, `member1email`,  `member2name`, `member3name`, `member4name` , `member5name`, `member2email`, `member3email`, `member4email`, `member5email` FROM `event-registration` WHERE `member1email`='$email'";
        $row = array("Event","Member 1 Name", "Member 1 Email", "Member 2 Name", "Member 3 Name", "Member 4 Name" , "Member 5 Name", "Member 2 Email", "Member 3 Email", "Member 4 Email", "Member 5 Email");
        $result = executeQuery($db, $sql);
        ?>
        <h4 class="ui header">No of events registered for: <?php echo $result->num_rows;?> </h4>

        <table class="ui unstackable fixed single line celled striped table">
          <thead>
            <tr>
              <?php
              foreach ($row as $key => $value) {
                ?>
                <th><?php echo $value; ?></th>
                <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = $result->fetch_assoc()){
              echo "<tr>";
              foreach ($row as $key => $value) {
                ?>
                <td><?php echo $value; ?></td>
                <?php
              }
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="ui basic segment">
        <h3 class="ui header">Accomodation</h3>
        <h4 class="ui header">
          <?php
          $sql = "SELECT * FROM `accomodation` WHERE `email`='$email'";
          $result = executeQuery($db, $sql);
          if ($result->num_rows==0){
            echo "You have not registered for accomodation";
          }else{
            echo "You have registered for accomodation";
          }
          ?>
        </h4>
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
      </div>
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
<?php
}else{
  header('Location: index.php');
} ?>
