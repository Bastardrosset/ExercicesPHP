<?php 
        include ("./common/head.php");
        include ("./common/menu.php");

        session_start();
        if(!isset($SESSION["chiffreAleatoire"])){
            $_SESSION["chiffreAleatoire"] = rand(1, 15);
        }

    ?>

    <h1>Trouver le nombre choisi par l'ordinateur</h1>
        <section class="center">
            <form action="#" method="POST">
                <input type="hidden" name="reinit" value="yes">
                <input type="submit" value="Reinitialiser">
            </form>

            <form action="#" method="POST">
                <label for="chiffre">Quel est le chiffre ?</label>
                <input type="number" name="chiffre" id="chiffre" required><br />
                <input type="submit" value="Envoyer">
            </form>
        </section>
   <?php 
    if(isset($_POST["reinit"]) && $_POST["reinit"] === "yes"){
        $_SESSION["chiffreAleatoire"] = rand(1, 15);
    }
    
    $chiffreAleatoire = $_SESSION["chiffreAleatoire"];
    
    if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0){
        $chiffreSaisi = (int)$_POST["chiffre"];
            echo "<h4>";
            if($chiffreAleatoire === $chiffreSaisi){
                echo "C'est gagné !";
            } else{
                if($chiffreAleatoire > $chiffreSaisi){
                        echo "Le chiffre est plus grand";
                    } else {
                        echo "Le chiffre est plus petit";
                    }
            }
            echo "</h4>";
        } else {
            echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
        }
   ?>

<?php 
    include("./common/footer.php")
?>