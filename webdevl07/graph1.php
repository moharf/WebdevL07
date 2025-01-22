<?php
include 'db_config.php';

$query = "SELECT component, expenditure FROM domestic_expenditure";
$result = $conn->query($query);

$components = [];
$expenditures = [];

while ($row = $result->fetch_assoc()) {
    $components[] = $row['component'];
    $expenditures[] = $row['expenditure'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Bar Chart: Components of Expenditure</h1>
    <canvas id="barChart"></canvas>
    <script>
        const ctx = document.getElementById('barChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($components); ?>,
                datasets: [{
                    label: 'Expenditure (in RM)',
                    data: <?php echo json_encode($expenditures); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                }]
            }
        });
    </script>
</body>
</html>
