<?php

$data = [
    "Food and Beverage" => 25000,
    "Shopping" => 22000,
    "Accommodation" => 8000,
    "Transport" => 4500,
    "Others" => 6000
];

$labels = array_keys($data);
$values = array_values($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Pie Chart: Components of Expenditure</h1>
    <canvas id="pieChart"></canvas>
    <script>
        const ctx = document.getElementById('pieChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($values); ?>,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                }]
            }
        });
    </script>
</body>
</html>
