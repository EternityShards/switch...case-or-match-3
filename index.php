<?php

$menu = array(
    1 => array('name' => 'Паста "итальяно"', 'price' => 12.99),
    2 => array('name' => 'Щупальца кровоссоса в томатном соусе', 'price' => 15.49),
    3 => array('name' => 'Пицца из Маргариты', 'price' => 10.99),
    4 => array('name' => 'Чай улун', 'price' => 2.49),
    5 => array('name' => 'Шоколдный торт', 'price' => 6.99)
);


$orderItems = array();
$totalPrice = 0;


$orderSelection = isset($_GET['orderSelection']) ?
    $_GET['orderSelection'] : '2';


switch ($orderSelection) {
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
        $itemId = intval($orderSelection);
        $orderItems[] = $menu[$itemId];
        $totalPrice += $menu[$itemId]['price'];
        break;
    default:
        echo "Неверный выбор блюда!";
        break;
}

echo "Ваш заказ:\n";
foreach ($orderItems as $item) {
    echo "- {$item['name']} (\${$item['price']})\n";
}
echo "Итоговая стоимость: \${$totalPrice}";
?>