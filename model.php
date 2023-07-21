<?php
include "/xampp/htdocs/rr_partner/conn.php";

error_reporting(0);
session_start();
// create session com id
$uploadDir = '/xampp/htdocs/rr_partner/admin/uploads/employee/'; // Directory to store the uploaded files

$result = array();

// ################### basic salary #############################
if ($_REQUEST['basic_salary']==true) {
    parse_str($_REQUEST['values'],$basic_salary);
    $fname = $conn->real_escape_string($reg['fname']);

    $slectEmail = $conn->real_escape_string($basic_salary['slectEmail']);
    $occupation = $conn->real_escape_string($basic_salary['occupation']);
    $memberId = $conn->real_escape_string($basic_salary['memberId']);
    $epf = $conn->real_escape_string($basic_salary['epf']);
    $department = $conn->real_escape_string($basic_salary['department']);
    $salary = $conn->real_escape_string($basic_salary['salary']);
    $aditions = $conn->real_escape_string($basic_salary['aditions']);
    $deduction = $conn->real_escape_string($basic_salary['deduction']);

    $result['basicSalary']=$salary;
    $result['basic']='ok';



}






echo json_encode($result);
