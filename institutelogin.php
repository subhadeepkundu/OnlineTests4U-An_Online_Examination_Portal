<?php include('db_connect.php');
  session_start();
  $nameErr = "";
    if (isset($_POST['submit'])) { 
    $useremail=$_POST['instemail'];
    $password=($_POST['instpassword']);
    $sql="SELECT * FROM org WHERE email='$useremail' and pwd='$password'";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
     if($row)
   {
    $_SESSION['instemail']=$useremail;
      header('Location: inst_dash.php');
   }
   else
   {
    $nameErr="Entered username or password is incorrect";
   } 
  }
?>





<!DOCTYPE html>
<style type="text/css">
  .btn_sub{
    display: block;
    width: 100px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 3px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
</style>

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
          <TD height=100 width="50%">
            <IMG border=0 alt="" src="logo2.jpg" width=580 height=100>
          </TD>
          <TD height=100 width="25%">
            <IMG border=0 alt="" src="logo.gif" width=250 height=100>&nbsp;
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
         
                  <B> <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php 
                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
                    else { ?>
                                                    <a href="institutelogin.php"><?php } ?>Institute</B>
                          </FONT>
                        </TD></B>
                </FONT>
              </TD>
          
                  <B><TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php 
                  if (isset($_SESSION["stuemail"])) {?><a href="stu_dash.php"> <?php }
                    else { ?>
                                                    <a href="student.php"><?php } ?>Student</B>
                          </FONT>
                        </TD></B>
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
          <form id="frm" action="" method="post">
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#ffffff align=center>
            <tbody>
              <tr>
                <td> </td>
                <td align="left"><font size=5><b>Institute Login</b></font></td>
              </tr>
              <tr>
                <td align=right>
                </td>
               
              
                <td align="left"><span class="error"><?php echo $nameErr;?></span></td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3>Institute Email:</font>
                </b></td>
                <td>
                  <input type="text" name="instemail" class="form-control" Height="30px" placeholder="Institute Email">
                </td>
              </tr>
              <tr>
                <td align=right><b><font color=#df2332 size=3>Password:</font></b></td>
                <td>
                  <input type="password" name="instpassword" class="form-control" Height="30px" placeholder="Password">
                </td>
              </tr>
              
                <tr align=center>
                <td align=right><input type="submit" name="submit"  class="btn_sub"  value="Sign In" /></td>
                <td align=left>
                  <a  class="btn_sub" href="institutelogin.php" id="btncancel" > Cancel</a>
                </td>
              </tr>
               <tr>
                <td>&nbsp;</td>
                </tr>
            </tbody>
          </table>






          <br>
          </TABLE>
          </form>
</body>
</html>