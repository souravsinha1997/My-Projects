<html>
	<head>
		<title> WELCOME TO YOUR DASHBOARD</title>
		<link rel="stylesheet" href="css/logged_user_dashboard.css">
	</head>
	<body>
			<!--navigation menu-->
		<div class="menudropdown">
		
		<ul>
			<li class><a href="homepage_for_project.html">HOME</a></li>		
			
			
			<li class><a href="#">SEARCH COLLEGE</a>
				<ul>

						<li><a href="college_search_testinphp.php">SEARCH</a></li>
				</ul>
			</li>
		
		</ul>		
		
		</div>
		<!--navigation menu ends here-->
		
		<?php
			session_start();
			$hostname = "localhost";
    		$username = "root";
    		$password = "sourav05";
    		$database = "PROJECT_COLLEGE";
    
    		$conn = mysqli_connect($hostname, $username, $password, $database);
    		if (!$conn) {
        		die("Connection failed: " . mysqli_connect_error());
    		}
    		$var_course=$_SESSION['registered_course'];
    		$var_specialization=$_SESSION['registered_specialization'];
    		$var_city=$_SESSION['registered_city'];
    		$var_state1=$_SESSION['registered_state1'];
    		$var_state2=$_SESSION['registered_state2'];
    		
    		
    		$sql="SELECT * FROM college_details WHERE course_offered='$var_course'";
    		$result = mysqli_query($conn,$sql);
			if (!$result) {
   			die(mysqli_error($conn));
    		}
    		else if($result)
    			echo "Connected to database";
    			
			?>
			<div class="list">
			<?php			
			while ($row=mysqli_fetch_array($result)) {
				echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";   
        	} 
        	?>
        	</div>  		
    		
    		<div class="sidebar">
				<div class="wrapiconandname">				
					<img src="https://cdn1.iconfinder.com/data/icons/rcons-user-action/512/user-512.png">
					<?php
						if(isset($_SESSION['name'])){
							?><p><?php echo $_SESSION['name']."<br>";?></p>
				</div>
				<div class="details">	
					<?php
						echo "COURSE:".$_SESSION['registered_course']."<br>"."<br>";	
						echo "SPECIALIZATION:"."&nbsp".$_SESSION['registered_specialization']."<br>"."<br>";
						echo "CITY:".$_SESSION['registered_city']."<br>"."<br>";	
						echo "STATE PREF 1:".$_SESSION['registered_state1']."<br>"."<br>";
						echo "STATE PREF 2:".$_SESSION['registered_state2']."<br>"."<br>";	
					}
					else 
						echo"session unset";
					?>
				</div>
			</div>
	</body>
</html>
