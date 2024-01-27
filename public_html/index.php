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
    <form>
        <h1>Расчет окупаемости</h1>
        <h3>Станки</h3>
        <div>
            <label>Цена станка DED</label>
            <input type="number" value="185000000">
        </div>
        <br>
        <div>
            <label>Цена станка SLM</label>
            <input type="number" value="0">
        </div>

        <h3>Выбор типа расчета</h3>
        <button id="calculation_type_1_btn" onclick="calculation_type_1_active()">Расчет по стоимости работы часа</button>
        <button id="calculation_type_2_btn" onclick="calculation_type_2_active()">Расчет по стоимости производства кубического сантиметра</button>

        <div id="calculation_type_1">
            <br>
            <h4>Расчет по стоимости работы часа</h4>
            <div>
                Цена работы часа DED
                <div>
                    <label>Аллюминиий</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input type="number" value="25">
                </div>
            </div>
            <br>
            <div>
                Цена работы часа SLM
                <div>
                    <label>Аллюминиий</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input type="number" value="25">
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
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input type="number" value="25">
                </div>
            </div>
            <br>
            <div>
                Цена производства см куб. SLM
                <div>
                    <label>Аллюминиий</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Сталь</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Титан</label>
                    <input type="number" value="0">
                </div>
                <div>
                    <label>Кобальт-хром</label>
                    <input type="number" value="0">
                </div>
                <br>
                Процентное соотношение работы с металлами
                <div>
                    <label>Аллюминиий %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Сталь %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Титан %</label>
                    <input type="number" value="25">
                </div>
                <div>
                    <label>Кобальт-хром %</label>
                    <input type="number" value="25">
                </div>
            </div>
        </div>

        <h3>Количество часов работы каждого станка</h3>
        <div>
            <label>Количество часов работы DED</label>
            <input type="number" value="0">
        </div>
        <br>
        <div>
            <label>Количество часов работы SLM</label>
            <input type="number" value="0">
        </div>

        <h3>Прочие настройки</h3>
        <div>
            <label>Колличество операторов</label>
            <input type="number" value="4">
        </div>
        <div>
            <label>Зарплата одному оператору</label>
            <input type="number" value="100000">
        </div>

        <br>
        <br>
        <button>Расчитать стоимость</button>
    </form>

<script>
    function calculation_type_1_active() {
        document.getElementById('calculation_type_2').style.display = 'none';
        document.getElementById('calculation_type_1').style.display = 'block';
    }
    function calculation_type_2_active() {
        document.getElementById('calculation_type_1').style.display = 'none';
        document.getElementById('calculation_type_2').style.display = 'block';
    }
</script>

</body>
</html>