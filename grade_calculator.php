<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = $_POST["score"];
        
        if ($score >= 90) {
            $grade = "A";
        } elseif ($score >= 80) {
            $grade = "B";
        } elseif ($score >= 70) {
            $grade = "C";
        } elseif ($score >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }
        
        echo "<p>Your grade is: $grade</p>";
    }
    ?>
    
    <form method="POST" action="">
        <label for="score">Enter your score:</label>
        <input type="text" name="score" id="score" required>
        <input type="submit" value="Calculate Grade">
    </form>
</body>
</html>
