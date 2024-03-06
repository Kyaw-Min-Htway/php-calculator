<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
<style>
    .calculator {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-align: center;
}

.calculator h2 {
    margin-bottom: 20px;
}

.calculator input {
    width: 40%;
    height: 25%;
}

.calculator select {
    width: 100px;
    padding: 8px;
    margin-right: 10px;
    margin-top: 10px;
}

.calculator button {
    padding: 8px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.calculator button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
<div class="calculator">
    <h2>Simple Calculator</h2>
    <form action="calculator.php" method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <input type="text" name="num2" placeholder="Enter second number">
        <select name="operator">
            <option value="+">SUM</option>
            <option value="-">Minus</option>
            <option value="*">Multiple</option>
            <option value="/">Division</option>
        </select>
        <button type="submit" name="submit">Calculate</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 == 0){
                    echo "Cannot divide by zero";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                echo "Invalid operator";
        }
        echo "<p>Result: $result</p>";
    }
    ?>
</div>

</body>
</html>
