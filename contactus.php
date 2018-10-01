<?php include('db_connect.php');
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $description= $_POST['description'];

     
    
    $query="INSERT INTO contactus (name,email,subject,description) VALUES ('$name','$email','$subject','$description') "; 

      $res=mysqli_query($conn,$query); 
      $qmsg="Thank You!!! We will get back to you soon";

        header("Location:contactus.php?qmsg=".$qmsg);

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
                            <B><?php                   if (isset($_SESSION["instemail"])) {?><a href="inst_dash.php"> <?php }
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
                                    <B> <a href="stu_dash.php" style="text-decoration: none;">DASHBOARD</a><asp:Label ID="Label1" runat="server" Text=""></asp:Label></B>
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
                <FONT color=#ffffff size=2 face=Arial>Made By:</FONT>
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
        <P>
          <BR>
          <FONT color=#ff0000 size=5 face="Lucida Calligraphy">
            <B>
              <H1><marquee width="100%" bgcolor="yellow" behavior="alternate">OnlineTests4U</marquee></H1>
            </B>
          </FONT>
          <br><center></center>
            <TABLE bgcolor=#FFFFFF border=0 cellSpacing=10 cellPadding=0 width="100%">
              <tr>
                <td bgColor=#e56e94 vAlign=top align=left>
                  <FONT size=3 face=Arial>
                    <TABLE >
                            <TR>
                               <form action="" method="post" name="regform" >
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#ffffff align=center>
            <tbody>
              <tr>
                <td width=40%></td>
                <td><font size=5><b>Contact Us</b></font></td>


              </tr>
              <tr>  <fieldset>
                <td align=right>
                </td>
                <td ></td>
              </tr>

                <?php 

                if(isset($_GET['qmsg'])){
                    echo $_GET['qmsg'];
                }
              ?>
              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Name</font>
                </b></td>
                <td>
                  <input type="text" name="name" class="form-control" Height="30px" placeholder="Name" required>
                </td>
              </tr>
             

              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Email</font>
                </b></td>
                <td>
                  <input type="email" name="email" class="form-control" Height="30px" placeholder="Email Id" required>
                </td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Subject</font>
                </b></td>
                <td>
                  <input type="text" name="subject" class="form-control" Height="30px" placeholder="Subject" required>
                </td>
              </tr>

    
              <tr>
                <td align=right><b><font color=#df2332 size=3 >Decription</font>
                </b></td>
                <td>
                  <textarea rows="4" cols="50" name="description" required></textarea>
               
                </td>
              </tr>

                <tr align=center>
                    <td></td>
                <td align=left>

                  <input type="submit" class="btn_sub" name="submit" value="Send" ><br><br>
                </td>
              </tr> </fieldset>
              </tbody>
          </table>
          </form>



                    <b>FOR ANY QUERIES PLEASE CONTACT THE FOLLOWING PERSON:-
                    </b><br>
                  </FONT>
                </td>
              </tr>
              <tr>
                <td bgColor=#e56e94 vAlign=top align=middle>
                  <FONT size=3 face=Arial>
                    <b>SUBHADEEP KUNDU (09952084003)</b>
                  </FONT>
                </td>
              </tr>
              
              <tr>
                <td>
                  <br><br><br><br><br>
                </td>
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