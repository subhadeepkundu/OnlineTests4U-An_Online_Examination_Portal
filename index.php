<?php include('db_connect.php');
  session_start();
  $nameErr = "";
    if (isset($_POST['submit'])) { 
    $useremail=$_POST['instemail'];
    $password=sha1($_POST['instpassword']);
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
    width: 115px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
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
               <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php 
                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
                    else { ?>
                                                    <a href="institutelogin.php"><?php } ?>Institute</B>
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

          <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%"></table>
          
         
        
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#c1ffca align=center>
            <tbody>
              <tr>
                <td> <h1 style="color: #c1ffca"><marquee width="100%" bgcolor="#006400" behavior="alternate"><b>WELCOME TO OnlineTests4U </b></marquee></h1></td> 
               
              </tr>
            

              <tr>
                <td ><h3 style="color: #2e1150"><font face="Lucida Calligraphy"><i> We provide an intensive tool for various institutions to conduct various class tests, admission tests and keep a track of the student's performace. It helps the institutions to conduct examinations which students can attempt from anywhere irrespective of their geographical locations.</i> </h3>
                </td>
              </tr>

              <tr>
                <td><h2 style="color: #0e3f0d"><b><FONT face="Helvetica">OUR TECHNOLOGY</FONT></b></h2></td>
                </td>
              </tr>
              <TABLE>
              <tr>
                <TD width="20%">
            <IMG border=2 alt="" src="technology/html.jpg" width=240 height=100>&nbsp;
          </TD>
          <TD  width="20%">
            <IMG border=2 alt="" src="technology/css.jpg" width=240 height=100>&nbsp;
          </TD>
           <TD  width="20%">
            <IMG border=2 alt="" src="technology/js.jpg" width=240 height=100>&nbsp;
          </TD>
          <TD width="20%">
            <IMG border=2 alt="" src="technology/php.jpg" width=240 height=100>&nbsp;
          </TD>
           <TD width="20%">
            <IMG border=2 alt="" src="technology/mysql.jpg" width=240 height=100>&nbsp;
          </TD></TR></TR> </table> <table>
          <TR><td></td><td></td>
          <TD width="100%" bgcolor="286B01"><center>DEVELOPED BY :&nbsp; <b>SUBHADEEP KUNDU</b></center></TD></TR>


              
                </table>  </table>




               
            </tbody>
          </table> </TABLE>






          <br>
          </TABLE>
          </table></table>
</body>
</html>