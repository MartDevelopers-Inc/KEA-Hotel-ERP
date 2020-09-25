<?php
include('configs/pdoconfig.php');

//Room ID
if (!empty($_POST["roomNumber"])) {
    $id = $_POST['roomNumber'];
    $stmt = $DB_con->prepare("SELECT * FROM rooms WHERE number = :id");
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
if (!empty($_POST["RoomID"])) {
    $id = $_POST['RoomID'];
    $stmt = $DB_con->prepare("SELECT * FROM  rooms WHERE number = :id");
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
if (!empty($_POST["roomCost"])) {
    $id = $_POST['roomCost'];
    $stmt = $DB_con->prepare("SELECT * FROM  rooms WHERE number = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['type']); ?>
<?php
    }
}
