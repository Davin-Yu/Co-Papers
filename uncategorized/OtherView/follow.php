<?php
/**
To insert records to followers table
*/
 session_start();
$follwer_name=$_SESSION['username'];
$user_id=null;
$conn=mysqli_connect('127.0.0.1','root','','grouppj',3306); 
			$sql="SET NAMES UTF8";
			mysqli_query($conn,$sql);
			  $sql="INSERT INTO followers VALUES('','user_id','$follwer_name')";
        $result=mysqli_query($conn,$sql);  
		  if($result===true){  
            echo  "<script type='text/javascript'>alert('succeed to follow');location.href='OtherView.php'</script>";  
		}else{  
            echo "<script type='text/javascript'>alert('fail to follow');</script>".$sql;  
        }  
        mysqli_close($conn); 
?>