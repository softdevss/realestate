<?php 

include "db_connect.php";

function filterData(&$str){

    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);

    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    

}

$filename = "payment-list" . date('Y-m-d') . ".xls";

$fields = array('ID', 'LOAN_REFERENCE NO', 'PAYEE', 'AMOUNT', 'PENALTY', 'OVER_DUE', 'DATE_CREATED');

$excelData = implode("\t", array_values($fields)) . "\n";



$query = $conn->query("SELECT * FROM payments ORDER BY id ASC");

if($query->num_rows > 0){
     
    while($row = $query->fetch_assoc()){

        $status = ($row['overdue'] == 1)?'confirm':'inactive';
        $lineData = array($row['id'], $row['loan_id'], $row['payee'], $row['amount'], $row['penalty_amount'], $row['overdue'], $row['date_created']);
    
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
}else{

    $excelData .= 'No record found.....'. "\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

echo $excelData;

exit;

?>