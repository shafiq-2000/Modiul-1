<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>


    <style>
        .mypara {
            width: 400px;
            height: 350px;
            background-color: gray;
            margin: auto;
            margin-top: 100px;
            box-shadow: 10px 10px 15px black;
            padding-top: 50px;
            padding-left: 50px;
        }
    </style>

</head>

<body>

    <?php
    $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        // Check if both input fields are filled
        if (!empty($num1) && !empty($num2)) {
            switch ($operation) {
                case 'addition':
                    $result = $num1 + $num2;
                    break;
                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }
        } else {
            $result = "Please enter both numbers";
        }
    }
    ?>

    <form class="mypara" method="POST" action="">
        <h1>Simple Calculator</h1>
        <label for="num1">Enter the first number:</label> <br>
        <input type="number" name="num1" id="num1" required><br><br>


        <label for="num2">Enter the second number:</label><br>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Select:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>
        <br><input type="submit" value="Calculate">
        <?php
        // Display the result
        if (!empty($result)) {
            echo "<p>Result: $result</p>";
        }
        ?>
    </form>

</body>

</html>