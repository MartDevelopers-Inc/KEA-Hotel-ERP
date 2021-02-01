<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- App -->
<script src="../public/js/back_office.min.js"></script>
<!-- Dashboard  -->
<script src="../public/js/pages/dashboard2.js"></script>
<!-- overlayScrollbars -->
<script src="../public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="../public/plugins/datatables/jquery.dataTables.js"></script>
<script src="../public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Init Data Tables -->
<script>
    $(function() {
        $("#dt-1").DataTable();
        $('#dt-2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<!-- Custom File Uploads -->
<script src="../public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
</script>
<!-- Select -->
<script src="../public/plugins/select2/js/select2.full.min.js"></script>
<script>
    var ss = $(".basic").select2({
        tags: true,
    });
</script>
<!-- Room Details Async Function -->
<script>
    function getRoomDetails(val) {
        $.ajax({

            type: "POST",
            url: "../partials/ajax.php",
            data: 'RNumber=' + val,
            success: function(data) {
                //alert(data);
                $('#RID').val(data);
            }
        });

        $.ajax({

            type: "POST",
            url: "../partials/ajax.php",
            data: 'RID=' + val,
            success: function(data) {
                //alert(data);
                $('#RCost').val(data);
            }
        });

        $.ajax({

            type: "POST",
            url: "../partials/ajax.php",
            data: 'RCost=' + val,
            success: function(data) {
                //alert(data);
                $('#RType').val(data);
            }
        });

    }
</script>
<!-- Print Contents In A Div  -->
<script>
    function printContent(el) {
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
</script>