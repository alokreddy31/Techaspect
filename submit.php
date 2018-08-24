 <?php






    $sql = "INSERT INTO plans (pname,mrental,callcharges,smscharges,datacharges,roamingcharges,freeinternet,freesms,freecalls)
    VALUES ('".$_POST["pname"]."','".$_POST["mrental"]."','".$_POST["callcharges"]."','".$_POST["smscharges"]."','".$_POST["datacharges"]."','".$_POST["roamingcharges"]."','".$_POST["freeinternet"]."','".$_POST["freesms"]."','".$_POST["freecalls"]."')";

    $result = mysqli_query($conn,$sql);
}
 ?>