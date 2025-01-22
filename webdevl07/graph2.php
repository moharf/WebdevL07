<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h3>Expenditure Breakdown Pie Chart</h3>
    <canvas id="pieChart" width="500" height="250"></canvas>

    <script>
        const ctx = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Education', 'Healthcare', 'Infrastructure', 'Defense', 'Others'],
                datasets: [{
                    label: 'Expenditure Breakdown',
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false, // Disable responsiveness to retain fixed size
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            font: {
                                size: 10 // Smaller font size for legend
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Expenditure Breakdown (Mock Data)',
                        font: {
                            size: 14 // Smaller title font
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
