<?php 
        include ("./common/head.php");
        include ("./common/menu.php");
    ?>

    <h1>Affichage d'une pyramide</h1>
        <section class="center">
            <form action="#" method="POST">
                <label for="hauteur">Hauteur de la pyramide :</label>
                <input type="number" name="hauteur" id="hauteur" required><br />
                <input type="submit" value="Envoyer">
            </form>
        </section>

        <?php 
            if(isset($_POST["hauteur"]) && $_POST["hauteur"] > 0){
                $hauteur = $_POST["hauteur"];
                echo "La hauteur est : " . $hauteur . "<br />";
                $txt = "";
                for($i = 0; $i < $hauteur; $i++){
                    $txt .= "xx";
                    echo $txt . "<br />";
                }
                for($i = 0; $i < $hauteur-1; $i++){
                    $txt = substr($txt, 0, strlen($txt) - 2);
                    echo $txt . " <br />";
                }
            } else {
                echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
            }
        ?>
<?php 
    include("./common/footer.php")
?>