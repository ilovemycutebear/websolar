<?php

if (is_ajax()) {
    if (isset($_POST["YName"]) && !empty($_POST["YName"])) { //Checks if action value exists
    $UsrNm= $_POST["YName"];
        if (isset($_POST["PWord"]) && !empty($_POST["PWord"])) { //Checks if action value exists
                          $pWord= $_POST["PWord"];
                                  
                                   if (isset($_POST["action"]) && !empty($_POST["action"])) { //Checks if action value exists
                                                              $action = $_POST["action"];
                                                              switch($action) { //Switch case for value of action
                                                                case "go": DbQuery(); break;
             }
         }
    }
  }

}

//Function to check if the request is an AJAX request
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
function DbQuery(){
  include('databaseconn.php'); 
  if (isset($_POST["YName"]) && !empty($_POST["YName"])) { //Checks if action value exists
    $UsrNm = $_POST["YName"];
    } 
      if (isset($_POST["PWord"]) && !empty($_POST["PWord"])) { //Checks if action value exists
    $pWord = $_POST["PWord"];
    }  
    
//sql query start
$returna="";
     $sql1 = "SELECT COUNT(*) total FROM tblaccountz where UserNameTable ='".$UsrNm."' AND PassWordTable='".$pWord."'";
    $no1 = 0;
      $result1 = mysqli_query($conn, $sql1);
//$encode = array();

$data1 = mysqli_fetch_assoc($result1);



//$returna= $data;
echo $data1['total'];
}

function test_function(){
  $return = $_POST;
  
  //Do what you need to do with the info. The following are some examples.
  //if ($return["favorite_beverage"] == ""){
  //  $return["favorite_beverage"] = "Coke";
  //}
  //$return["favorite_restaurant"] = "McDonald's";
//sql query start
//     $sql1 = "SELECT * FROM tblftpfiledata where tblAreaID = ".$_POST["Areaid"]." LIMIT=".$_POST["nofrec"];
//    $no1 = 0;
//      $result1 = mysqli_query($conn, $sql1);
//$encode = array();

//while($row = mysqli_fetch_assoc($result1)) {
//   $encode[] = $row;
//}

//$return["json"] = json_encode($encode);
//echo json_encode($encode); 

//sql query
  
  $return["json"] = json_encode($return);
  echo json_encode($return);
}
?>