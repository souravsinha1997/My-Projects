<?php
		
    $hostname = "localhost";
    $username = "root";
    $password = "sql123";
    $database = "PROJECT_COLLEGE";
    
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $college_state=$_POST["state"];
    $courses=$_POST["course"];
    $college_name=$_POST["name"];
    
    if(isset($college_state) && empty($courses) && empty($college_name)) {
	    $sql = "SELECT * from college_details WHERE college_states='$college_state'";
   	 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
		}
		
	if(isset($courses) && empty($college_state) && empty($college_name)){
		$sql="SELECT * FROM college_details WHERE course_offered='$courses'";	
			 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
	}
	
	if(isset($college_name) && empty($college_state) && empty($courses)){
		$sql="SELECT * FROM college_details WHERE college_names='$college_name'";	
			 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
	}

	if(isset($college_name) && isset($college_state) && isset($courses)){
			$sql="SELECT * FROM college_details WHERE college_names='$college_name' AND college_states='$college_state' AND course_offered='$courses'";	
			 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
	}
	if(isset($college_state) && isset($courses)){
			$sql="SELECT * FROM college_details WHERE college_states='$college_state' AND course_offered='$courses'";	
			 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
	}
	if(isset($college_state) && isset($college_name)){
			$sql="SELECT * FROM college_details WHERE college_states='$college_state' AND college_names='$college_name'";	
			 $result = mysqli_query($conn, $sql);

  		 if (!$result) {
      	  die(mysqli_error($conn));
     	}
		 while ($row=mysqli_fetch_array($result)) {
			echo $row['college_states']."&nbsp".$row['college_names']."&nbsp".$row['course_offered']."&nbsp".$row['departments']."<br>";     
        }
	}
	 if(empty($college_state) && empty($courses) && empty($college_name)) {
			echo "COLLEGE NOT FOUND"."<br>";
			
			echo "SELECT ATLEAST ONE CATEGORY TO SEARCH";
	}




    
         	
    mysqli_close($conn);
?>

