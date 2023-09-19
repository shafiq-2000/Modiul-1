<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Number Checker</title>
</head>
<body>
    <h1>Even or Odd Number Checker</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        
        if ($number % 2 == 0) {
            echo "<p>$number is an even number.</p>";
        } else {
            echo "<p>$number is an odd number.</p>";
        }
    }
    ?>
    
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
