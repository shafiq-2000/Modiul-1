<!DOCTYPE html>
<html>
<head>
    <title>Celsius to Fahrenheit Converter</title>
</head>
<body>
    <h1>Celsius to Fahrenheit Converter</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        $fahrenheit = ($celsius * 9/5) + 32;
        echo "<p>$celsius &deg;C is equal to $fahrenheit &deg;F</p>";
    }
    ?>
    
    <form method="POST" action="">
        <label for="celsius">Enter Celsius temperature:</label>
        <input type="text" name="celsius" id="celsius" required>
        <input type="submit" value="Convert">
    </form>
</body>
</html>
