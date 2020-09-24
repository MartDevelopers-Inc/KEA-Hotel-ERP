<?php
include('configs/pdoconfig.php');

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


if (!empty($_POST["RoomID"])) {
    $id = $_POST['RoomID'];
    $stmt = $DB_con->prepare("SELECT * FROM  rooms WHERE number = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['details']); ?>
<?php
    }
}
