<?php
/* 
    Montly Income For Hotel
 */

//Jan

$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jan' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Feb' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Mar' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Apr' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='May' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($may);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jun' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jul' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Aug' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Sep' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Oct' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Nov' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Dec' AND service_paid ='Resturant Sales' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();

/* 
    Montly Income For Room Reservations
 */

//Jan

$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jan' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jan);
$stmt->fetch();
$stmt->close();

//Feb
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Feb' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Feb);
$stmt->fetch();
$stmt->close();

//Mar
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Mar' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Mar);
$stmt->fetch();
$stmt->close();

//Apr
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Apr' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Apr);
$stmt->fetch();
$stmt->close();

//May
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='May' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($May);
$stmt->fetch();
$stmt->close();

//Jun
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jun' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jun);
$stmt->fetch();
$stmt->close();

//July
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Jul' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Jul);
$stmt->fetch();
$stmt->close();

//Aug
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Aug' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Aug);
$stmt->fetch();
$stmt->close();

//Sep
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Sep' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Sep);
$stmt->fetch();
$stmt->close();

//Oct
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Oct' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Oct);
$stmt->fetch();
$stmt->close();

//Nov
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Nov' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Nov);
$stmt->fetch();
$stmt->close();

//Dec
$query = "SELECT SUM(amt) FROM `payments` WHERE month_joined ='Dec' AND service_paid ='Reservations' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($Dec);
$stmt->fetch();
$stmt->close();

