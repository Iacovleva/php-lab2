<?php
// --- Условные конструкции: расписание по дням недели ---
$day = date('l'); // Текущий день недели на английском

function getSchedule($name) {
    global $day;

    if ($name === "John Styles") {
        if ($day === "Monday" || $day === "Wednesday" || $day === "Friday") {
            return "8:00 - 12:00";
        } else {
            return "Нерабочий день";
        }
    }

    if ($name === "Jane Doe") {
        if ($day === "Tuesday" || $day === "Thursday" || $day === "Saturday") {
            return "12:00 - 16:00";
        } else {
            return "Нерабочий день";
        }
    }

    return "Нет данных";
}

// Вывод таблицы
echo "<h2>Расписание на " . date('d.m.Y') . "</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>№</th><th>Фамилия Имя</th><th>График работы</th></tr>";
echo "<tr><td>1</td><td>John Styles</td><td>" . getSchedule("John Styles") . "</td></tr>";
echo "<tr><td>2</td><td>Jane Doe</td><td>" . getSchedule("Jane Doe") . "</td></tr>";
echo "</table><br><br>";

// --- Цикл for ---
echo "<h2>Цикл for</h2>";
$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b<br>";
}
echo "End of the loop (for): a = $a, b = $b<br><br>";

// --- Цикл while ---
echo "<h2>Цикл while</h2>";
$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b<br>";
    $i++;
}
echo "End of the loop (while): a = $a, b = $b<br><br>";

// --- Цикл do-while ---
echo "<h2>Цикл do-while</h2>";
$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;
    echo "Итерация $i: a = $a, b = $b<br>";
    $i++;
} while ($i <= 5);

echo "End of the loop (do-while): a = $a, b = $b<br>";
?>
