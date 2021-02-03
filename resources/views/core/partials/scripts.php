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
<!-- Reportings Data Tables -->
<script src="../public/plugins/table/datatable/datatables.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="../public/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="../public/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="../public/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="../public/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script>
    $('#reportsa').DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                {
                    extend: 'print',
                    className: 'btn'
                }

            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
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
<script>
    /* Room Details Asyc */
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

    function getStaffDetails(val) {
        $.ajax({

            type: "POST",
            url: "../partials/ajax.php",
            data: 'StaffNumber=' + val,
            success: function(data) {
                //alert(data);
                $('#StaffID').val(data);
            }
        });

        $.ajax({

            type: "POST",
            url: "../partials/ajax.php",
            data: 'StaffID=' + val,
            success: function(data) {
                //alert(data);
                $('#StaffName').val(data);
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