<?php
session_start(); 

if (!isset($_SESSION["instemail"])) {
    header("location: institutelogin.php");
    exit; 
}
?>

<?php include('db_connect.php');
  $quesErr = $aErr = $bErr = $cErr = $dErr = $correctErr = "";
  if(isset($_POST['submit'])){
    $examid= $_POST['examid'];
    $ques= $_POST['ques'];
    $a= $_POST['a'];
    $b= $_POST['b'];
    $c= $_POST['c'];
    $d= $_POST['d'];
    $correct= $_POST['correct'];
    if (empty($ques)) 
    {
      $quesErr = "Question is required"; 

    }  
    else if (empty($a)) 
    {
      $aErr = "Option a is required";
    } 
    else if (empty($b)) 
    {
      $bErr = "Option b is required";
    }
    else if (empty($c)) 
    {
      $cErr = "Option c is required";
    }
    else if (empty($d)) 
    {
      $dErr = "Option d is required";
    }
     else if (empty($correct)) 
    {
      $correctErr = "Correct Option is required";
    }
  
  
    else {
      $query="INSERT INTO question (examid,question,ans_a,ans_b,ans_c,ans_d,ans_correct) VALUES ('$examid','$ques','$a','$b','$c','$d','$correct') "; 

      $res=mysqli_query($conn,$query);
      $insmsg="Data inserted Successfully!!!";

        header("Location:questionlist.php?insmsg=".$insmsg);
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
                            <B><a href="inst_dash.php" style="text-decoration: none;">DASHBOARD</a<asp:Label ID="lblname" runat="server" Text=""></asp:Label></B>
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
                                      <B><A href="questionlist.php">Question Details</A> </B>
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


                        <?php $results = mysqli_query($conn, "SELECT * FROM examdetails"); ?>



                          <TABLE >
                            <TR>
                               <form action="" method="post" name="regform">
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#ffffff align=center>
            <tbody>
              <tr>
                <td width=40%></td>
                <td><font size=5><b>Question Details Form</b></font></td>
              </tr>
              <tr>
                <td align=right>
                </td>
                <td ></td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Exam Type:</font>
                </b></td>
                <td>
                                  
                    <select required name="examid" >
                        <option value="">Select Exam</option>
                        <?php while ($rowf = mysqli_fetch_array($results)) { ?>
                          <option value="<?php echo $rowf['examid'];?>"><?php echo $rowf['ename']; ?></option>
                         <?php } ?> 
                    </select>
                </td>
              </tr>


              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Question:</font>
                </b></td>
                <td>
                  <textarea rows="4" cols="50" name="ques"> Write the Question</textarea>
                  <span class="error"><?php echo $quesErr;?></span>
                </td>
              </tr>


               <tr>
                <td align=right><b><font color=#df2332 size=3 required>Option a:</font>
                </b></td>
                <td>
                  <input type="text" name="a" class="form-control" Height="30px" placeholder="Option a">
                  <span class="error"><?php echo $aErr;?></span>
                </td>
              </tr>


               <tr>
                <td align=right><b><font color=#df2332 size=3 required>Option b:</font>
                </b></td>
                <td>
                  <input type="text" name="b" class="form-control" Height="30px" placeholder="Option b">
                  <span class="error"><?php echo $bErr;?></span>
                </td>
              </tr>


              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Option c:</font>
                </b></td>
                <td>
                  <input type="text" name="c" class="form-control" Height="30px" placeholder="Option c">
                  <span class="error"><?php echo $cErr;?></span>
                </td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Option d:</font>
                </b></td>
                <td>
                  <input type="text" name="d" class="form-control" Height="30px" placeholder="Option d">
                  <span class="error"><?php echo $dErr;?></span>
                </td>
              </tr>


              <tr>
                <td align=right><b><font color=#df2332 size=3 required>Correct Option:</font>
                </b></td>
                <td>
                  <input style="text-transform: uppercase;"pattern="[A-Da-d]{1}" type="text" name="correct" class="form-control" Height="30px" placeholder="correct">
                  <span class="error"><?php echo $correctErr;?></span>
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