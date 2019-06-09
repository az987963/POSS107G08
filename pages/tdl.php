<?php 
// if no user login, 404
if ( !isset($_SESSION['username']) ) {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}

$today = date("Y-m-d");

?>

<!DOCTYPE html>
<head>
    <title>To Do List</title>
    <!-- fonts cdns put below this tag -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Sahitya' rel='stylesheet'>

    <!-- pleas put all the .css file link below this tag-->
    <link rel="stylesheet" href="/css/tdl.css">

</head>
<body>
<header>
<div class="container">
        <img src="https://drive.google.com/thumbnail?id=14A-oheFQ2r8PRUnuVRQH5-K2r2ypNPt4" alt="logo" class="logo" width="65px">
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="tdl.html">Home</a></li>
				<li><a href="https://github.com/TKUIITFCChang/POSS107G08">Contact Us</a></li>
                <li><a href="logout.html">Log out</a></li>
            </ul>
        </nav>
    </div>
</header>
	<div id="date"><br>
		<input type='date' id='hasta' value='<?php echo $today; ?>' class='textbox'>
	</div>
	<div class="container">
		<div class="header">
			<div class="add-to-do">
				<p class="fas fa-plus-circle"></p>
				<input type="text" id="input" placeholder="Add a to-do" autocomplete="off" autofocus>
			</div>
		</div>
	</div>
</body><br>
<div>
	<a href="logout.html">
		<input type="button" value="Log Out">
	</a>
</div>