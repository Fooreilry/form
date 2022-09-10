<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div  class="conteiner"  >
        <form class="form" method="post" id="form" onsubmit="return false">
            <div class="switcher">
                <a href="" id="individual" class="switcher_text active">Физ.</a>
                <a href="" id="entity" class="switcher_text">Юр.</a>
            </div>
            <select name="product" class="select">
                <option class="option" >Товар 1</option>
                <option class="option" >Товар 2</option>
                <option class="option" >Товар 3</option>
                <option class="option" >Товар 4</option>
            </select>
            <input class="input" name="name" placeholder="Имя" type="text">
            <input class="input" name="surname" placeholder="Фамилия" type="text">
            <input class="input" name="address" placeholder="Адрес" type="text">
            <input id="contnumb" class="input" name="contractnumber" placeholder="Номер договора" type="text">
            <input class="input" name="phone" placeholder="Телефон" type="tel" maxlength="15">
            <input class="btn" type="submit" value="Отправить">
        </form>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="ajax.js"></script>
        <script src="switcher.js"></script>
</div>
<section class="table">
    <div class="conteiner">
        <table class="table_data">
            <tr class="table_row">
                <th class="table_items">ID</th>
                <th class="table_items">Товар</th>
                <th class="table_items">Имя</th>
                <th class="table_items">Фамилия</th>
                <th class="table_items">Адрес</th>
                <th class="table_items">№ договора</th>
                <th class="table_items">Телефон</th>
            </tr>
            <?
            require_once 'outputData.php'
            ?>
        </table>
    </div>
</section>
</body>
</html>