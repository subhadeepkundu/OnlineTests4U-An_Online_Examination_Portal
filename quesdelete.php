<?php include ('db_connect.php');
    $quesid= $_GET['quesid']; 
   $query2="DELETE FROM question WHERE quesid = '$quesid'"; 
       $result1 = mysqli_query($conn, $query2);
    //echo $result1; die();
    if($result1){
    	$msg="Delete Success!!!";

        header("Location:questionlist.php?msg=".$msg);

    }else {
        echo "fault occured";
    }
?> 
  