<?php
session_start();

// Путь к файлу, где будет храниться количество кликов
$file = 'counters.json';
$counters = json_decode(file_get_contents($file), true);

// Если пришел запрос на увеличение счётчика
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['department'])) {
    $department = $_POST['department'];
    if (isset($_POST['action']) && $_POST['action'] == 'increment') {
        // Если для этого счётчика нет записи, создаём её
        if (!isset($counters[$department])) {
            $counters[$department] = 0;
        }
        
        $counters[$department]++;  // Увеличиваем счётчик для этого ID
        file_put_contents($file, json_encode($counters));  // Сохраняем все счётчики в файл

        echo json_encode(['counter' => $counters[$department]]);
        exit;
    }

    // Если это просто запрос на получение текущего значения счётчика
    echo json_encode(['counter' => isset($counters[$department]) ? $counters[$department] : 0]);
    exit;
}


echo json_encode(['error' => 'Invalid request']);
?>
