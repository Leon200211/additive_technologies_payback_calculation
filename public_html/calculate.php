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

    return $dedAlPrice + $dedStPrice + $dedTnPrice + $dedKhPrice;
}

function calculation_type_2() {

}


$operatorsCost = $_POST['operator_count'] * $_POST['operator_cost'] * 12;;
$dedPricePerYear = [];
$slmPricePerYear = [];

for ($year = 1; $year < 11; $year++) {
    if ($_POST['calculation_type_1_input'] == 1) {
        $machinePricePerYear[$year] = calculation_type_1();
    } elseif ($_POST['calculation_type_2_input'] == 2) {
        //$machinePricePerYear[] = calculation_type_2();
    }



}


exit();
