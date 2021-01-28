<!-- ChartJS -->
<script src="../public/plugins/chart.js/Chart.min.js"></script>
<!-- Analytics -->
<?php require_once('../partials/analytics.php'); ?>
<!-- Init Charts -->
<script>
    $(function() {

        /* Number Of Rooms As Per Room Type */
        var roomNumberChart = $('#NumberOfRoomsAsType').get(0).getContext('2d')
        var roomNumberChartData = {
            labels: [
                'Double',
                'Penthouse Suites',
                'Regular Suites',
                'Single ',
                'Presidential Suites',
                'Deluxe ',
            ],
            datasets: [{
                data: [<?php echo $double; ?>, <?php echo $penthouse; ?>, <?php echo $regular; ?>, <?php echo $single; ?>, <?php echo $presidential; ?>, <?php echo $deluxe; ?>],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var roomNumberChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }

        var donutChart = new Chart(roomNumberChart, {
            type: 'doughnut',
            data: roomNumberChartData,
            options: roomNumberChartOptions
        })


        /* Rooms Reserations As Per Room Types */
        var roomReservationsChart = $('#roomReservations').get(0).getContext('2d')
        var roomReservationsChartData = {
            labels: [
                'Double',
                'Penthouse Suites',
                'Regular Suites',
                'Single ',
                'Presidential Suites',
                'Deluxe ',
            ],
            datasets: [{
                data: [<?php echo $resDouble; ?>, <?php echo $resPenthouse; ?>, <?php echo $resRegular; ?>, <?php echo $resSingle; ?>, <?php echo $resPresidential; ?>, <?php echo $resDeluxe; ?>],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var roomReservationsChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }

        var pieChart = new Chart(roomReservationsChart, {
            type: 'pie',
            data: roomReservationsChartData,
            options: roomReservationsChartOptions
        })

        /* Rooms Income As Room Type */
        var RoomsIncomeChart = $('#RoomsIncome').get(0).getContext('2d')
        var RoomsIncomeChartData = {
            labels: [
                'Double',
                'Penthouse Suites',
                'Regular Suites',
                'Single ',
                'Presidential Suites',
                'Deluxe ',
            ],
            datasets: [{
                data: [<?php echo $Double; ?>, <?php echo $Penthouse; ?>, <?php echo $Regular; ?>, <?php echo $Single; ?>, <?php echo $Presidential; ?>, <?php echo $Deluxe; ?>],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var RoomsIncomeChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }

        var donutChart = new Chart(RoomsIncomeChart, {
            type: 'doughnut',
            data: RoomsIncomeChartData,
            options: RoomsIncomeChartOptions
        })


    })

</script>