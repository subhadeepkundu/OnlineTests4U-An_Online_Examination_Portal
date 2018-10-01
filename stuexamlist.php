<?php include('db_connect.php');
date_default_timezone_set('Asia/Kolkata');
 $ti=date('Y-m-d H:i:s'); 

    $_SESSION['ti'] = $ti;

session_start(); 


if (!isset($_SESSION["stuemail"])) {
    header("location: studentlogin.php");
    exit; 
}
else
{
  $stuemail=$_SESSION['stuemail'];
}
?>

<?php 
  $nameErr = $nameErr = $timeErr = $passErr = $quesErr = $msg= "";
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $time= $_POST['time'];
    $pass= $_POST['pass'];
    $ques= $_POST['ques'];
  
     
    if (empty($name)) 
    {
      $nameErr = "Name is required"; 

    }  
    else if (!is_numeric($time)) 
    {
      $timeErr = "Time Limit is required (numeric only)";
    } 
    else if (!is_numeric($pass)) 
    {
      $passErr = "Pass Marks is required (numeric only)"; 

    }  
    else if (!is_numeric($ques)) 
    {
      $quesErr = "Total Questions is required (numeric only)"; 

    }  
  
    else {
      $query="INSERT INTO examdetails (ename,tlimit,passmarks,totmarks,noques) VALUES ('$name','$time','$pass','$ques','$ques') "; 

      $res=mysqli_query($conn,$query);
    }

}
 ?>
 <style type="text/css">
  .btn_sub{
    display: block;
    width: 85px;
    background: #e56e94;
    padding: 4px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    text-decoration: none;
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

    <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4e9258>
      <TR>
        <TD vAlign=top align=middle>

          <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#4e9258>
            <TR>
              <TD vAlign=top align=middle>

                <TABLE bgcolor=#f0f0f0 border=0 cellSpacing=0 cellPadding=0 width=140 align=center>
                  <TR>
                    <TD height=100 width="25%">
                      <IMG border=0 alt="" src="logo.jpg" width=250 height=100>&nbsp;
                    </TD>
                    
                  </TR>

                    <TABLE border=10 cellSpacing=10 cellPadding=0 width="100%" bgColor=#54c571>
                      <TR>
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT color=#000000 size=3 face=Arial>
                            <B><A href="index.php">HOME</A></B>
                          </FONT>
                        </TD>
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                <FONT size=3 face=Arial><?php 
                  if (isset($_SESSION["instemail"])) {?><a href="examlist.php"> <?php }
                    else if (isset($_SESSION["stuemail"])) {?><a href="stuexamlist.php"> <?php } 
                      else { ?>
                                                    <a href="gexamlist.php"><?php } ?>
                  <B>Exam list</B></A>
                </FONT>
              </TD>
                       <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php 
                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
                    else { ?>
                                                    <a href="institutelogin.php"><?php } ?>Institute</B>
                          </FONT>
                        </TD>
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php 
                  if (isset($_SESSION["stuemail"])) {?><a href="stu_dash.php"> <?php }
                    else { ?>
                                                    <a href="student.php"><?php } ?>Student</B>
                          </FONT>
                        </TD>
                  
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><A href="aboutus.php">About Us</A></B>
                          </FONT>
                        </TD>
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><A href="faq.php">Help/FAQ</A></B>
                          </FONT>
                        </TD>
                        <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><A href="contactus.php">Contact us</A></B>
                          </FONT>
                        </TD>
                      </TR>
                    </TABLE>

                    <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%">
                      <TR>
                        
                      </TR>
                    </TABLE>

                    <TABLE border=0 cellSpacing=0 cellPadding=10 width="100%">
                      <TR>
                        <TD bgColor=#c0c0c0 vAlign=top width="18%" align=middle>&nbsp; 
                    
                            <table border="10" cellspacing="10" cellpadding="10" width="100%" bgcolor="#4e8975">
                              <tr>
                                <td bgcolor="#54c571" width="100%">
                                  <font size="4" face="Arial">
                                    <B>Main Menu</B>
                                  </font>
                                </td>
                              </tr>
                              <tr>
                        <td bgcolor="#a74ac7" width="100%" align="center">
                          <font size="2" face="Arial">
                            <B><a href="stu_dash.php" style="text-decoration: none;">DASHBOARD</a<asp:Label ID="lblname" runat="server" Text=""></asp:Label></B>
                          </font>
                        </td>
                    </tr>
                               <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial"><B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B></font>
                        </td>
                    </tr>
                            <tr>
                                <td bgcolor="#a74ac7" width="100%">
                                  <font size="2" face="Arial">
                                    <B> <a href="stuexamlist.php">Exam List</a>
                        
                                  </font>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#a74ac7" width="100%">
                                  <font size="2" face="Arial">
                                    <B><a href="logout_stu.php">Logout</a>
                                  
                                  </font>
                                </td>
                            </tr> 
                            </table> 

                            <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#f87431>
                              <TR>
                                <TD width="100%" align=middle>
                                  <B>
                                    <FONT color=#ffffff size=2 face=Arial>Developed By:</FONT>
                                  </B>
                                </TD>
                              </TR>
                            </TABLE>

                            <TABLE border=0 cellSpacing=10 cellPadding=10 width="100%" bgColor=#bce954>
                              <TR>
                                <TD bgColor=#e0ffff width="100%">
                                 <FONT size=2 face=Arial><b>Subhadeep Kundu</b></FONT>
                                </TD>
                              </TR>
                            </TABLE>

                        </TD>

                        <TD bgcolor=#ffffff vAlign=top width="61%" align=left>

                          <TABLE border=0 cellSpacing=10 cellPadding=10 width="100%" bgColor=#bce954>
                            <TR>
                              <TD bgColor=#e0ffff width="100%">
                                <FONT size=5 face=Arial><b>Exam List</b></FONT>
                                
                                <?php 

                                        if(isset($_GET['msg'])){
                                            echo $_GET['msg'];
                                        }
                                      ?>
                                      <?php 

                                        if(isset($_GET['insmsg'])){
                                            echo $_GET['insmsg'];
                                        }
                                      ?>

                              <?php $results = mysqli_query($conn, "SELECT * FROM examdetails ORDER BY examid DESC"); ?>
                              <?php
                              //echo  "SELECT * FROM registration WHERE email ='".$_SESSION['stuemail']."'"; die();
                            $results1 = mysqli_query($conn, "SELECT * FROM registration WHERE email ='".$_SESSION['stuemail']."'"); 
                                    $rowf1 = mysqli_fetch_array($results1);
                                  //  echo $rowf1['id']; die(); ?>


                              <form action="" method="post" name="regform">
                              <table border=10 cellSpacing=10 cellPadding=0 width="100%" bgColor=#4e8975>
                                <tbody>
                                  <tr>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Sl. No.</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Exam Name</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Time Limit</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>No. of Ques.</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Total Marks</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Pass Marks</b></font></td>
                                    <td bgColor=#e56e94 vAlign=top align=middle><font size=3><b>Action</b></font></td>
                                  </tr>

                                  <?php 
                                  $count=1;
                                  while ($rowf = mysqli_fetch_array($results)) { ?>
                                  <tr>


                                    <?php 
                                    $examid=$rowf['examid'];
                                    $stuid=$rowf1['id'];
                                    $results2 = mysqli_query($conn, "SELECT * FROM score WHERE examid='$examid' AND stuid='$stuid' ");
                                    $rowf2 = mysqli_fetch_array($results2);
                                    
                                    ?>

                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $count++; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $rowf['ename']; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $rowf['tlimit']; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $rowf['noques']; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $rowf['totmarks']; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><?php echo $rowf['passmarks']; ?></td>
                                    <td bgColor=#54c571 vAlign="middle" align="center"><br>
                                      <?php 
                                     

                                      if($rowf['examid']==$rowf2['examid'] && $rowf1['id']==$rowf2['stuid'])
                                      { ?>
                                        <a  class="btn_sub" href="myresult.php?examid=<?php echo $examid;?>" id="btncancel" > View Score</a><br>
                                      <?php }
                                             else{  ?>




                                       <!-- <a  class="btn_sub" href="exam.php?examid=<?php echo $rowf['examid'].date('M d, &\nb\sp;Y H:i:s');?>" id="btncancel" > Start Exam</a>-->
                                       <!-- <a href="javascript:startexamTime('<?php echo $rowf['examid']; ?>')" class="btn_sub" id="btncancel" > Start Exam</a><br> -->
                                       <!-- <a  class="btn_sub" href="exam.php?examid=<?php echo $rowf['examid'];?>" onclick="show(this.id)" id="btncancel" > Start Exam</a><br> -->
                                        <a href="javascript:show('<?php echo $rowf['examid']; ?>');" class="btn_sub" id="btncancel" > Start Exam</a><br> 


                                      <?php } ?>  
                                      
                                       
                                    </td>
                                  </tr>
                                  <?php  }?>
                      
                                </tbody>
                              </table>
                              </form>

                              </TD>
                            </TR>
                          </TABLE>

                        </TD>
                      </TR>
                    </TABLE>

                  </FONT>
                </TABLE>
                
                </B>
              </TD>
            </TR>
          </TABLE>

        </TD>
      </TR>
    </TABLE>
  


<script> 

var time = new Date();

   function show(examid) {
    //document.getElementById('btncancel').value=time;
    //alert(time);

     window.location.href = "exam.php?examid=" + examid + "&starttime="+ time ;                                    ;
     //window.location = "exam.php?time"+time+"&examid"+<?php $examid ?>;
  }




$(document).ready(function() { 
    function disableBack() { 
      window.history.forward() 
    } 
    window.onload = disableBack(); 
    window.onpageshow = function(evt) { 
      if (evt.persisted) disableBack() 
    } 
}); 

/*function startexamTime(examid){
  alert(examid);
  
  window.location = 'exam.php?starttime='+<?php date('M d, &\nb\sp;Y H:i:s');?>; 
}*/

</script>  
</body>
</html>