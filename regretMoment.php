<?php 
include "config.php";
$sql = "SELECT * FROM `storydata` WHERE Type = 'REGRET'";
$result = $conn->query($sql);
?>

<html>
<head>
    <link rel="stylesheet" href="dash.css">
    <title>Listen Other's</title>
</head>
<body>
<div id="dash">
    <div><nav><a href="index.html">small.talks</a></nav></div>
    <div id="dashInner">
        <div><a href="happyMoment.php">Happy Moment</a></div>
        <div><a href="sadMoment.php">Sad Moment</a></div>
        <div id="regret"><a href="regretMoment.php">Regret</a></div>
        <div><a href="secretMoment.php">Secret</a></div>
    </div>
    <div>
        &nbsp;
    </div>
</div>
 <div id="top">
     <div id="btn"><a href="listen.php">LISTEN &nbsp; OTHER'S</a></div>
     <div id="btn1"><a href="share.html">SHARE &nbsp; YOUR'S</a></div>
 </div>

<div id="scroll" class="example">
        <?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
		?>

        <div id="inner" >
            <div><h2> <?php echo $row['Name']; ?> </h2></div>
            <div> <?php echo $row['Story']; ?> </div>
        </div>
        
        <?php		}
			}
		?>
</div>

</body>
</html>


