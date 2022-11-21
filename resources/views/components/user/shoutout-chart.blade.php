<div class="shadow-lg rounded-lg overflow-hidden">
    <canvas id="chartBar1" ></canvas>
</div>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
    let today = new Date();
    let month = today.getMonth();
    let monthNames = ['Jan ', 'Feb ', 'Mar ', 'April ', 'May ', 'Ju ', 'Jul ', 'Aug ', 'Sep ', 'Oct ', 'Nov ', 'Dec '];
    const labelsBarChart = [
        monthNames[month-1] + (today.getDate()-5).toString(),
        today.getDate() - 4,
        today.getDate() - 3,
        today.getDate() - 2,
        today.getDate() - 1,
        "Today",
    ];
    const dataBarChart1 = {
        labels: labelsBarChart,
        datasets: [
            {
                backgroundColor: "{{$color}}",
                borderColor: "{{$color}}",
                data: [0, 10, 5, 2, 50, 30, 45],
            },
        ],
    };

    const configBarChart1 = {
        type: "bar",
        data: dataBarChart1,
        options: {},
    };

    var chartBar1 = new Chart(
        document.getElementById("chartBar1"),
        configBarChart1,
    );
</script>
