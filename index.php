<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8'); 

// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
    include('form.php'); // Включаем содержимое файла form.php.
    exit(); // Завершаем работу скрипта.
}

$result=FALSE;

// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.
try{
    // Проверяем ошибки.
    $errors = FALSE;
    if (empty($_POST['field-name'])) {
        print('Заполните имя.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['field-email'])) {
        print('Заполните почту.<br/>');
        $errors = TRUE;
    }

    if (empty($_POST['biography'])) {
        print('Заполните биографию.<br/>');
        $errors = TRUE;
    }
    if (empty($_POST['chick'])) {
        print('Вы должны быть согласны с условиями.<br/>');
        $errors = TRUE;
    }

    
    if (!$errors) {
    //передаем данные в переменные
    $name = $_POST['field-name'];
    $email = $_POST['field-email'];
    $data = $_POST['field-date'];
    $gender = $_POST['radio-gender'];
    $konech = $_POST['radio-konech'];
    $bio = $_POST['biography'];
    $chebox = $_POST['chick'];
    
    //Объединяет элементы массива в строку
    $sup= implode(",",$_POST['superpower']);

    //Представляет собой соединение между PHP и сервером базы данных.
    $conn = new PDO("mysql:host=localhost;dbname=u41811", 'u41811', '1610864', array(PDO::ATTR_PERSISTENT => true));

    //Подготавливает инструкцию к выполнению и возвращает объект инструкции
    $user = $conn->prepare("INSERT INTO form SET id = ?,name = ?, email = ?, data = ?, gender = ?, konech = ?, bio = ?, chebox = ?");

    //Запускает подготовленный запрос на выполнение
    $id_user = $conn->lastInsertId();
    $user -> execute([$id_user, $_POST['field-name'], $_POST['field-email'], date('Y-m-d', strtotime($_POST['field-date'])), $_POST['radio-gender'], $_POST['radio-konech'], $_POST['biography'], $_POST['chick']]);

    $user1 = $conn->prepare("INSERT INTO super SET id = ?, super_name = ?");
    $user1 -> execute([$id_user, $sup]);
    $result = true;
    }
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}
if ($result) {
    print('Данные были записаны в базу данных.<br/>');
}
?>