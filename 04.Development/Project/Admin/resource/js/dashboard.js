// const ctx = document.getElementById("myChart").getContext("2d");

// $(document).ready(function () {
//     $.ajax({
//         type: "GET",
//         url: "../Controller/monthlyOrderController.php",
//         contentType: false,
//         processData: false,
//         cache: false,

//         success: function (res) {
//             var totalquantity = [];
//             var month = [];

//             for (var i in res) {
//                 totalquantity.push(res[i].totalQuantity);
//                 month.push(res[i].month);
//             }
//             var chartdata = {
//                 labels: 'Total Quantities',
//                 datasets: [
//                     {
//                         label: 'Total Quantities',
//                         backgroundColor: 'rgba(200, 200, 200, 0.75)',
//                         borderColor: 'rgba(200, 200, 200, 0.75)',
//                         hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
//                         hoverBorderColor: 'rgba(200, 200, 200, 1)',
//                         data: totalquantity
//                     }
//                 ]
//             };

//             var ctx = $("#mycanvas");

//             var barGraph = new Chart(ctx, {
//                 type: 'bar',
//                 data: chartdata
//             });
//         },
//         error: function (data) {
//             console.log(data);
//         }





    
//     });
// });

// const ctx = document.getElementById('myChart').getContext('2d');
// const myChart = new Chart(ctx, {
//     type: 'bar',
//     data: {
//         labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June',
//         'July', 'Aug', 'Sep','Oct', 'Nov', 'Dec'],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 15, 3, 5, 2,19,3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)',

//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)',
//                 'rgba(71, 71, 255,1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });
// $(document).ready(function () {
// sessionStorage.setItem("AdminName", adminname);
// });
