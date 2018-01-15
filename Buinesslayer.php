<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
</html>
<?php

include 'DBconnection.php';

$DBConnect= new DBConnection();
$DBConnect->connect($SERVER,$Connectioninfo,$link);
if(isset($_POST['Selection'])){
$var = $_POST['Selection'];
}
class Retrive{


  function getCustomers($var,$Connectioninfo,$link){


    $tsql= "SELECT ContactName FROM dbo.Customers";
    $getCustmrs=sqlsrv_query($link,$tsql);
    if($getCustmrs){
      echo "<h1> The Lastname of the Customer</h1>";
    echo '<table class="table table-dark"><tbody><thead>';
    while( $row = sqlsrv_fetch_array( $getCustmrs, SQLSRV_FETCH_NUMERIC))
    {

        $name = trim($row[0]);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        echo "<tr><td>" .$last_name. "\n";
         echo "<br/></td> </tr>";


    }
  }
echo '  </tr>
   </thead>
   <tbody>
     </tbody>
</table>';
}

function getCstmrsnum($var,$Connectioninfo,$link){
  $tsql= "SELECT COUNT(CustomerID) FROM dbo.Customers";
  $getCustmrs=sqlsrv_query($link,$tsql);
    echo "<h1> The number of Customers </h1>";
    echo '<div class="panel panel-default">
<div class="panel-body">';
  while( $row = sqlsrv_fetch_array( $getCustmrs, SQLSRV_FETCH_NUMERIC))
  {
       echo $row[0];

       echo "<br/>";

  }
  echo '</div></div><br/>';
}


}


$class =new Retrive();

if($var == 1){

$class-> getCustomers($var,$Connectioninfo,$link);

}






if($var == 2){

$class->getCstmrsnum($var,$Connectioninfo,$link);

}



?>
