<?php 
        include ("./common/head.php");
        include ("./common/menu.php");
    ?>

    <h1>Cercle - Périmètres & aires</h1>
        <section class="center">
            <form action="#" method="POST">
                <label for="rayon">Rayon:</label>
                <input type="number" name="rayon" id="rayon" required><br />
                <label for="perimetre">Périmetre:</label>
                <input type="checkbox" name="perimetre" id="perimetre"><br />
                <label for="aire">Aire:</label>
                <input type="checkbox" name="aire" id="aire"><br />
                <input type="submit" value="Envoyer">
            </form>
        </section>

        
        <?php 
            if(isset($_POST["rayon"]) && $_POST["rayon"] > 0){
                $rayon = $_POST["rayon"];
                echo "<h2>Resultat</h2>";
                echo "<p>";
                    if(isset($_POST["perimetre"])){
                        echo "Le périmètre d'un cercle de rayon: <b>" . $rayon . "</b> est : <b>" . ($rayon* 2 * pi()) . "</b><br />";
                    }
                    if(isset($_POST["aire"])){
                        echo "L'aire' d'un cercle de rayon: <b>" . $rayon . "</b> est : <b>" . ($rayon* $rayon * pi()) . "</b><br />";

                    }
                echo "</p>";
            } else {
                echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
            }
        ?>
        
<?php 
    include("./common/footer.php")
?>