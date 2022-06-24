
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
                        '#1A936F',
                        '#E84855',
                        '#3185FC',
                        '#F9DC5C',
                        '#8DE969',
                        '#725AC1',
                        '#C45AB3',
                        '#9A031E',
                        '#9A031E',
                        '#326273'
                    ],
                    borderColor: [
                        '#1A936F',
                        '#E84855',
                        '#3185FC',
                        '#F9DC5C',
                        '#8DE969',
                        '#725AC1',
                        '#C45AB3',
                        '#9A031E',
                        '#9A031E',
                        '#326273'
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
