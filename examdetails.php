<?php
session_start(); 

if (!isset($_SESSION["instemail"])) {
    header("location: index.php");
    exit; 
}
?>

<?php include('db_connect.php');
  $nameErr = $nameErr = $timeErr = $passErr = $quesErr = $dup = "";
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $time= $_POST['time'];
    $pass= $_POST['pass'];
    $ques= $_POST['ques'];
  
     
    if (empty($name)) 
    {
      $nameErr = "Name is required"; 

    }  
    else if (empty($time)) 
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
      $check=mysqli_query($conn,"SELECT * FROM examdetails WHERE ename='$name'");
      $checkrows=mysqli_num_rows($check);
      if($checkrows>0) {
        $dup = "Exam Name exists";
      } 
      else {  
        $query="INSERT INTO examdetails (ename,tlimit,passmarks,totmarks,noques) VALUES ('$name','$time','$pass','$ques','$ques') "; 
        $res=mysqli_query($conn,$query);

        $insmsg="Data Inserted Successfully!!!";

        header("Location:examlist.php?insmsg=".$insmsg);
      }
    }

}
 ?>
 <style type="text/css">
  .btn_sub{
    display: block;
    width: 115px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
</style>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
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
                <FONT size=3 face=Arial><?php                   if (isset($_SESSION["instemail"])) {?><a href="examlist.php"> <?php }
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
                            <B><a href="inst_dash.php" style="text-decoration: none;">DASHBOARD</a><asp:Label ID="lblname" runat="server" Text=""></asp:Label></B>
                          </font>
                        </td>
                    </tr>
                               <tr>
                                  <td bgcolor="#a74ac7" width="100%">
                                    <font size="2" face="Arial">
                                      <B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B>
                                    </font>
                                  </td>
                              </tr>
                               <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B>
                              <A href="studentlist.php">Student List</A>
                            </B>
                          </font>
                        </td>
                    </tr>
                              <tr>
                                  <td bgcolor="#a74ac7" width="100%">
                                    <font size="2" face="Arial">
                                      <B><A href="examlist.php">Exam Details</A></B>
                                    </font>
                                  </td>
                              </tr>
                              <tr>
                                  <td bgcolor="#a74ac7" width="100%">
                                    <font size="2" face="Arial">
                                      <B><A href="questiondetails.php">Question Details</A> </B>
                                    </font>
                                  </td>
                              </tr>
                               <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B>
                              <A href="scorelist.php">Score List</A>
                            </B>
                          </font>
                        </td>
                    </tr>
                              <tr>
                                  <td bgcolor="#a74ac7" width="100%">
                                    <font size="2" face="Arial">
                                      <B> <a href="logout_inst.php">Logout</a>
                                          
                                      </B>
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






                          <TABLE >
                            <TR>
                               <form action="" method="post" name="regform">
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#ffffff align=center>
            <tbody>
              <tr>
                <td width=40%></td>
                <td><font size=5><b>Exam Details Form</b></font></td>
                 <span class="error"><b><?php echo $dup;?></b></span>
              </tr>
              <tr>
                <td align=right>
                </td>
                <td ></td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Exam Name:</font>
                </b></td>
                <td>
                  <input type="text" name="name" class="form-control" Height="30px" placeholder="Exam Name">
                  <span class="error"><?php echo $nameErr;?></span>
                </td>
              </tr>


               <tr>
                <td align=right><b><font color=#df2332 size=3 required>Time Limit:</font>
                </b></td>
                <td>
                  <input type="text" name="time" class="form-control" Height="30px" placeholder="Time Limit" value="00:00:00">
                  <span class="error"><?php echo $timeErr;?></span>
                </td>
              </tr>


                <tr>
                <td align=right><b><font color=#df2332 size=3 required>Pass Marks:</font>
                </b></td>
                <td>
                  <input type="text" name="pass" class="form-control" Height="30px" placeholder="Pass Marks">
                  <span class="error"><?php echo $passErr;?></span>
                </td>
              </tr>


               <tr>
                <td align=right><b><font color=#df2332 size=3 required>No. of Questions:</font>

                </b></td>
                <td>
                  <input type="text" name="ques" class="form-control" Height="30px" placeholder="No. of Questions">
                  <span class="error"><?php echo $quesErr;?></span>
                </td>
              </tr>



              
                <tr align=center>
                    <td></td>
                <td align=left>

                  <input type="submit" class="btn_sub" name="submit" value="Save" >
                </td>
              </tr>
               
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

</body>
</html>