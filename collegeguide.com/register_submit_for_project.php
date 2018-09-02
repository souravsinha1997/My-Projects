<?php
    $hostname = "localhost";
    $username = "root";
    $password = "sourav05";
    $database = "PROJECT_COLLEGE";

    $conn = mysqli_connect($hostname, $username, $password, $database);      //mysqli_connect()  function connects to sql server.
   
    if (!$conn) {
        	die("Connection failed: " . mysqli_connect_error());             //die()  is a function which prints something and then stops the 
    }     
    
    //php variables in plural 
    
  	 $streams=$_POST['education_stream'];
    $courses=$_POST['course'];
    $specializations=$_POST['specialization'];
    $emails=$_POST['email'];
    $passwords=$_POST['password'];
    $full_names=$_POST['full_name'];
    $mobile_numbers=$_POST['mobile_number'];
    $citys=$_POST['city'];
    
    $statep1=$_POST['state1'];
    $statep2=$_POST['state2'];
    
    
    $sql="INSERT INTO users_details(education_stream,course,specialization,email,password,full_name,mobile_number,user_city,state1,state2)
    			VALUES('$streams','$courses','$specializations','$emails','$passwords','$full_names','$mobile_numbers',' $citys','$statep1','$statep2')";
    
     if (mysqli_query($conn, $sql)) {                                     
        	echo "Registration successful";                                 
    }                                                                       
                                                                                               
                                                                                                                            
    else {    
        	echo "Error: " . $sql . "<br>" . mysqli_error($conn);            
    }                                                                       
    mysqli_close($conn);
?>
