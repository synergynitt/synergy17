<?php
require 'functions.php';
require 'connect.php';
$download=$_GET['download'];

if ($download==='workshops'){
  header('Content-type: text/csv');
  header('Content-Disposition: attachment; filename="workshops.csv"');
  header('Pragma: no-cache');
  header('Expires: 0');
  $file = fopen('php://output', 'w');
  $sql = "SELECT `workshop`, `userid`, `member1name`, `member1email`, `college`, `city`, `department`, `year`, `member2name`, `member3name`, `member4name` , `member5name`, `member2email`, `member3email`, `member4email`, `member5email` FROM `workshop-registration` LEFT JOIN `users` ON  `workshop-registration`.`member1email` =  `users`.`email` ORDER BY `workshop`, `userid`";
  $row = array("workshop", "userid", "member1name", "member1email", "college", "city", "department", "year", "member2name", "member3name", "member4name" , "member5name", "member2email", "member3email", "member4email", "member5email");
  fputcsv($file, $row);

  $result = executeQuery($db, $sql);
  while ($row = $result->fetch_assoc()){
        fputcsv($file, $row);
    }
}else if ($download ==='events'){
  header('Content-type: text/csv');
  header('Content-Disposition: attachment; filename="events.csv"');
  header('Pragma: no-cache');
  header('Expires: 0');
  $file = fopen('php://output', 'w');
  $sql = "SELECT `event`, `userid`, `member1name`, `member1email`, `college`, `city`, `department`, `year`, `member2name`, `member3name`, `member4name` , `member5name`, `member2email`, `member3email`, `member4email`, `member5email` FROM `event-registration` LEFT JOIN `users` ON  `event-registration`.`member1email` =  `users`.`email` ORDER BY `event`, `userid`";
  $row = array("event", "userid", "member1name", "member1email", "college", "city", "department", "year", "member2name", "member3name", "member4name" , "member5name", "member2email", "member3email", "member4email", "member5email");
  fputcsv($file, $row);

  $result = executeQuery($db, $sql);
  while ($row = $result->fetch_assoc()){
        fputcsv($file, $row);
    }
}else if ($download==='accomodation'){
  header('Content-type: text/csv');
  header('Content-Disposition: attachment; filename="accomodation.csv"');
  header('Pragma: no-cache');
  header('Expires: 0');
  $file = fopen('php://output', 'w');
  $sql = "SELECT  `users`.`userid`, `users`.`name`, `users`.`email`, `users`.`college`, `users`.`city`, `users`.`department`, `users`.`year` FROM `accomodation` LEFT JOIN `users` ON  `accomodation`.`email` =  `users`.`email` ORDER BY  `userid`";
  $row = array("userid", "name", "email", "college", "city", "department", "year" );
  fputcsv($file, $row);
  $result = executeQuery($db, $sql);
  while ($row = $result->fetch_assoc()){
        fputcsv($file, $row);
    }
}else{
  ?>

  <html>
  <head>
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />

    <title> Synergy 2017 | Admin </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet"/>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js" ></script>

  </head>
  <body>
    <div class="ui large green inverted fixed menu sticky-menu">
        <div class="ui  workshops dropdown item">
          Workshops <i class="dropdown icon"></i>
          <div class="menu">
            <?php
            foreach ($workshops as $workshopcode => $workshop) {
              ?>
              <a class="item" href="#<?php echo $workshopcode;?>"><?php     echo $workshop[0];?></a>
              <?php
            } ?>
          </div>
        </div>
        <div class="ui  events dropdown item">
          Events <i class="dropdown icon"></i>
          <div class="menu">
            <?php
            foreach ($events as $evnetcode => $event) {
              ?>
              <a class="item"href="#<?php echo $evnetcode;?>"><?php echo $event[0];?></a>
              <?php
            } ?>

          </div>
        </div>
        <a class="ui item" href="#accomodation">Accomodation</a>
      </div>

    <div class="main-contents">
      <h1 class="ui center aligned header">
        Workshops
        <a href = "4cbe59a0e5f685fd48160888c568beab.php?download=workshops"> <i class="green download icon"></i></a>
      </h1>
      <?php
      foreach ($workshops as $workshopcode => $workshop) {
        $sql = "SELECT *  FROM  `workshop-registration`  LEFT JOIN `users` ON  `workshop-registration`.`member1email` =  `users`.`email`   WHERE  `workshop-registration`.`workshop` =  '$workshopcode'";
        $result = executeQuery($db, $sql);
        ?>
        <a name="<?php echo $workshopcode?>">

          <div class="ui basic segment">

            <?php
            if ($result->num_rows == 0){
              ?>
              <h3 class="ui header"><?php     echo $workshop[0]; ?></h3>
              <h4> No Registrations </h4>
            </div>
          </a>
            <div class="ui divider">
            </div>
            <?php
            continue;
          }else{
            ?>
            <h3 class="ui header"><?php     echo $workshop[0]; ?> (Total Registrations: <?php echo $result->num_rows; ?>)</h3>
            <?php
          }
          ?>
          <table class="ui unstackable fixed single line celled striped table">
            <thead>
              <tr>
                <th colspan="8">Member 1</th>
                <?php
                for ($i=2;$i<=$workshop[1];$i++){
                  echo "<th colspan='2'> Member $i </th>";
                }
                ?>
              </tr>
              <tr>
                <th>Synergy ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>College</th>
                <th>Department</th>
                <th>Year</th>
                <th>City</th>
                <?php
                for ($i=2;$i<=$workshop[1];$i++){
                  echo "<th>Name</th>";
                  echo "<th>Email</th>";
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = $result->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $row['userid'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['college'];?></td>
                  <td><?php echo $row['department'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['city'];?></td>
                  <?php
                  for ($j=2;$j<=$workshop[1];$j++){
                    $membername = 'member'.$j.'name';
                    $memberemail = 'member'.$j.'email';
                    ?>
                    <td> <?php echo $row[$membername];?> </td>
                    <td> <?php echo $row[$memberemail];?> </td>
                    <?php
                  }
                  ?>

                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        </a>
        <div class="ui divider">
        </div>
        <?php
      }
      ?>
      <h1 class="ui center aligned header">
        Events
        <a href = "4cbe59a0e5f685fd48160888c568beab.php?download=events"> <i class="green download icon"></i>
        </a>
      </h1>
      <?php
      foreach ($events as $eventcode => $event) {
        $sql = "SELECT *  FROM  `event-registration`  LEFT JOIN `users` ON  `event-registration`.`member1email` =  `users`.`email`   WHERE  `event-registration`.`event` =  '$eventcode'";
        $result = executeQuery($db, $sql);
        ?>
        <a name="<?php echo $eventcode?>">

          <div class="ui basic segment">

            <?php
            if ($result->num_rows == 0){
              ?>
              <h3 class="ui header"><?php     echo $event[0]; ?></h3>
              <h4> No Registrations </h4>
            </div></a>
            <div class="ui divider">
            </div>
            <?php
            continue;
          }else{
            ?>
            <h3 class="ui header"><?php     echo $event[0]; ?> (Total Registrations: <?php echo $result->num_rows; ?>)</h3>
            <?php
          }
          ?>
          <table class="ui unstackable fixed single line celled striped table">
            <thead>
              <tr>
                <th colspan="8">Member 1</th>
                <?php
                for ($i=2;$i<=$event[1];$i++){
                  echo "<th colspan='2'> Member $i </th>";
                }
                ?>
              </tr>
              <tr>
                <th>Synergy ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>College</th>
                <th>Department</th>
                <th>Year</th>
                <th>City</th>
                <?php
                for ($i=2;$i<=$event[1];$i++){
                  echo "<th>Name</th>";
                  echo "<th>Email</th>";
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = $result->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $row['userid'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['college'];?></td>
                  <td><?php echo $row['department'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['city'];?></td>
                  <?php
                  for ($j=2;$j<=$event[1];$j++){
                    $membername = 'member'.$j.'name';
                    $memberemail = 'member'.$j.'email';
                    ?>
                    <td> <?php echo $row[$membername];?> </td>
                    <td> <?php echo $row[$memberemail];?> </td>
                    <?php
                  }
                  ?>

                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        </a>
        <div class="ui divider">
        </div>
      <?php
      }
      ?>

          <h1 class="ui center aligned black header">
            <div class="content">Accomodation</div>
            <a href = "4cbe59a0e5f685fd48160888c568beab.php?download=accomodation"> <i class="green download icon"></i>
            </a>
          </h1>
          <a name="accomodation">
            <div class="ui basic segment">
          <?php
          $sql = "SELECT *  FROM  `accomodation`  LEFT JOIN `users` ON `accomodation`.`email` =  `users`.`email`";
          $result = executeQuery($db, $sql);
          ?>


          <h3 class="ui header">Total Registrations: <?php echo $result->num_rows; ?></h3>
          <table class="ui unstackable fixed single line celled striped table">
            <thead>
              <tr>
                <th>Synergy ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>College</th>
                <th>Department</th>
                <th>Year</th>
                <th>City</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while($row = $result->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $row['userid'];?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['college'];?></td>
                  <td><?php echo $row['department'];?></td>
                  <td><?php echo $row['year'];?></td>
                  <td><?php echo $row['city'];?></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </a>
      <div class="ui divider">
      </div>

    <script>
      $('.workshops.dropdown').dropdown()   ;
      $('.events.dropdown').dropdown()   ;
      $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top-100
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>
  </html>

  <?php
}

?>
