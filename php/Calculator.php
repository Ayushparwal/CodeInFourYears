<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <h4>Calculator</h4>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>
        <label for="operator">Operator:</label>
        <select name="operator" required>
            <option value="">Choose an operator</option>
            <option value="addition">+</option>
            <option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch ($operator) {
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
                if ($num2 == 0) {
                    echo "<p>Division by zero is not allowed.</p>";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "<p>Invalid operator.</p>";
                break;
        }

        if (isset($result)) {
            echo "<p>The result of $num1 $operator $num2 is: $result</p>";
        }
    }
    ?>
</body>

</html>