<?php
/* 
    Montly Income For Hotel
 */

//Jan

$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jan' AND service_paid = 'Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Feb' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Mar' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Apr' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='May' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($may);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jun' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jul' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Aug' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Sep' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Oct' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Nov' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Dec' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();

/* 
    Montly Income For Room Reservations
 */

//Jan

$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jan' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Feb' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Mar' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Apr' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='May' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($May);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jun' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Jul' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Aug' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Sep' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Oct' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Nov' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT SUM(amt) FROM `payments` WHERE month ='Dec' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Dec);
$stmt->fetch();
$stmt->close();


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
    Reservations As Per Room Type
*/

//1. Single Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Single Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Single);
$stmt->fetch();
$stmt->close();

//2. Double Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Double Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Double);
$stmt->fetch();
$stmt->close();


//3. Deluxe Rooms

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Deluxe Rooms' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Deluxe);
$stmt->fetch();
$stmt->close();

//4. Regular Suite

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Regular Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Regular);
$stmt->fetch();
$stmt->close();


//5. Penthouse Suites

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Penthouse Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Penthouse);
$stmt->fetch();
$stmt->close();


//6. Presidential Suites

$query = "SELECT COUNT(*) FROM `reservations` WHERE room_type ='Presidential Suites' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Presidential);
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

