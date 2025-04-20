<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header> 
    <main>
        <section class="left">
        <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td><td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td><td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td><td>od 1200 zł</td>
                </tr>
            </table>
        </section>
        <section class="center">
            <h2>W tym roku jedziemy do...</h2>
            <?php
            $db = mysqli_connect("localhost","root","","podroze");
            $kw1 = mysqli_query($db, "select nazwaPliku,podpis from zdjecia ORDER BY podpis asc");
            while($cos1 = mysqli_fetch_assoc($kw1)){
                ?>
                <img src="<?php echo$cos1["nazwaPliku"]?>" alt="<?php echo$cos1["podpis"]?>">
                <?php
            }
            ?>
        </section>
        <section class="right">
            <h2>Kontakt</h2>
            <a href="biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </section>
        <section class="dataClass">
    <h3>W poprzednich latach byliśmy...</h3>
    <ol>
        <?php
        $kw2 = mysqli_query($db, "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0");
        while($cos2 = mysqli_fetch_assoc($kw2)){
            echo "<li>Dnia {$cos2["dataWyjazdu"]} pojechaliśmy do {$cos2["cel"]}</li>";
        }
        ?>
    </ol>
</section>
    </main>
    <footer>
    <p>Stronę wykonał: 06272500572 </p>
    </footer>
    <?php
    mysqli_close($db);
    ?>
</body>
</html>