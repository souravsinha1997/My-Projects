<?php
		
    $hostname = "localhost";
    $username = "root";
    $password = "sourav05";
    $database = "PROJECT_COLLEGE";
    
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
    }
?>

<html>
	<head>
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;		
				
			 }	
			 body{
				padding-left: 0px;
				background-color:white;	
				background-image: url(https://www.digitalplatforms.co.za/wp-content/uploads/2015/11/Website-Design-Background.png);			 
			 }	
			 p{
				
				top:110px;				
				margin: 10px;
				width: 95%;
				float: left;
				background-color: white;
				color:rgb(40, 180, 99);		
				box-shadow: 9px 10px 12px rgb( 100, 149, 237 );	
				transition-duration: 2s;
				transition-property: transform; 
				transition-timing-function: ease-in;
			 
			 }	
			 p:hover{
				transform:scale(1.05,1.5);		 
			 }
			 div > form{
				background-color:rgba( 46, 134, 193,0.4);
				width:23%;
				height:82%;
				border:2px solid red;
				position: absolute;
				top: 180px;
				left:28px;
				box-shadow: 8px 10px 12px cornflowerblue;
			}	 
			 form{
			 	
			 	padding:15px;
			 	line-height: 3;
			 }
			.container{
				position: absolute;	
				border: 1px solid red;
				width: 65%;
				top: 180px;
				left: 415px;
				height: 800px;
				overflow: scroll;		
				padding: 10px;
				box-shadow: 11px 9px 19px rgb( 236, 112, 100 );
				z-index: -1;
			}
			select , input {
				box-shadow: 11px 9px 19px rgb( 236, 112, 100 );
					
			}
			
			//NAVIGATION MENU STARTS	
				body{
					
					padding-top: :40px;				
					text-decoration: none;
				}
				.menudropdown{
					height: 80px;
					background-color:rgba( 3, 3, 3 ,0.5);	
					padding-left: 400px;		
					z-index: 1;
			
				}
				ul li a{
					text-decoration: none;
					color: white;				
				}				
				ul{
					list-style-type: none;				
				}
				ul li{
					float: left;
					width: 200px;
					height: 80px;
					line-height: 80px;
					transition-property: width,transform;
					transition-duration: 0.8s;
					transition-timing-function: linear;
					text-align: center;
				}
			
				ul li ul li ul.inside2 li{
					display: none;				
				}			
				ul li ul li:hover ul.inside2 li{
					display: block;				
				}			
								
				ul li ul li{
					position: relative;
					height:60px;
					font-size: 14px;
					font-weight: bold;
					padding:-10px;
					
					left: -0px;
					display: none;
					background: rgba(40, 55, 71,0.5);
				}	
				ul li:hover ul li{
					display: block;				
				}
				ul li:hover{
					background: rgba(247, 220, 111,0.6);
					border-bottom:6px solid rgb( 35, 155, 86 );	
					cursor: help;	
					width:230px;	
					transform:scale(1.3,1.1);	
				}		
				
				ul li ul li ul li{
					position: relative;
					left:150px;
					top:-60px;				
				}	
			
		//NAVIGATION MENU ENDS
			
			
		</style>
		<title>
			COLLEGE SEARCH.
		</title>
	</head>
	
	<body>
	<!--NAVIGATION MENU STARTS-->
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
		<!--naVIGATION MENU ENDS-->
		
		
		<div class="form">
			<form method="POST" action="">
				<label class="college_state">College state</label><br>
					<select name="state"><br>
						<option value=""></option>
						<option value="westbengal">West Bengal</option>
						<option value="bihar">Bihar</option>
						<option value="maharashtra">Maharashtra</option>
						<option value="kerala">Kerala</option>
						<option value="orissa">Orissa</option>
						<option value="uttarpradesh">Uttar Pradesh</option>	
						<option value="madhyapradesh">Madhyapradesh</option>
					</select>
				<br>			
				<label class="select_course">Select Courses</label><br>
					<select name="course"><br>
						<option value=""></option>											
						<option value="b.tech">B.tech</option>
						<option value="m.tech">M.tech</option>
						<option value="b.e">B.E</option>
						<option value="b.arch">B.Arch</option>
						<option value="m.arch">M.Arch</option>	
						<option value="m.e">M.E</option>
					</select>
				<br>			
				<label class="college_name">College name:</label><br>
					<input type="text" name="name"><br>
					<input type="submit" value="submit" name="submit">
					<input type="reset" value="reset" name="reset">
			</form>	
		</div>
<?php
	$college_state=$_POST["state"];
   $courses=$_POST["course"];
   $college_name=$_POST["name"];?>
    
   <span class="container"><?php
   if(isset($college_state) && empty($courses) && empty($college_name)) {
    $sql = "SELECT * from college_details WHERE college_states='$college_state'";
  	 $result = mysqli_query($conn, $sql);

  		if (!$result) {
   		die(mysqli_error($conn));
     	}
		while ($row=mysqli_fetch_array($result)) { ?>
			<p id="1" style="border:1px solid black;padding: 15px;">
			<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";   
      }
		}?> </p>
		
		<?php if(isset($courses) && empty($college_state) && empty($college_name)){
					$sql="SELECT * FROM college_details WHERE course_offered='$courses'";	
					$result = mysqli_query($conn, $sql);

  		 				if (!$result) {
      	  				die(mysqli_error($conn));
    			 		}
		 				while ($row=mysqli_fetch_array($result)) {?>
							<p id="2" style="border:1px solid black; padding: 30px;">
							<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";   
        				}
						}?></p>
	
	
		<?php if(isset($college_name) && empty($college_state) && empty($courses)){
					$sql="SELECT * FROM college_details WHERE college_names='$college_name'";	
					$result = mysqli_query($conn, $sql);

  		 			if (!$result) {
      	  			die(mysqli_error($conn));
     				}
		 			while ($row=mysqli_fetch_array($result)) {?>
						<p id="3" style="border:1px solid black;padding: 15px;" >
						<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";    
      			}
				}?></p>

		<?php if(isset($college_name) && isset($college_state) && isset($courses)){
					$sql="SELECT * FROM college_details WHERE college_names='$college_name' AND college_states='$college_state' AND course_offered='$courses'";	
			 		$result = mysqli_query($conn, $sql);

  		 			if (!$result) {
      	  			die(mysqli_error($conn));
     				}
		 			while ($row=mysqli_fetch_array($result)) {?>
					<p id="4" style="border:1px solid black; padding: 30px;">
					<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";     
        			}
				}?></p>>
		<?php if(isset($college_state) && isset($courses)){
					$sql="SELECT * FROM college_details WHERE college_states='$college_state' AND course_offered='$courses'";	
					$result = mysqli_query($conn, $sql);

  		 			if (!$result) {
      	  			die(mysqli_error($conn));
     				}
				 	while ($row=mysqli_fetch_array($result)) {?>
						<p id="5" style="border:1px solid black; padding: 30px;">
						<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";     
        			}
				}?></p>
		<?php if(isset($college_state) && isset($college_name)){
					$sql="SELECT * FROM college_details WHERE college_states='$college_state' AND college_names='$college_name'";	
			 		$result = mysqli_query($conn, $sql);

  		 			if (!$result) {
      	  			die(mysqli_error($conn));
     				}
		 			while ($row=mysqli_fetch_array($result)) {?>
						<p id="6" style="border:1px solid black; padding: 30px;">
						<?php echo "COLLEGE STATE : ".$row['college_states']."<br>COLLEGE NAME : ".$row['college_names']."<br>COLLEGE DEGREE OFFERS : ".$row['course_offered']."<br>DEPARTMENT : ".$row['departments']."<br><br>";     
        			}
				}?></p>
	 	<?php if(empty($college_state) && empty($courses) && empty($college_name)) {?>
					<p id="7" style="border:1px solid black; padding: 30px;">
					<?php	echo "COLLEGE NOT FOUND"."<br>";
					echo "SELECT ATLEAST ONE CATEGORY TO SEARCH";
				}?></p>


<?php        	
    mysqli_close($conn);
?>
</div>
	
	
	</body>
</html>
