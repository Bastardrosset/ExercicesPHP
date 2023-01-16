<?php 
        include ("./common/head.php");
        include ("./common/menu.php");
?>

    <h1>Selection du personnage</h1>
        <section class="center">
            <form action="#" method="POST">
                <label for="perso">Personnage: </label>
                <select name="perso" id="perso">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select> <br />
                <input type="submit" value="Valider">
            </form>
        </section>    

   <?php 
    
    if(isset($_POST["perso"])){
        if($_POST["perso"] === "homme"){
            echo "<img src=\"./assets/player.png\" alt=\"Player homme\" />";
        } else if($_POST["perso"] === "femme"){
            echo "<img src=\"./assets/playerF.png\" alt=\"Player femme\" />";
        }
        } else {
            echo "<h2>Saisir une valeur dans les champs ci-dessus</h2>";
        }
   ?>

<?php 
    include("./common/footer.php")
?>