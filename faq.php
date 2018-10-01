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
                <FONT size=3 face=Arial><?php session_start();
                  if (isset($_SESSION["instemail"])) {?><a href="examlist.php"> <?php }
                    else if (isset($_SESSION["stuemail"])) {?><a href="stuexamlist.php"> <?php } 
                      else { ?>
                                                    <a href="gexamlist.php"><?php } ?>
                  <B>Exam list</B></A>
                </FONT>
              </TD>
               <TD bgColor=#e56e94 vAlign=top align=middle>
                          <FONT size=3 face=Arial>
                            <B><?php                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
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
          <form id="frm">




        <TABLE border=0 cellSpacing=0 cellPadding=10 width="100%">
          <TR>
            <TD bgColor=#c0c0c0 vAlign=top width="18%" align=middle>&nbsp; 
                  <?php 
                  if (isset($_SESSION["instemail"])) {?>
                  <table border="10" cellspacing="10" cellpadding="10" width="100%" bgcolor="#4e8975">
                    <tr>
                     <td bgcolor="#54c571" width="100%">
                          <font size="4" face="Arial"><B>Main Menu</B></font>
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
                          <font size="2" face="Arial"><B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B></font>
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
                            <B>
                              <A href="examlist.php">Exam Details</A>
                            </B>
                          </font>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial">
                            <B>
                              <A href="questionlist.php">Question Details</A> 
                            </B>
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
              <?php }  
                else  if (isset($_SESSION["stuemail"])) {?>
            <table border="10" cellspacing="10" cellpadding="10" width="100%"
                            bgcolor="#4e8975">
                            <tr>
                                <td bgcolor="#54c571" width="100%">
                                  <font size="4" face="Arial"><B>Main Menu</B>
                                  </font>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#a74ac7" width="100%" align="center">
                                  <font size="2" face="Arial">
                                    <B><a href="stu_dash.php" style="text-decoration: none;">DASHBOARD</a><asp:Label ID="Label1" runat="server" Text=""></asp:Label></B>
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
          <?php }
          else { ?>
             <TABLE border=10 cellSpacing=10 cellPadding=10 width="100%" bgColor=#4e8975>
                <TR>
                  <TD bgColor=#54c571 width="100%">
                    <FONT size=4 face=Arial>
                      <B>Main Menu</B>
                    </FONT>
                  </TD>
                </TR>
                   <tr>
                        <td bgcolor="#a74ac7" width="100%">
                          <font size="2" face="Arial"><B><A href="http://www.srmuniv.ac.in/" target="_blank">Institute Details </A> </B></font>
                        </td>
                    </tr>
                <TR>
                  <TD bgColor=#a74ac7 width="100%">
                    <FONT size=2 face=Arial>
                      <B><A href="institutelogin.php">Institute Login</A> 
                      </B>
                    </FONT>
                  </TD>
                </TR>
                <TR>
                  <TD bgColor=#a74ac7 width="100%">
                    <FONT size=2 face=Arial>
                      <B><A href="student.php">Student registration</A>
                      </B>
                    </FONT>
                  </TD>
                </TR>
                <TR>
                  <TR>
                    <TD bgColor=#a74ac7 width="100%">
                      <FONT size=2 face=Arial>
                        <B><A href="studentlogin.php">Student Login</A> 
                        </B>
                      </FONT>
                    </TD>
                  </TR>
          

                  <TD bgColor=#a74ac7 width="100%">
                    <B><FONT size=2 face=Arial>
                      <B><A href="faq.php">Help/FAQ</A>
                      </B>
                        </FONT>
                    </B>
                  </TD>
                </TR>

            </TABLE> 
          <?php } ?>
          <P>
            <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#f87431>
              <TR>
                <TD width="100%" align=middle>
                  <B>
                    <FONT color=#ffffff size=2 face=Arial>Made By:
                    </FONT>
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
          <P> </P>
          <P></P>
              <TD bgcolor=#ffffff vAlign=top width="61%" align=left>
                <P><BR>
                  <FONT color=#ff0000 size=5 face="Lucida Calligraphy">
                    <B>
                      <H1><marquee width="100%" bgcolor="yellow" behavior="alternate">OnlineTests4U</marquee></H1>
                    </B>
                  </FONT>
                  <br><img src="faq.jpg" width="300" height="250" align="left">
                  <h2>
                    <font face=arial color="blue">
                      <u><center> FAQ/HELP</center></u>
                    </font>
                  </h2>
                  <br><br><br>
                  <font size="4">
                    <img src="bullet.jpg" width=35 height=20>
                      <b>How is this site helpful to institutes?</b>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This site is a medium by which institutes can conduct online exams.
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They can register on the site and then can enter the exam details and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;questions.The institutes also provide a list of students that are eligible for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the exam.
                        <br><br>
                        <img src="bullet.jpg" width=35 height=20>
                        <b>How institutes can register on this site?</b>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can register by clicking on the link on the home page 
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After that fill all the details very carefully.
                        <br><br>
                    <img src="bullet.jpg" width=35 height=20>
                      <b>How students can login and give their exams?</b>
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students can login by clicking on the link given on home page or just <?php 
                  if (isset($_SESSION["stuemail"])) {?><a href="stu_dash.php"> <?php }
                    else { ?>
                                                    <a href="studentlogin.php"><?php } ?><font size="3" color="RED"> click here</font></a>.
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Students need to remember the ID provided to them by the institutes. After login students can take up their exams &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and can see their results then and there.
                      <br><br>
                    <img src="bullet.jpg" width=35 height=20>
                      <b>What if a institute wants to edit questions already entered?</b>
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can easily edit or delete the questions through the options given to him once it login.
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can login by clicking on the link given on home page or just <?php 
                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
                    else { ?>
                                                    <a href="institutelogin.php"><?php } ?><font size="3" color="RED"> click here</font></a>.
                      <br><br>
                    <img src="bullet.jpg" width=35 height=20>
                      <b>What if a institute wants to view the list of students or make some changes to it?</b>
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can easily view or edit the students list through the options given to him once it login.
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can login by clicking on the link given on home page or just <?php 
                  if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
                    else { ?>
                                                    <a href="institutelogin.php"><?php } ?><font size="3" color="RED"> click here</font></a>.
                      <br><br>
                    <img src="bullet.jpg" width=35 height=20>
                      <b>Can institutes set their own time limit for exam?</b>
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can give the time limit for exam once they register.
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They can even change it by logging in at a later time.
                      <br><br>
                    <img src="bullet.jpg" width=35 height=20>
                      <b>Is there any provision for negative marking?</b>
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Institutes can enter both positive and negative marks for correct or incorrect question respectively once they register.
                      <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;They can even change it by logging in at a later time.
                      <br><br><br><br>
</table> 

                    </TD>
                  </font>
</TABLE>





          <br>
          </TABLE>
          </form>
</body>
</html>