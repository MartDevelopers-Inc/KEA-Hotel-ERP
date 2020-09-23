<?php
//Verified
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE doc_status = 'Verified' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($verified_medics);
$stmt->fetch();
$stmt->close();

//Unverified
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE doc_status != 'Verified' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($unverified);
$stmt->fetch();
$stmt->close();

//Total Medical Experts
$query = "SELECT COUNT(*) FROM `medical_experts` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($total_medics);
$stmt->fetch();
$stmt->close();

//all clients
$query = "SELECT COUNT(*) FROM `members` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($members);
$stmt->fetch();
$stmt->close();

//Gold Members
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Gold Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($gold);
$stmt->fetch();
$stmt->close();

//Silver
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Silver Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($silver);
$stmt->fetch();
$stmt->close();

//Bronze 
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Bronze Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($bronze);
$stmt->fetch();
$stmt->close();

//Consultations
$query = "SELECT COUNT(*) FROM `consultations`  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($consultations);
$stmt->fetch();
$stmt->close();

//Prescriptions
$query = "SELECT COUNT(*) FROM `prescriptions`  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($prescriptions);
$stmt->fetch();
$stmt->close();



/* 
    Montly Member Enrollments
 */

//Jan

$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Jan' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Feb' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Mar' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Apr' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='May' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($may);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Jun' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Jul' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Aug' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Sep' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Oct' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Nov' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT COUNT(*) FROM `members` WHERE month_joined ='Dec' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();

/* End Member Enrollment Per Month */

/* Medical Expters Enrollment Per Month */

//Jan

$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Jan' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Feb' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Mar' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Apr' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='May' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($May);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Jun' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Jul' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Aug' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Sep' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Oct' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Nov' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE month_joined ='Dec' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Dec);
$stmt->fetch();
$stmt->close();

/* End Doc */


/* Revenue Income as membership packages */

//Gold Package
$query = "SELECT SUM(pay_amt) FROM `membership_payments` WHERE member_package ='Gold Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($gold_payment);
$stmt->fetch();
$stmt->close();

//Silver Package
$query = "SELECT SUM(pay_amt) FROM `membership_payments` WHERE member_package ='Silver Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($silver_payment);
$stmt->fetch();
$stmt->close();

//Bronze Package
$query = "SELECT SUM(pay_amt) FROM `membership_payments` WHERE member_package ='Bronze Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($bronze_payment);
$stmt->fetch();
$stmt->close();

//Total Payments
$query = "SELECT SUM(pay_amt) FROM `membership_payments` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($membership_payment);
$stmt->fetch();
$stmt->close();

//Tax Computation
/* Assume there is a fixed taxation ogf 14% */
$taxrate = 0.14;
$income = $membership_payment;
$tax = $taxrate * $income;
$acc_bal = $income - $tax;