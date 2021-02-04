<?php
include('../config/pdoconfig.php');

//Room ID
if (!empty($_POST["RNumber"])) {
    $id = $_POST['RNumber'];
    $stmt = $DB_con->prepare("SELECT * FROM rooms WHERE number = :id ");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['id']); ?>
<?php
    }
}

//Room Price
if (!empty($_POST["RID"])) {
    $id = $_POST['RID'];
    $stmt = $DB_con->prepare("SELECT * FROM  rooms WHERE number = :id ");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['price']); ?>
<?php
    }
}

//Room Type
if (!empty($_POST["RCost"])) {
    $id = $_POST['RCost'];
    $stmt = $DB_con->prepare("SELECT * FROM  rooms WHERE number = :id ");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['type']); ?>
<?php
    }
}


/* Staff Details */
if (!empty($_POST["StaffNumber"])) {
    $id = $_POST['StaffNumber'];
    $stmt = $DB_con->prepare("SELECT * FROM staffs WHERE number = :id ");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['id']); ?>
<?php
    }
}

if (!empty($_POST["StaffID"])) {
    $id = $_POST['StaffID'];
    $stmt = $DB_con->prepare("SELECT * FROM staffs WHERE number = :id ");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['name']); ?>
<?php
    }
}
