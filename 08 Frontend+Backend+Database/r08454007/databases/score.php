<?php

$t1_response=$_GET['t1_response'];
$t2_response=$_GET['t2_response'];
$t3_response=$_GET['t3_response'];

if ($t1_response == "diff") {
    $t1_correct=1;
} else {
    $t1_correct=0;
}
if ($t2_response == "diff") {
    $t2_correct=1;
} else {
    $t2_correct=0;
}
if ($t3_response == "same") {
    $t3_correct=1;
} else {
    $t3_correct=0;
}

$accuracy=($t1_correct+$t2_correct+$t3_correct)/3;


$t1_rt=$_GET['t1_rt'];
$t2_rt=$_GET['t2_rt'];
$t3_rt=$_GET['t3_rt'];

$avg_rt=($t1_rt+$t2_rt+$t3_rt)/3;



$acc = (float)$accuracy;
$rt = (float)$avg_rt;


header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=output.csv");
//$content = "Column1,tColumn2\nnRow1-1,nRow1-2";
//$content = mb_convert_encoding($acc ,$rt);

echo "accuracy: \"$accuracy\" ";
  
echo "average reaction time: \"$avg_rt\"";
exit;
//$link = mysqli_connect('localhost','root','','hw08');

//mysqli_query($link, "SET NAMES 'utf8'");

//mysqli_select_db($link,'hw08'); 

//$sql = "INSERT INTO subject_table(accuracy,avg_rt) VALUES('$accuracy','$avg_rt')";

//mysqli_query($link,$sql);
//mysqli_close($link); 

echo "Your accuracy is \"$accuracy\" <br>";
echo "Your average reaction time is \"$avg_rt\" ms";

?>