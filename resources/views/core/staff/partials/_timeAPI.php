<?php
$login_id = $_SESSION['id'];
$ret = "SELECT  * FROM  staffs  WHERE id=?";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param('i', $login_id);
$stmt->execute(); //ok
$res = $stmt->get_result();
//$cnt=1;
while ($row = $res->fetch_object()) {
    // time function to get day zones ie morning, noon, and night.
    $t = date("H");

    if ($t < "10") {
        $d_time = "Good Morning";
    } elseif ($t < "15") {

        $d_time =  "Good Afternoon";
    } elseif ($t < "20") {

        $d_time =  "Good Evening";
    } else {

        $d_time = "Good Night";
    }
?>
    <li><a href="javascript:void(0);" class="tabmenu"><?php echo $d_time; ?> <?php echo $row->name; ?></a></li>
    </h3>
<?php } ?>