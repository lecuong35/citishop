@extends('Layouts.purchase-layout')

@section('content')

    <div id="container"></div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>


    <script type="text/javascript">
        var userData = JSON.parse(' <?php echo $sales ?>');
        var returnedSales = JSON.parse(' <?php echo $returned ?>');
        let chartData = Array(12).fill(0);
        let returned = Array(12).fill(0);
        userData.forEach(element => {
            let index = parseInt(element.month);
            chartData[index-1] = parseInt(element.sum);
        });

        returnedSales.forEach(element => {
            let index = parseInt(element.month);
            returned[index-1] = parseInt(element.sum);
        });
        
        Highcharts.chart('container', {
            title: {
                text: 'Doanh thu năm 2023'
            },
            subtitle: {
                text: 'Doanh thu từ các bài đăng'
            },
            xAxis: {
                categories: ['Tháng 1','Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9',
                    'Tháng 10', 'Tháng 11', 'Tháng 12'
                ]
            },
            yAxis: {
                title: {
                    text: 'Doanh thu (nghìn đồng)'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [
                {
                    name: 'Doanh số',
                    data: chartData
                }, 
                {
                    name: 'Bị trả',
                    data: returned
                }, 
            ],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });

    </script>
@endsection

<style>
    #sales {
        border-bottom: #008f79 solid 1px;
        color: #008f79;
    }

 table {
    display: none;
 }

 .highcharts-credits{
    display: none;
 }
</style>

