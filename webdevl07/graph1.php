<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h3>Domestic Expenditure Bar Chart</h3>
    <canvas id="barChart" width="500" height="250"></canvas>

    <script>
        const ctx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2015', '2016', '2017', '2018', '2019'],
                datasets: [{
                    label: 'Expenditure (in billion USD)',
                    data: [2500, 2750, 3000, 3250, 3500],
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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
                        text: 'Domestic Expenditure',
                        font: {
                            size: 14 // Smaller title font
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            font: {
                                size: 10 // Smaller x-axis font
                            }
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 10 // Smaller y-axis font
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
