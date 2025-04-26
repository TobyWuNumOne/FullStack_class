<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == 'add') {
        $result = $num1 + $num2;
    } elseif ($operation == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operation == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operation == 'divide') {
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = "無法除以零";
        }
    }

    echo "結果: " . $result;
} else {
    echo '
        <form method="POST" action="">
            <label for="num1">數字1:</label>
            <input type="number" id="num1" name="num1" required><br><br>
            <label for="num2">數字2:</label>
            <input type="number" id="num2" name="num2" required><br><br>
            <label for="operation">運算:</label>
            <select name="operation">
                <option value="add">加法</option>
                <option value="subtract">減法</option>
                <option value="multiply">乘法</option>
                <option value="divide">除法</option>
            </select><br><br>
            <input type="submit" value="計算">
        </form>
    ';
}
?>