<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/dap.ico" type="image/x-icon">
    <link rel="package" href="package.json">
    <title>Vinogradova Olesya</title>
</head>

<body class="d-flex flex-column">
    <div class="col-12 row block_form mb-3 d-flex flex-column container-lg p-2 mt-2 bg-light order-1 order-md-2" id="forma">
        <div class="top_bot">
            <form method="POST">
            <label>
                Имя:<br />
                <input type=text name="field-name" placeholder="Олеся виноградова" />
            </label><br />
            <label>
                Поле email:<br />
                <input name="field-email" placeholder="example@test.com" type="email">
            </label><br />
            <label>
                Дата рождения:<br />
                <input name="field-date" value="2012-12-12" type="date" />
            </label><br />
            <label>Пол:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-gender" value=1 />
                Мужской</label>
            <label class="radio"><input type="radio" name="radio-gender" value=0 />
                Женский</label><br />
            <label>Кол-во конечностей:</label><br />
            <label class="radio"><input type="radio" checked="checked" name="radio-konech" value=0 />
                0</label>
            <label class="radio"><input type="radio" name="radio-konech" value=1 />
                1</label>
            <label class="radio"><input type="radio" name="radio-konech" value=2 />
                2</label>
            <label class="radio"><input type="radio" name="radio-konech" value=3 />
                3</label>
            <label class="radio"><input type="radio" name="radio-konech" value=4 />
                4</label><br />
            <label>
                Ваши сверхспособности:<br />
                <select multiple="true" name="superpower[]">
                    <option value="Бессмертие">Бессмертие</option>
                    <option value="Прохождение сквозь стены">Прохождение сквозь стены</option>
                    <option value="Левитация">Левитация</option>
                </select>
            </label><br />
            <label>
                Биография:<br />
                <textarea name="biography" placeholder="Расскажите о себе"></textarea>
                
            </label>
            <br/>
            <label>
                <input name="chick" type="checkbox" checked=checked value=1> Отправьте котика: <br />
            </label>
            <input type="submit" value="Отправить" />
            </form>
        </div>
</body>

</html>