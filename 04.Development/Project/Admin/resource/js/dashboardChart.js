
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "../Controller/monthlyOrderController.php",
        success: function (result) {
            let chartData = JSON.parse(result);
            // console.log(result);
            console.log(chartData);

            var totalOrderQty =[];
            var month =[];

            for(var data in chartData) {
                totalOrderQty.push(chartData[data].totalQuantity);
                month.push(chartData[data].month);
            }

            console.log(totalOrderQty);
            console.log(month);
            const data1 = {
                labels: month,
                datasets: [{
                    label: 'Monthly Order',
                    data:totalOrderQty ,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data1,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        }
    })
})
