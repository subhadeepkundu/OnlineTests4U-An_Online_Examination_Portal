<?php include('db_connect.php');
session_start(); 

if (!isset($_SESSION["stuemail"])) {
    header("location: studentlogin.php");
    exit; 
}
  $examid = $_GET['examid']; 
  $stuid = $_SESSION['stuid']; 
?>
<style type="text/css">
  .btn_sub{
    display: block;
    width: 145px;
    background: #4E9CAF;
    padding: 10px;
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
          
        </TR>
          <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%">
            <TR>
              <TD bgColor=#617c58>
                
              </TD>
            </TR>
          </TABLE>
   
          


        <TABLE border=0 cellSpacing=0 cellPadding=10 width="100%">
          <TR>
            &nbsp; 
          
                 
  
               </P>
      </TD>
      <P> </P>
      <P></P>
      <TD bgcolor=#ffffff vAlign=top width="61%" align=left>
        <P>
          <BR>
          
            <B>
              
            </B>
             
          </FONT><center><a  class="btn_sub" href="result.php?stuid=<?php echo $stuid;?>&examid=<?php echo $examid;?>" id="btncancel" > Click here for result</a></center><br>
          <br><center><img src="thanks.jpg" width="650" height="200"></center>
            
            






          <br>
          </TABLE>
          </form>
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