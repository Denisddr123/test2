<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>Test</title>

</head>
<body>
        <input id="number1" type="text" value="" size="5">

        <input id="number2" value="" type="text" size="5">
        <select id="select">
            <option value="amount">сложить</option>
            <option value="deduction">вычесть</option>
            <option value="multiply">умножить</option>
            <option value="share">разделить</option>
        </select>

        <button id="checkout">Посчитать</button>
        <div class="sum">0</div>

<script type="text/javascript">
    var num1, num2,
        checkout = document.getElementById('checkout'),
        sum = document.querySelector('.sum'),
        select = document.getElementById('select');

    checkout.addEventListener('click', function (e) {
        num1 = Number.parseInt(document.getElementById('number1').value),
        num2 = Number.parseInt(document.getElementById('number2').value);

        document.querySelector('.sum').innerHTML = 0;
        if (select.value==="amount"){
            document.querySelector('.sum').innerHTML = num1+num2;
        }
        else if(select.value==="deduction"){
            document.querySelector('.sum').innerHTML = num1-num2;
        }
        else if (select.value==="multiply"){
            document.querySelector('.sum').innerHTML = num1 * num2;
        }
        else if (select.value==="share"){
            document.querySelector('.sum').innerHTML = num1 / num2;
        }
        return false;
    });

</script>


</body>
</html>
