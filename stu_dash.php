<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["stuemail"])) {
    header("location: studentlogin.php");
    exit; 
}
else $stuemail= $_SESSION["stuemail"];
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <form id="form1">
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
              <TD bgColor=#e56e94 vAlign=top align=middle>
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
          <form id="frm">
          


        <TABLE border=0 cellSpacing=0 cellPadding=10 width="100%">
          <TR>
            <TD bgColor=#c0c0c0 vAlign=top width="18%" align=middle>&nbsp; 
          
                 
  
         <table border="10" cellspacing="10" cellpadding="10" width="100%"
                    bgcolor="#4e8975">
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
                         <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial"><B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B></font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B> <a href="stuexamlist.php">Exam List</a>
                               
                            </B>
                          </font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B><a href="logout_stu.php">Logout</a>
                         
                            </B>
                          </font>
                        </td>
                    </tr>

                    <?php $results = mysqli_query($conn, "SELECT * FROM registration where email='$stuemail'"); 
                          $rowf = mysqli_fetch_array($results);
                    ?>

      <P>
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
      </P>
      </TD>
   <p></p>
   <p></p>
      <TD bgcolor=#ffffff vAlign=top width="61%" align=left>
        <P>
          <BR>
          <FONT color=#ff0000 size=5 face="Lucida Calligraphy">
            <B>
              
            </B>
          </FONT>
          <p align="right" style="font-size: 20px"><b>Hi,&nbsp; <?php echo $rowf['name'];?></b><br>
          <br><center><img src="stulogo.jpg" width="450" height="270"></center>
            <TABLE >
              <tr>
                <!--<td bgColor=#e56e94 vAlign=top align=left>
                  <FONT size=3 face=Arial>
                    <b>                    </b><br>
                  </FONT>
                </td> -->
              </tr>
              
            

</table> 

      </TD>
    </font>
</TABLE>





          <br>
          </TABLE>
          </form>
</body>
</html>