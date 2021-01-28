<?php

/* 
    Number Of Hotel Types Per Room
 */

//1. Single Rooms

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Single Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($single);
$stmt->fetch();
$stmt->close();

//2. Double Rooms

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Double Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($double);
$stmt->fetch();
$stmt->close();


//3. Deluxe Rooms

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Deluxe Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($deluxe);
$stmt->fetch();
$stmt->close();

//4. Regular Suite

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Regular Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($regular);
$stmt->fetch();
$stmt->close();


//5. Penthouse Suites

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Penthouse Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($penthouse);
$stmt->fetch();
$stmt->close();


//6. Presidential Suites

$query = "SELECT COUNT(*) FROM `rooms` WHERE type ='Presidential Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($presidential);
$stmt->fetch();
$stmt->close();


/* 
    Income Amount As Per Room Type
*/

//1. Single Rooms

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Single Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Single);
$stmt->fetch();
$stmt->close();

//2. Double Rooms

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Double Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Double);
$stmt->fetch();
$stmt->close();


//3. Deluxe Rooms

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Deluxe Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Deluxe);
$stmt->fetch();
$stmt->close();

//4. Regular Suite

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Regular Suites' AND status ='Paid' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Regular);
$stmt->fetch();
$stmt->close();


//5. Penthouse Suites

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Penthouse Suites' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Penthouse);
$stmt->fetch();
$stmt->close();


//6. Presidential Suites

$query = "SELECT SUM(room_cost) FROM `reservations` WHERE room_type ='Presidential Suites' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Presidential);
$stmt->fetch();
$stmt->close();


/*
    Reservation Numbers As Per Room Category
 */


//1. Single Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Single Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resSingle);
$stmt->fetch();
$stmt->close();

//2. Double Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Double Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resDouble);
$stmt->fetch();
$stmt->close();


//3. Deluxe Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Deluxe Rooms' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resDeluxe);
$stmt->fetch();
$stmt->close();

//4. Regular Suite

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Regular Suites' AND status ='Paid' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resRegular);
$stmt->fetch();
$stmt->close();


//5. Penthouse Suites

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Penthouse Suites' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resPenthouse);
$stmt->fetch();
$stmt->close();


//6. Presidential Suites

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Presidential Suites' AND status ='Paid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($resPresidential);
$stmt->fetch();
$stmt->close();


/* Analytics Dashbaord Structure */

//1.Staffs
$query = "SELECT COUNT(*) FROM `staffs` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($staffs);
$stmt->fetch();
$stmt->close();

//Rooms
$query = "SELECT COUNT(*) FROM `rooms` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($rooms);
$stmt->fetch();
$stmt->close();

//Occupied Room
$query = "SELECT COUNT(*) FROM `rooms` WHERE status ='Occupied' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($rooms_occupied);
$stmt->fetch();
$stmt->close();

//vacant rooms
$query = "SELECT COUNT(*) FROM `rooms` WHERE status !='Occupied' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($rooms_vacant);
$stmt->fetch();
$stmt->close();

//Resturant Revenue
$query = "SELECT SUM(amt) FROM `payments` WHERE service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Resturant_Service);
$stmt->fetch();
$stmt->close();

//Accomodation Revenue
$query = "SELECT SUM(amt) FROM `payments` WHERE service_paid !='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($accomodation);
$stmt->fetch();
$stmt->close();


//Total Revenue
$total_revenue = $Resturant_Service + $accomodation;

/* Staff PAyments */
$query = "SELECT SUM(salary) FROM `payrolls` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($salary);
$stmt->fetch();
$stmt->close();


