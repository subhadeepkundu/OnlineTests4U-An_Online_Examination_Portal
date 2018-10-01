<?php include('db_connect.php');
session_start();
date_default_timezone_set('Asia/Kolkata');


if (!isset($_SESSION["stuemail"])) {
    header("location: studentlogin.php");
    exit; 
}

  $examid = $_GET['examid']; 
  $time = $_GET['starttime']; 
  $timef = substr($time, 4,-31); 
  $timen = substr($timef,0,6).','.substr($timef,6,14);


  if(isset($_POST['btnSubmit'])){
   // echo "string"; exit();
     $qid=$_POST['qid'];
     $opid=$_POST['option'] ;
     $merge = array_combine($qid,$opid);
      foreach($merge as $option_num => $option_val ){
   // echo $option_num." ".$option_val."<br>"; 
     $query="INSERT INTO stu_ans (stuid,ans,ques,examid) VALUES ('".$_SESSION['stuid']."','$option_val','$option_num','$examid')"; 
    $res=mysqli_query($conn,$query); 
    }
    header("Location:thanks.php?examid=$examid");
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
    text-decoration: none;
}

.tblexam {
  border-collapse: collapse;
  width: 100%;
}

.tblexam th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f4b342;
  color: white;
}

.tblexam td {
  border: 1px solid #ddd;
  padding: 8px;
}
</style>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script src="js/jquery.min.js"></script> 
    <script src="js/jquery-ui.min.js"> </script> 
</head>
<body onload="examdone();">
  <?php 


    $results = mysqli_query($conn, "SELECT * FROM question WHERE examid='".$examid."'");?> 

    <TABLE border=10 cellSpacing=0 cellPadding=0 width="100%" bgColor=#ffffff>
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
                </TABLE>

              </TD>
            </TR>
          </TABLE>

    <?php 
    $results3 = mysqli_query($conn, "SELECT * FROM examdetails WHERE examid='".$examid."' "); 
    $rowf3 = mysqli_fetch_array($results3);
    $tlimit=$rowf3['tlimit'];
    ?>
    <B>TIME REMAINING &nbsp;</B>
  <form id="frm_submit" name="frm_submit" method="POST" action="">
                
                   <span id="time"></span>
                   <input type="hidden" id="time1" name="time1" value="<?php echo $tlimit ?>">
                   <input type="hidden" id="difftime" name="difftime" value="">
          <TABLE bgcolor=#ffffff border=0 cellSpacing=0 cellPadding=0 class="tblexam">
           

            <?php 
            $count=1;
            $cnt=1;


            while ($rowf = mysqli_fetch_array($results)) { ?>
            <TR>
              <TH>
                <input type="hidden" name="qid[]" value="<?php echo $rowf['quesid']; ?>">
                Q <?php echo $cnt++; ?>. <?php echo $rowf['question']; ?>
              </TH>
            </TR>
            <TR>
             
              <TD>
                <input type="radio" name="option[<?php echo $count; ?>]" value="a" >A. <?php echo $rowf['ans_a']; ?>
              </TD>
            </TR>
            <TR>
              <TD>
                <input type="radio" name="option[<?php echo $count; ?>]" value="b" >B. <?php echo $rowf['ans_b']; ?>
              </TD>
            </TR>
            <TR>
              <TD>
                 <input type="radio" name="option[<?php echo $count; ?>]" value="c" >C. <?php echo $rowf['ans_c']; ?>
              </TD>
            </TR>
            <TR>
              <TD>
                <input type="radio" name="option[<?php echo $count; ?>]" value="d" > D. <?php echo $rowf['ans_d']; ?>
              </TD>

            </TR> 
             <TR>
              <TD>
                <input type="radio" style="visibility: hidden;" name="option[<?php echo $count; ?>]" value="n" checked >
              </TD>

            </TR>
         
             <?php $count++;
              }?>
           
              <tr height="40">
               <td></td>
             </tr>
          </TABLE> 
          <button class="btn_sub"  id="btnSubmit" type="submit" name="btnSubmit">Submit</button>
          </FORM>
        </TD>
      </TR>
     
    </TABLE>


<script type="text/javascript">

function examdone(){
//var start = Date.now();
 var tMinutes = document.getElementById("time1").value;
    var res = tMinutes.split(":");
    var pSeconds=0;
      if (res[1]==00 && res[0]!=00) {
         pSeconds=res[0]*60*60;
      }
      else if (res[1]==00 && res[0]==00) {
         pSeconds=res[2];
      }
      else{
         pSeconds=res[1]*60;
      }

      var mins = 1000 * pSeconds;


setTimeout(function(){
/*document.getElementById("btnSubmit").click();*/
  },mins);

}
</script>
  <script>
// Set the date we're counting down to

var tMinutes = document.getElementById("time1").value;
    var res = tMinutes.split(":");
    var pSeconds=0;
      if (res[1]==00 && res[0]!=00) {
         pSeconds=res[0]*60*60;
      }
      else if (res[1]==00 && res[0]==00) {
         pSeconds=res[2];
      }
      else{
         pSeconds=res[1]*60;
      }

      var mins = 1000 * pSeconds;
     var t = "<?php echo $timen ?>";

/*console.log(<?php echo $time ?>);*/
var countDownDate = new Date(t).getTime()+mins;
//alert (countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML =  hours + ":" + minutes + ":" + seconds;

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
     document.getElementById("time").innerHTML="TIME OVER";
    document.getElementById("btnSubmit").click();
  }
}, 1000);
</script>

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

<!-- <script language="JavaScript">
javascript:window.history.forward(1);
</script> -->
</body>
</html>