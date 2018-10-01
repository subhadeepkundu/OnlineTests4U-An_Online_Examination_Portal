<?php include('db_connect.php');
  $nameErr = $emailErr = $genderErr = $collegeErr = $branchErr = $passwordErr = $confpasswordErr  = "";
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $college= $_POST['college'];
    $branch= $_POST['branch'];
    $password= $_POST['password'];
     $confpassword= $_POST['confpassword'];
     
    if (empty($name)) 
    {
      $nameErr = "Name is required"; 

    }  
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Email is required";
    } 
    else if (empty($gender)) 
    {
      $genderErr = "Gender is required"; 

    }  
    else if (empty($college)) 
    {
      $collegeErr = "College is required"; 

    }  
    else if (empty($branch)) 
    {
      $branchErr = "Branch is required"; 

    }
    else if (empty($password)) 
    {
      $passwordErr = "Password is required"; 

    }
    else if (empty($confpassword)) 
    {
      $confpasswordErr = "Confirm Password is required"; 

    }

     else if ($confpassword != $password)
    {
      $confpasswordErr = " Confirm Password don't match"; 

    }
    else {
      $query="INSERT INTO registration (name,email,gender,branch,college,uname,pwd) VALUES ('$name','$email','$gender','$branch','$college','$email','$password') "; 

      $res=mysqli_query($conn,$query);
       $regmsg="Successful Registration!!!";

        header("Location:student.php?regmsg=".$regmsg);
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
                <FONT size=3 face=Arial><?php session_start();
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
          <form action="" method="post" name="regform">
          <table border=0 cellSpacing=0 cellPadding=10 width="100%" bgcolor=#ffffff align=center>
            <tbody>
              <tr>
                <td ></td>
                <td><font size=5><b>Student Registration Form</b></font></td>
              <td ><b>Already Registered? <a class="btn_sub" href="studentlogin.php">Sign In</a></b></td>

              </tr>
              <tr>

                <td align=right>
                </td>
                <td ></td>
              </tr>
               <?php 

                if(isset($_GET['regmsg'])){
                    echo $_GET['regmsg'];
                }
              ?>

              <tr>
                <td align=right><b><font color=#df2332 size=3>Name:</font>
                </b></td>
                <td>
                  <input type="text" name="name" class="form-control" Height="30px" placeholder="Name">
                  <span class="error"><?php echo $nameErr;?></span>
                </td>
              </tr>

              


               <tr>
                <td align=right><b><font color=#df2332 size=3>Email:</font>
                </b></td>
                <td>
                  <input type="text" name="email" class="form-control" Height="30px" placeholder="Email">
                  <span class="error"><?php echo $emailErr;?></span>
                </td>
              </tr>


                <tr>
                <td align=right><b><font color=#df2332 size=3>Gender:</font>
                </b></td>
                <td>
                  <input type="radio" name="gender" class="form-control" Height="30px" value="male" >M
                  <input type="radio" name="gender" class="form-control" Height="30px" value="female">F
                  <span class="error"><?php echo $genderErr;?></span>
                </td>
              </tr>


               <tr>
                <td align=right><b><font color=#df2332 size=3>College:</font>

                </b></td>
                <td>
                  <input type="text" name="college" class="form-control" Height="30px" placeholder="College">
                  <span class="error"><?php echo $collegeErr;?></span>
                </td>
              </tr>



              <tr>
                <td align=right><b><font color=#df2332 size=3>Branch:</font>
                </b></td>
                <td>
                  <input type="text" name="branch" class="form-control" Height="30px" placeholder="Branch">
                  <span class="error"><?php echo $branchErr;?></span>
                </td>
              </tr>
              <tr>
                <td align=right><b><font color=#df2332 size=3>Password:</font></b></td>
                <td>
                  <input type="password" name="password" class="form-control" Height="30px" placeholder="Password">
                  <span class="error"><?php echo $passwordErr;?></span>
                </td>
              </tr>

              <tr>
                <td align=right><b><font color=#df2332 size=3> Confirm Password:</font></b></td>
                <td>
                  <input type="password" name="confpassword" class="form-control" Height="30px" placeholder="Confirm Password">
                  <span class="error"><?php echo $confpasswordErr;?></span>
                </td>
              </tr>
          
                <tr align=center>
                    <td></td>
                <td align=left>

                 
                  <input type="submit" class="btn_sub" name="submit" value="Register" > 
                </td>
              </tr>
               
            </tbody>
          </table>
          </form>





          <br>
          </TABLE>
          
</body>
</html>

