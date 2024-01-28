<?php

function calculation_type_1() {
    $dedAlPercent = $_POST['ded_machine_work_hours'] * ($_POST['calculation_type_1_ded_al_percent'] / 100);
    $dedStPercent = $_POST['ded_machine_work_hours'] * ($_POST['calculation_type_1_ded_st_percent'] / 100);
    $dedTnPercent = $_POST['ded_machine_work_hours'] * ($_POST['calculation_type_1_ded_tn_percent'] / 100);
    $dedKhPercent = $_POST['ded_machine_work_hours'] * ($_POST['calculation_type_1_ded_kh_percent'] / 100);
    $dedAlPrice = $_POST['calculation_type_1_ded_al_h_price'] * $dedAlPercent * 300;
    $dedStPrice = $_POST['calculation_type_1_ded_st_h_price'] * $dedStPercent * 300;
    $dedTnPrice = $_POST['calculation_type_1_ded_tn_h_price'] * $dedTnPercent * 300;
    $dedKhPrice = $_POST['calculation_type_1_ded_kh_h_price'] * $dedKhPercent * 300;
    $dedRevenue = $dedAlPrice + $dedStPrice + $dedTnPrice + $dedKhPrice;

    $slmAlPercent = $_POST['slm_machine_work_hours'] * ($_POST['calculation_type_1_slm_al_percent'] / 100);
    $slmStPercent = $_POST['slm_machine_work_hours'] * ($_POST['calculation_type_1_slm_st_percent'] / 100);
    $slmTnPercent = $_POST['slm_machine_work_hours'] * ($_POST['calculation_type_1_slm_tn_percent'] / 100);
    $slmKhPercent = $_POST['slm_machine_work_hours'] * ($_POST['calculation_type_1_slm_kh_percent'] / 100);
    $slmAlPrice = $_POST['calculation_type_1_slm_al_h_price'] * $slmAlPercent * 300;
    $slmStPrice = $_POST['calculation_type_1_slm_st_h_price'] * $slmStPercent * 300;
    $slmTnPrice = $_POST['calculation_type_1_slm_tn_h_price'] * $slmTnPercent * 300;
    $slmKhPrice = $_POST['calculation_type_1_slm_kh_h_price'] * $slmKhPercent * 300;
    $slmRevenue = $slmAlPrice + $slmStPrice + $slmTnPrice + $slmKhPrice;

    $result = [
        'ded' => [
            'yearRevenue' => $dedRevenue,
            'al' => $dedAlPrice,
            'st' => $dedStPrice,
            'tn' => $dedTnPrice,
            'kh' => $dedKhPrice,
        ],
        'slm' => [
            'yearRevenue' => $slmRevenue,
            'al' => $slmAlPrice,
            'st' => $slmStPrice,
            'tn' => $slmTnPrice,
            'kh' => $slmKhPrice,
        ],
    ];

    return $result;
}

function calculation_type_2() {

}


$operatorsCost = $_POST['operator_count'] * $_POST['operator_cost'] * 12 * 10;
$dedPricePerYear = [];
$slmPricePerYear = [];
$yearProceeds = [];
$totalProceeds = [];

if ($_POST['calculation_type_1_input'] == 1) {
    $machineRevenue = calculation_type_1();
} elseif ($_POST['calculation_type_2_input'] == 2) {
    //$machineRevenue = calculation_type_2();
}

for ($year = 1; $year < 11; $year++) {
    $yearProceeds[$year] = $machineRevenue;
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Расчет окупаемости</title>

    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>

<a href="/">Назад</a>

<table>
    <thead>
        <tr>
            <th>Год</th>
            <th>DED алюминий</th>
            <th>DED сталь</th>
            <th>DED титан</th>
            <th>DED кобальт-хром</th>
            <th>SLM алюминий</th>
            <th>SLM сталь</th>
            <th>SLM титан</th>
            <th>SLM кобальт-хром</th>
            <th>Выручка  с DED</th>
            <th>Выручка  с SLM</th>
            <th>Общая выручка  за год</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $totalRevenue = 0;
        $dedRevenue = 0;
        $slmRevenue = 0;
        ?>
        <?php foreach ($yearProceeds as $key => $yearData): ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$yearData['ded']['al']?></td>
                <td><?=$yearData['ded']['st']?></td>
                <td><?=$yearData['ded']['tn']?></td>
                <td><?=$yearData['ded']['kh']?></td>
                <td><?=$yearData['slm']['al']?></td>
                <td><?=$yearData['slm']['st']?></td>
                <td><?=$yearData['slm']['tn']?></td>
                <td><?=$yearData['slm']['kh']?></td>
                <td><?=$yearData['ded']['yearRevenue']?></td>
                <td><?=$yearData['slm']['yearRevenue']?></td>
                <td><?=$yearData['ded']['yearRevenue']+$yearData['slm']['yearRevenue']?></td>
                <?php $totalRevenue += $yearData['ded']['yearRevenue']+$yearData['slm']['yearRevenue'] ?>
                <?php $dedRevenue += $yearData['ded']['yearRevenue'] ?>
                <?php $slmRevenue += $yearData['slm']['yearRevenue'] ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div>
    <div>Выручка за 10 лет - <?=$totalRevenue?></div>
    <div>Расходы на зарплату операторам - <?=$operatorsCost?></div>
    <div>Окупаемость ded станка - <?=$dedRevenue?> - <?=$_POST['ded_machine_price']?> = <?=$dedRevenue - $_POST['ded_machine_price']?></div>
    <div>Окупаемость slm станка - <?=$slmRevenue?> - <?=$_POST['slm_machine_price']?> = <?=$slmRevenue - $_POST['slm_machine_price']?></div>
</div>

<div>
    <div>Станок DED работал <?=$_POST['ded_machine_work_hours'] * 300 * 10?> часов</div>
    <div>Станок SLM работал <?=$_POST['slm_machine_work_hours'] * 300 * 10?> часов</div>
</div>

<h1>Итог</h1>
<div>
    <strong>Прибыль</strong> = Выручка <strong><?=$totalRevenue?></strong> - 30% (затраты на материаллы) - 20% прочие расходы - зарплаты сотрудникам <?=$operatorsCost?> = <strong><?=$totalRevenue / 2 - $operatorsCost * 2?></strong>
</div>

<div>
    Итого: Прибыль <?=$totalRevenue / 2 - $operatorsCost * 2?> - Затраты <?=$_POST['ded_machine_price'] + $_POST['slm_machine_price']?> = <?=($totalRevenue / 2 - $operatorsCost * 2) - ($_POST['ded_machine_price'] + $_POST['slm_machine_price'])?>
</div>

</body>
</html>
