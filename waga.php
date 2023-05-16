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
                Waga: <input type="number">
                Wzrost[cm]: <input type="number">
                <input type="submit" value="Licz BMI i zapisz wynik">
                <?php
                // s1
                ?>
            </form>
        </div>
        <div id="bot">
            <table>
                <tr>
                    <th>lp</th>
                    <th>Interpretacja</th>
                    <th>zaczyna się od..</th>
                </tr>
                <?php
                //s2
                ?>
            </table>
        </div>
    </main>
    <footer>
        Autor: Stanisław Fiedoruk 4J
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>

</html>