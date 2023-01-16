<?php 
        include ("./common/head.php");
        include ("./common/menu.php");

        $perso1 = [
                "Nom"=> "Luke",
                "Age"=> 24, 
                "Sexe"=> "homme", 
                "force" => 5,
                "Agilite" => 4
            ];
        $perso2 = [
                "Nom"=> "Katy",
                "Age"=> 22, 
                "Sexe"=> "femme", 
                "force" => 3,
                "Agilite" => 6
            ];
        $perso3 = [
                "Nom"=> "Marc",
                "Age"=> 24, 
                "Sexe"=> "homme", 
                "force" => 7,
                "Agilite" => 2 
            ];
?>

    <h1>Selection du personnage</h1>
        <section class="center">
            <form action="#" method="POST">
                <label for="perso">Personnage: </label>
                    <select name="perso" class="option-perso" id="perso" onchange="submit()">
                        <option value="perso1" <?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso1") echo "selected"?>>Luke</option>
                        <option value="perso2"<?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso2") echo "selected"?>>Katy</option>
                        <option value="perso3"<?php if(isset($_POST["perso"]) && $_POST["perso"] === "perso3") echo "selected"?>>Marc</option>
                    </select> <br />
            </form>
        </section>

   <?php 
    
    
    if(!isset($_POST["perso"]) || $_POST["perso"] === "perso1"){
        echo "<div class=\"bloc-infos_perso\">";
            echo "<div class='gauche'>";
                echo "<img src=\"./assets/player.png\" alt=\"Player Luke\" />";
            echo "</div>";
            echo "<div class='gauche'>";
            afficherPersonnage($perso1);
            echo "</div>";
        echo "</div>";
        
        } else if($_POST["perso"] === "perso2"){
        echo "<div class=\"bloc-infos_perso\">";
            echo "<div class='gauche'>";
                echo "<img src=\"./assets/playerF.png\" alt=\"Player Katy\" />";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPersonnage($perso2);
            echo "</div>";
        echo "</div>";

        } else if($_POST["perso"] === "perso3"){
        echo "<div class=\"bloc-infos_perso\">";
            echo "<div class='gauche'>";
                echo "<img src=\"./assets/playerM.png\" alt=\"Player Marc\" />";
            echo "</div>";
            echo "<div class='gauche'>";
                afficherPersonnage($perso3);
            echo "</div>";
        echo "</div>";

        }
            
            echo "<div class='clearB'></div>";

    function afficherPersonnage($personnage){
        foreach($personnage as $index => $value) {
            echo "<b>" . $index . "</b>: " . $value . "<br />"; 
        }
        // echo "<p>Nom: " . $personnage["Nom"] . "</p><br />";
        // echo "<p>Prénom: " . $personnage["Age"] . "</p><br />";
        // if($personnage[2] == true){
        //     echo "<p>Sexe: Homme </p><br />";
        // } else {
        //     echo "<p>Sexe: Femme </p><br />";
        // }
        // echo "<p>Force: " . $personnage[3] . "</p><br />";
        // echo "<p>Agilité: " . $personnage[4] . "</p><br />";
    }
   ?>

<?php 
    include("./common/footer.php")
?>