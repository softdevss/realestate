<?php 

include "db_connect.php";

function filterData(&$str){

    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);

    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    

}

$filename = "loanlist" . date('Y-m-d') . ".xls";

$fields = array ('id', 'ref_no', 'loan_type_id', 'borrower_id', 'purpose', 'amount', 'plan_id', 'status', 'date_released', 'date_created');

$exceldata = implode ("\t", array_values($fields)) . "\n";



$query = $conn->query("SELECT * FROM loan_list ORDER BY id ASC");

if($query->num_rows > 0){
     
    while($row = $query->fetch_assoc()){

        $status = ($row['status'] == 1)?'confirm':'inactive';
        $lineData = array($row['id'], $row['ref_no'], $row['loan_type_id'], $row['borrower_id'], $row['purpose'], $row['amount'], $row['plan_id'], $row['status'], $row['date_released'], $row['date_created']);
    
        array_walk($lineData, 'filterData');
        $exceldata = implode("\t", array_values($lineData)) . "\n";
    }
}else{

    $exceldata .= 'No record found.....'. "\n";
}

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

echo $exceldata;

exit;

?>