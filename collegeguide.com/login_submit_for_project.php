<html>
	<head>
		<title>CONTINUE TO DASHBOARD</title>
		<link rel="stylesheet" href="css/login_submit_for_project.css">
			
	
	</head>
	<body>

		<!--navigation menu-->
		<div class="menudropdown">
		
		<ul>
			<li class><a href="#">HOME</a></li>		
			
			<li class><a href="#">ABOUT</a>
				<ul>
						<li><a href="#">TEAM</a></li>
						<li><a href="#">BODY</a>
						<ul class="inside2">							
							<li ><a href="#">LINK1</a></li>
							<li><a href="#">LINK2</a></li>
						</ul>							
						</li>
						<li><a href="#">LINK1</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>

				</ul>
			</li>
			
			<li class><a href="#">THINGS</a>
				<ul>

						<li><a href="#">things1</a></li>
						<li><a href="#">things2</a></li>
						<li><a href="#">things3</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>
				</ul>
			</li>
		
			<li class><a href="#">CONTACT</a>
				<ul>					
						<li><a href="#">things1</a></li>
						<li><a href="#">things2</a></li>
						<li><a href="#">things3</a></li>
						<li><a href="#">LINK2</a></li>
						<li><a href="#">LINK3</a></li>
				</ul>
			</li>
		</ul>	
		
		
		</div>
		<div class="admin">
			<a href="admin_login.html"><span>ADMIN LOGIN</span></a>	
		</div>	
		
		<!--navigation menu ends here-->
		
		<!--php code starts here-->
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
    
    		$emails=$_POST["email"];
    		$passwords=$_POST["password"];
    
    		$sql = "SELECT * from users_details";
    		$result = mysqli_query($conn, $sql);

    		if (!$result) {
       		die(mysqli_error($conn));
    		}

			?>
			<div class="wrapper">
				<div class="part">
					<img src="https://www.shareicon.net/data/512x512/2015/11/26/678050_users_512x512.png">
					
				</div>
				<p>
					<?php    		
    				while ($row=mysqli_fetch_array($result)) {
        				if ($row['email']==$emails && $row['password']==$passwords){
        					$_SESSION['name']=$row['full_name'];
        					$_SESSION['registered_course']=$row['course'];
        					$_SESSION['registered_specialization']=$row['specialization'];
        					$_SESSION['registered_city']=$row['user_city'];
        					$_SESSION['registered_state1']=$row['state1'];
        					$_SESSION['registered_state2']=$row['state2'];
        					echo "<br>"."<br>"."WELCOME AGAIN"."<br>"."<br>";           					
           				echo "Hello!!"."&nbsp".$row['full_name'];
       					break;
          			}
    				} 
    
    				if($row==NULL){
        				echo "SORRY !!"."<br>"."login ! FAILED!";
    				} 
    				mysqli_close($conn);
					?>
				</p>
				<a href="logged_user_dashboard.php"><button class="btnsub">GO TO DASHBOARD</button></a>
			</div>
	</body>
</html>
