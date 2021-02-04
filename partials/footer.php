<?php
/* Persisit System Settings On Brand */
$ret = "SELECT * FROM `system_settings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <footer class="main-footer">
        Copyright &copy; 2019 - <?php echo date('Y'); ?> <?php echo $sys->sys_name;?> | <?php echo $sys->sys_tagline;?>. A <a href="https://martdev.info" target="_blank">Martdevelopers Inc</a> Production.
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.1
        </div>
    </footer>

<?php
} ?>