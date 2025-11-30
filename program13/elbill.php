<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>POS Electricity Bill Form</h2>

<?php
// Set a fixed tariff
$tariff = 7.50;

// Check if form is submitted
if (isset($_POST['calculate'])) {

    // Get units from user
    $units = $_POST['units'];

    // Check valid number
    if ($units == "" || $units < 0) {
        echo "<p style='color:red;'>Please enter valid units!</p>";
    } else {

        // Calculate bill
        $totalBill = $units * $tariff;

        // Display result
        echo "<h3>Electricity Bill Summary</h3>";
        echo "Units Consumed: " . $units . "<br>";
        echo "Tariff (per unit): ₹" . $tariff . "<br>";
        echo "<strong>Total Bill: ₹" . number_format($totalBill, 2) . "</strong><br><br>";
    }
}
?>

<!-- Input Form -->
<form method="POST">
    Enter Units Consumed:<br>
    <input type="number" name="units" placeholder="e.g. 120"><br><br>

    <input type="submit" name="calculate" value="Generate Bill">
</form>

</body>
</html>

