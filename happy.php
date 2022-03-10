<?php 

include "config.php";

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
        $story = $_POST['story'];
        $type = $_POST['h'];
          
		
		$sql = "INSERT INTO `storydata` (`Name`,`Story`,`Type`) VALUES ('$name','$story','$type')";
    
	     
        $result = $conn->query($sql);


        if($result == TRUE ){
          header('location: listen.php');
        }
        else{
            echo "<h2> 404 - PAGE NOT FOUND </h2>";
        }
		
		$conn->close();
	}

?>