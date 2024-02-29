<?php
$a = 0;
$b = 0;
echo "Начало цикла, a = $a, b = $b<br />";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b<br />";
}
echo "Конец цикла, и значение a = $a, а значение b = $b";

echo "<br>"; 
$a = 0;
$b = 0;
$i = 0;

echo "Начало цикла, a = $a, b = $b<br />";
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b<br />";
    $i++;
}
echo "Конец цикла, и значение a = $a, а значение b = $b";

echo "<br>"; 

// Определение массива $arr
$arr = array();

// Генерация массива случайных чисел от 1 до 100
for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 100);
}

// Вывод полученного массива на экран
echo "Сгенерированный массив: ";
echo implode(', ', $arr);
?>

<?php
// Определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1, // id
        "transaction_date" => "2019-01-01", // дата
        "transaction_amount" => 100.00, // сумма транзакции
        "transaction_description" => "Payment for groceries", // описание
        "merchant_name" => "SuperMart", // название организации
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    // Добавляем данные для еще 2 транзакций
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-03-20",
        "transaction_amount" => 120.00,
        "transaction_description" => "Shopping spree",
        "merchant_name" => "Fashion Outlet",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2021-05-10",
        "transaction_amount" => 50.25,
        "transaction_description" => "Coffee with colleagues",
        "merchant_name" => "Coffee Shop",
    ],
];

?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Транзакции</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php foreach ($transactions as $transaction) { ?>
        <tr>
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['transaction_date']; ?></td>
            <td><?php echo $transaction['transaction_amount']; ?></td>
            <td><?php echo $transaction['transaction_description']; ?></td>
            <td><?php echo $transaction['merchant_name']; ?></td>
        </tr>
    <?php } ?>
</table>

<?php
// Определение пользовательских функций
function calculateTotalAmount($transactions) {
    $total = 0;
    foreach ($transactions as $transaction) {
        $total += $transaction['transaction_amount'];
    }
    return $total;
}

function calculateAverage($transactions) {
    $total = calculateTotalAmount($transactions);
    $count = count($transactions);
    return $total / $count;
}

function mapTransactionDescriptions($transactions) {
    return array_map(function($transaction) {
        return $transaction['transaction_description'];
    }, $transactions);
}

// Вывод значений функций на экран
echo "Общая сумма всех транзакций: $" . calculateTotalAmount($transactions) . "<br>";
echo "Средняя сумма транзакции: $" . calculateAverage($transactions) . "<br>";
echo "Описания транзакций: " . implode(", ", mapTransactionDescriptions($transactions));
?>

