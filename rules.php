<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User_Panel</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="row navbar navbar-fixed-top" style="background-color: blue; height: 100px; opacity: 0.7">
		<div class="col-md-1 col-md-offset-1 ">
			<a href="userpanel.php"><img src="images/icon.gif" alt="" height="85px"></a>
		</div>
		<div class="col-md-8" >
			<h1 class="lead" align="center" style="color: white;"><u><b>BOCA JUNIOR FOOTBALL CLUB</b></u></h1><p align="center" class="lead" style="color: white;">(Rules)</p>
		</div>
		<div class="col-md-2">
		<a href="logout.php"><img src="images/logout.gif" height="45px" style="margin-top:25px; margin-left:60px"></a>
		</div>
	</div>

	<div class="row" style="margin-top: 140px;">
		<div class="col-md-2">
			<div class="list-group">
				<a href="userprofile.php" class="list-group-item list-group-item-info">Profile</a>
				<a href="viewpayroll.php" class="list-group-item list-group-item-info">View Payroll</a>
				<a href="viewclaim.php" class="list-group-item list-group-item-info">View Claim</a>
				<a href="rules.php" class="list-group-item list-group-item-info">View Football Rules</a>

				<a href="tutorial.php" class="list-group-item list-group-item-info">View Football Tutorials</a>
			</div>
		</div>
		<div class="col-md-7 well">
      <h4 class="lead" align="center"><u><b>Football Rules</b></u><h4>
        <div align="center"><img src="images/rules.gif" alt="Match Map"/></div>
        <h5 class="lead">Soccer rule 1: Field of Play</h5>
        <p>
          The field of play must be between 90 and 120 meters long (100-131 yards) and between 45 to 90 meters wide (49-98 yards). In international games, the football field dimensions are 100-110 meters (109-120 yards) and 64-75 meters (70-82 yards).
          The following areas of the football field must be marked: touchlines/sidelines, goal lines & goal areas, halfway line, center circle, penalty areas, arcs, & spots, and corner arcs. A flag post should be planted on each corner of the field.
        </p>

        <h5 class="lead">Soccer rule 2: The Ball</h5>
        <p>
          The soccer ball’s diameter must be 8.6 to 9 inches (22 to 23 cm) and must weigh 14 to 16 oz (400 to 450 grams). If it bursts while in play, the game is stopped and resumed by the referee dropping the ball between two players from opposing sides.
        </p>
        <h5 class="lead">Soccer rule 3: Number of players</h5>
        <p>
          A football match is played by two teams of no more than eleven players each, with one player per side playing a goalkeeper. The minimum number of players in a soccer team is seven. A match is not started or continued if there are less than seven players in a team. In official football competitions, the maximum number of substitutions is three. However, in friendly tournaments, there can be as many as six or unlimited substitutions, depending on what each side have agreed on together with the referee.
        </p>
        <h5 class="lead">Soccer rule 4: Player’s equipment</h5>
        <p>
          The following soccer equipments are required of each player: a shirt, shorts, socks, shin guards, and football boots. Goalkeepers from both sides should wear a kit that will distinguish them from the outfield players and the referees. Players are allowed to wear head gears but are discouraged from wearing most forms of jewelry.
        </p>
        <h5 class="lead">Soccer rule 5: Head referee</h5>
        <p>
          The duties and responsibilities of the head referee in soccer include: ensuring that players wear the proper strip and equipment, signaling the start and end of game, citing and punishing violations of rules, stopping play if a player requires medical attention, deciding whether or not to continue a game, and keeping time.
          The referee cites fouls and infringement of the rules and prevents repeated occurrences of unsportsmanlike conduct by cautioning players with a yellow card or sending them off with a red card. Two yellow cards in football is equivalent to a red card. A player who receives a red card in football cannot be replaced so his team must continue the game with one man less.
        </p>
		</div>
		<div class="col-md-3 well">
			<div class="alert alert-info">
				<h6 align="center"><u>Notifications</u></h6>
				<marquee behavior="" direction="up">

				</marquee>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 navbar navbar-fixed-bottom" style="background-color: blue; height: 20px; opacity: 0.7">

		</div>
	</div>


	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
