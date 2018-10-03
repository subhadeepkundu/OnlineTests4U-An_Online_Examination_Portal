<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["stuemail"])) {
    header("location: studentlogin.php");
    exit; 
}
 $stuid = $_GET['stuid']; 
 $examid = $_GET['examid'];
  if(isset($_POST['submit'])){
     $qid=$_POST['qid'];
     $opid=$_POST['option'] ;
     $merge = array_combine($qid,$opid);
      foreach($merge as $option_num => $option_val ){
    echo $option_num." ".$option_val."<br>"; 
   $query="INSERT INTO stu_ans (stuid,ans,ques) VALUES ('$stuid','$option_val','$option_num') "; 
    $res=mysqli_query($conn,$query); 
    }
    header("Location:stu_dash.php");
  }
 ?>



 <style type="text/css">
.btn_sub{
    display: block;
    width: 125px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}

.tblexam {
  border-collapse: collapse;
  width: 100%;
}

.tblexam th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f4b342;
  color: white;
}

.tblexam td {
  border: 1px solid #ddd;
  padding: 8px;
}
</style>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="js/jquery.min.js"></script> 
    <script src="js/jquery-ui.min.js"> </script> 
</head>
<body>
  <?php 
    $results = mysqli_query($conn, "SELECT * FROM question WHERE examid='$examid' ");  ?> 

    <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#ffffff>
      <TR>
        <TD vAlign=top align=middle>

          <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4e9258>
            <TR>
              <TD vAlign=top align=right>
                
                <TABLE bgcolor=#f0f0f0 border=0 cellSpacing=0 cellPadding=0 width=140 align=center>
                  <TR>
                    <TD height=100 width="25%">
                      <IMG border=0 alt="" src="logo.jpg" width=250 height=100>&nbsp;
                    </TD>

                  </TR>

                </TABLE>

              </TD>
             
            </TR>
          </TABLE>

          <TABLE bgcolor=#ffffff border=0 cellSpacing=0 cellPadding=0 class="tblexam">
             

            <?php 
            $count=1;
            $cnt=1;
            $c=0;

            while ($rowf = mysqli_fetch_array($results)) {
                $quesid = $rowf['quesid'];
                $results2 = mysqli_query($conn, "SELECT * FROM stu_ans WHERE ques='$quesid' and stuid='$stuid' "); 
                $rowf2 = mysqli_fetch_array($results2)
                
            ?>
            <TR>
              <TH>
                <!--<input type="hidden" name="qid[]" value="<?php echo $rowf['quesid']; ?>">   -->
                Q <?php echo $cnt++; ?>. <?php echo $rowf['question']; ?>
              </TH>
            </TR>
            <TR>
             
              <TD <?php if($rowf2['ans'] == 'a'){ if($rowf['ans_correct'] == $rowf2['ans']){?> bgcolor="#00FF00"<?php $c++;}else{?> bgcolor="#FF0000"<?php } }else{?> bgcolor="#FFFFFF"<?php }?>>
                A. <?php echo $rowf['ans_a']; ?>
              </TD>
            </TR>
            <TR>
              <TD <?php if($rowf2['ans'] == 'b'){ if($rowf['ans_correct'] == $rowf2['ans']){?> bgcolor="#00FF00"<?php $c++;}else{?> bgcolor="#FF0000"<?php } }else{?> bgcolor="#FFFFFF"<?php }?>>
                B. <?php echo $rowf['ans_b']; ?>
              </TD>
            </TR>
            <TR>
              <TD <?php if($rowf2['ans'] == 'c'){ if($rowf['ans_correct'] == $rowf2['ans']){?> bgcolor="#00FF00"<?php $c++;}else{?> bgcolor="#FF0000"<?php } }else{?> bgcolor="#FFFFFF"<?php }?>>
                 C. <?php echo $rowf['ans_c']; ?>
              </TD>
            </TR>
            <TR>
              <TD <?php if($rowf2['ans'] == 'd'){ if($rowf['ans_correct'] == $rowf2['ans']){?> bgcolor="#00FF00"<?php $c++;}else{?> bgcolor="#FF0000"<?php } }else{?> bgcolor="#FFFFFF"<?php }?>>
                 D. <?php echo $rowf['ans_d']; ?>
              </TD>
            </TR> 
             <TR height="40">
              <td>
                 
              <p style="color: green"> Correct Answer: <?php echo ucfirst($rowf['ans_correct']) ?> </p>

              </td>

            </TR>
         
             <?php $count++;
              } ?>
         
              <tr height="40">
               <td align="center"><B>TOTAL SCORE &nbsp;&nbsp;&nbsp;<?php echo $c;?> </B></td>
               <?php
              //$query1="INSERT INTO score (stuid,examid,marks) VALUES ('$stuid','$examid','$c') "; 
               $query1="INSERT INTO score (stuid,examid,marks) SELECT * FROM (SELECT '$stuid','$examid','$c') AS tmp WHERE NOT EXISTS (SELECT * FROM score WHERE stuid='$stuid' AND examid='$examid') LIMIT 1";
               $res1=mysqli_query($conn,$query1); ?>
             </tr>
          </TABLE> 
          <a  class="btn_sub" href="logout_stu.php" id="btncancel" > Logout</a><br>
          
        </TD>
      </TR>
     
    </TABLE>

    <script> 
$(document).ready(function() { 
    function disableBack() { 
      window.history.forward() 
    } 
    window.onload = disableBack(); 
    window.onpageshow = function(evt) { 
      if (evt.persisted) disableBack() 
    } 
}); 
</script> 

</body>
</html>