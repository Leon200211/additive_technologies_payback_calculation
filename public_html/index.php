<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Расчет окупаемости</title>
</head>
<body>
    <form action="/calculate.php" method="post">
        <h1>Расчет окупаемости</h1>
        <h3>Станки</h3>
        <div>
            <label>Цена станка DED</label>
            <input name="ded_machine_price" type="number" value="185000000">
        </div>
        <br>
        <div>
            <label>Цена станка SLM</label>
            <input name="slm_machine_price" type="number" value="0">
        </div>

        <h3>Выбор типа расчета</h3>
        <button id="calculation_type_1_btn" onclick="calculation_type_1_active(); return false;">Расчет по стоимости работы часа</button>
        <button id="calculation_type_2_btn" onclick="calculation_type_2_active(); return false;">Расчет по стоимости производства кубического сантиметра</button>

        <input id="calculation_type_1_input" name="calculation_type_1_input" value="1" hidden>
        <input id="calculation_type_2_input" name="calculation_type_2_input" value="0" hidden>

        <div id="calculation_type_1">
            <br>
            <h4>Расчет по стоимости работы часа</h4>
            <div>
                Цена работы часа DED
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_1_ded_al_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_1_ded_st_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_1_ded_tn_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_1_ded_kh_h_price" type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input name="calculation_type_1_ded_al_percent" type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input name="calculation_type_1_ded_st_percent" type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input name="calculation_type_1_ded_tn_percent" type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input name="calculation_type_1_ded_kh_percent" type="number" value="25">
                </div>
            </div>
            <br>
            <div>
                Цена работы часа SLM
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_1_slm_al_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_1_slm_st_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_1_slm_tn_h_price" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_1_slm_kh_h_price" type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input name="calculation_type_1_slm_al_percent" type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input name="calculation_type_1_slm_st_percent" type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input name="calculation_type_1_slm_tn_percent" type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input name="calculation_type_1_slm_kh_percent" type="number" value="25">
                </div>
            </div>
        </div>

        <div id="calculation_type_2" style="display: none">
            <br>
            <h4>Расчет по стоимости производства кубического сантиметра</h4>
            <div>
                Цена производства см куб. DED
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_2_ded_al_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_2_ded_st_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_2_ded_tn_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_2_ded_kh_cube_price" type="number" value="0">
                </div>
                <br>
                Количество куб см в час
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_2_ded_al_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_2_ded_st_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_2_ded_tn_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_2_ded_kh_cube_per_hour" type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input name="calculation_type_2_ded_al_percent" type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input name="calculation_type_2_ded_st_percent" type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input name="calculation_type_2_ded_tn_percent" type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input name="calculation_type_2_ded_kh_percent" type="number" value="25">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div>
                Цена производства см куб. SLM
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_2_slm_al_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_2_slm_st_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_2_slm_tn_cube_price" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_2_slm_kh_cube_price" type="number" value="0">
                </div>
                <br>
                <br>
                Количество куб см в час
                <div>
                    <label>Аллюминиий</label>
                    <input name="calculation_type_2_slm_al_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input name="calculation_type_2_slm_st_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input name="calculation_type_2_slm_tn_cube_per_hour" type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input name="calculation_type_2_slm_kh_cube_per_hour" type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input name="calculation_type_2_ded_al_percent" type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input name="calculation_type_2_ded_st_percent" type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input name="calculation_type_2_ded_tn_percent" type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input name="calculation_type_2_ded_kh_percent" type="number" value="25">
                </div>
            </div>
        </div>

        <h3>Количество часов работы каждого станка</h3>
        <div>
            <label>Количество часов работы DED в день</label>
            <input name="ded_machine_work_hours" type="number" value="12">
        </div>
        <br>
        <div>
            <label>Количество часов работы SLM в день</label>
            <input name="slm_machine_work_hours" type="number" value="12">
        </div>

        <h3>Прочие настройки</h3>
        <div>
            <label>Колличество операторов</label>
            <input name="operator_count" type="number" value="4">
        </div>
        <div>
            <label>Зарплата одному оператору</label>
            <input name="operator_cost" type="number" value="100000">
        </div>

        <br>
        <br>
        <button type="submit">Расчитать стоимость</button>
    </form>

<script>
    function calculation_type_1_active() {
        document.getElementById('calculation_type_2').style.display = 'none';
        document.getElementById('calculation_type_1').style.display = 'block';

        document.getElementById('calculation_type_1_input').value = 1;
        document.getElementById('calculation_type_2_input').value = 0;
    }
    function calculation_type_2_active() {
        document.getElementById('calculation_type_1').style.display = 'none';
        document.getElementById('calculation_type_2').style.display = 'block';

        document.getElementById('calculation_type_1_input').value = 0;
        document.getElementById('calculation_type_2_input').value = 1;
    }
</script>

</body>
</html>