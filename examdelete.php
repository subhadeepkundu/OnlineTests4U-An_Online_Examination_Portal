<?php include ('db_connect.php');
    $examid= $_GET['examid']; 
   $query2="DELETE FROM examdetails WHERE examid = '$examid'"; 
       $result1 = mysqli_query($conn, $query2);
    //echo $result1; die();
    if($result1){
    	$msg="Delete Success!!!";

        header("Location:examlist.php?msg=".$msg);

    }else {
        echo "fault occured";
    }
?> 
  