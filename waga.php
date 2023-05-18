<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <div id="baner">
            <h2>Oblicz wskaźnik BMI</h2>
        </div>
        <div id="logo">
            <img src="wzor.png" alt="liczymy BMI">
        </div>
    </header>
    <main>
        <div id="left">
            <img src="rys1.png" alt="zrzuć kalorie!">
        </div>
        <div id="right">
            <h1>Podaj dane</h1>
            <form action="waga.php" method="post">
                Waga: <input type="number" name="waga"> <br>
                Wzrost[cm]: <input type="number" name="wzrost"> <br>
                <input type="submit" value="Licz BMI i zapisz wynik">
            </form>
            <?php
            error_reporting(0);
            $waga = $_POST['waga'];
            $wzrost = $_POST['wzrost'];
            $conn = mysqli_connect('localhost', 'root', "", 'egzamin');
            if ($waga > 0 or $wzrost > 0) {
                $bmi = $waga / pow($wzrost, 2);
                $bmi = $bmi * 10000;
                echo "<br> Twoja waga: " . $waga . " Twój wzrost: " . $wzrost . "<br>BMI wynosi: " . $bmi;
                if ($bmi <= 18) {
                    $id = 1;
                } else if ($bmi > 18 and $bmi <= 25) {
                    $id = 2;
                } else if ($bmi > 25 and $bmi <= 30) {
                    $id = 3;
                } else if ($bmi > 30) {
                    $id = 4;
                }
                $data = date('Y-m-d');
                mysqli_query($conn, "INSERT INTO `wynik` (`bmi_id`,`data_pomiaru`,`wynik`) VALUES ('$id','$data','$bmi')");
            }
            ?>
        </div>
    </main>
    <div id="bot">
        <table>
            <tr>
                <th>lp</th>
                <th>Interpretacja</th>
                <th>zaczyna się od..</th>
            </tr>
            <?php
            $res = mysqli_query($conn, "SELECT `id`, `informacja`, `wart_min` FROM bmi");
            foreach ($res as $row) {
                echo "<tr>";
                foreach ($row as $r) {
                    echo "<td>" . $r . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <footer>
        Autor: Stanisław Fiedoruk 4J
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>

</html>