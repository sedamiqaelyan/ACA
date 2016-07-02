<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  define("ITEMS_PER_PAGE",3);
    $users =[
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],
        ["first"=>"seda","lastname"=>"miqaelyan"],

    ];
  $currentPage=1;
  if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
  }
  $totalPageCounet=ceil(count($users)/ITEMS_PER_PAGE);

  $start=($page-1)* ITEMS_PER_PAGE;
  $limit=ITEMS_PER_PAGE;

  if($start+$limit > count($users)) {
    $limit=count($users)-$start;
  }
  //$start=$_GET['start'];
  //$limit=$_GET['limit'];
 /* if(!($start+$limit<=count($users))) {
    echo "not valid";
    die;
  }
  if($start<1) {
    echo "not valid";
    die;
  }*/

  ?>
    <table border="1">
      <thead>
        <th>First Name</th>
        <th>Last Name</th>
      </thead>
      <tbody>
      <?php
        for($i=$start;$i<$start+$limit;$i++) {
            echo "<tr>";
            echo "<td>".$users[$i]["first"]."</td>";
            echo "<td>".$users[$i]["lastname"]."</td>";
            echo "</tr>";

        }
      ?>
      </tbody>
    </table>
  <?php
    for($i=1;$i<=$totalPageCounet;$i++) {
      $style='';
      if($i==$currentPage) {
        $style="font-weight:bold;";
      }
        echo '<a href="http://localhost/day16/Arrays.php/page=' . $i . '" style="' . $style .'">' . $i . '</a>';
    }
  ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>