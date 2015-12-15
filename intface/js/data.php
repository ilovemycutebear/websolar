 <?php

/*if ((isset($_POST["Areaid"]))&&(isset($_POST["datefreq"]))&&(isset($_POST["nofrec"]))) 
{
 $Areaid=$_POST["Areaid"];
  $datefreq=$_POST["datefreq"];
  $nofrec=$_POST["nofrec"];
 $month = date('m');
  $day   = date('Y-m-d');
  $year = date('Y');
  $everyday="";

if($datefreq==01){
$sql1 = "SELECT * FROM tblftpfiledata where tblAreaID = ".$Areaid."AND slrDate=".$day." LIMIT=".$nofrec;
    $no = 0;
      $result1 = mysqli_query($conn, $sql1);
      $encode = array();

while($row = mysqli_fetch_assoc($result1)) {
   $encode[] = $row;
}

echo json_encode($encode);
}*/
clearstatcache();

$jqueryVariable = $_POST['variable'];
echo $jqueryVariable;

?>