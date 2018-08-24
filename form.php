<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Application_form</title>

<!--     
    http://phpfiddle.org
-->

<script type="text/javascript">
	
</script>

<style type="text/css">
	
</style>
</head>

<body>
<div style="margin: 30px 10%;">
<h3>Telecom Plans Application form</h3>
<form id="myform" name="myform" action="submit.php" method="post">

	<label>Plan Name</label> <input type="text" value="" size="30" maxlength="100" name="pname" id="" /><br /><br />
<label>Monthly Rental</label> <input type="text" value="" size="30" maxlength="100" name="mrental" id="" /><br /><br />
<label>Call charges</label> <input type="text" value="" size="30" maxlength="100" name="callcharges" id="" /><br /><br />
<label>SMS Charges</label> <input type="text" value="" size="30" maxlength="100" name="smscharges" id="" /><br /><br />
<label>Data charges</label> <input type="text" value="" size="30" maxlength="100" name="datacharges" id="" /><br /><br />
<label>Roaming charges</label> <input type="text" value="" size="30" maxlength="100" name="roamingcharges" id="" /><br /><br />

   <!-- <input type="radio" name="myradio[]" value="1" /> First radio
    //<input type="radio" checked="checked" name="myradio[]" value="2" /> Second radio<br /><br />

    //<input type="checkbox" name="mycheckbox[]" value="1" /> First checkbox
    //<input type="checkbox" checked="checked" name="mycheckbox[]" value="2" /> Second checkbox<br /><br />  -->
     Free-Internet
    <br>
    YES:<input type="radio" name="freeinternet" value="yes">
	NO:<input type="radio" name="freeinternet" value="no">
      <br>
     Free-Calls
   <br>
    YES:<input type="radio" name="freecalls" value="yes">
	NO:<input type="radio" name="freecalls" value="no">
   <br> 
    Free-Sms
 <br>
    YES:<input type="radio" name="freesms" value="yes">
	NO:<input type="radio" name="freesms" value="no">
    <br>
       <br>
       <br>
       <br>
	<button id="mysubmit" type="submit" name="send">Submit</button><br /><br />

</form>
</div>
  
    <?php

  if(isset($_POST['send']))
{
    $sql = "INSERT INTO plans (pname,mrental,callcharges,smscharges,datacharges,roamingcharges,freeinternet,freesms,freecalls)
    VALUES ('".$_POST["pname"]."','".$_POST["mrental"]."','".$_POST["callcharges"]."','".$_POST["smscharges"]."','".$_POST["datacharges"]."','".$_POST["roamingcharges"]."','".$_POST["freeinternet"]."','".$_POST["freesms"]."','".$_POST["freecalls"]."')";

    $result = mysqli_query($conn,$sql);
}

?>

</body>
</html>
