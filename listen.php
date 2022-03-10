<?php 
include "config.php";
$sql = "SELECT * FROM `storydata`";
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
        <div><a href="regretMoment.php">Regret</a></div>
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
            <div> <input type="text" id="type" value="<?php echo $row['Type']; ?>">  </div>
        </div>
        
        <?php		}
			}
		?>
</div>

<script>
    let type = document.getElementById('type').value;
    let box = document.getElementById('inner');
    console.log(type);
    function call(){
        if(type == 'HAPPY'){
            console.log("Happy_Manoj");
            box.style.backgroundColor="#ccc";
        }
        else if(type =='SAD'){
            box.style.backgroundColor="#555";
        }
        else if(type =='REGRET'){
            box.style.backgroundColor="#111";
        }
        else{
            box.style.backgroundColor="#fff";
        }
    }
</script>


</body>
</html>


