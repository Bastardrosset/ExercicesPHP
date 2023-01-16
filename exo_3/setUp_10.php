<?php 
        include ("./common/head.php");
        include ("./common/menu.php");

        $perso1 = [
                "Nom" => "Luke",
                "Img" => "player.png",
                "Age" => 24, 
                "Sexe" => true, 
                "force" => 5,
                "Agilite" => 4
            ];
        $perso2 = [
                "Nom" => "Katy",
                "Img" => "playerF.png",
                "Age" => 22, 
                "Sexe" => false, 
                "force" => 3,
                "Agilite" => 6
            ];
        $perso3 = [
                "Nom" => "Marc",
                "Img" => "playerM.png",
                "Age" => 24, 
                "Sexe" => true, 
                "force" => 7,
                "Agilite" => 2 
            ];
            
            $persos = [$perso1, $perso2, $perso3];
?>

    <h1>Personnage</h1>
        
   <?php 
    
    foreach($persos as $perso){
        echo "<section class=\"center\">";
            echo "<div class=\"bloc-infos_perso\">";
                echo "<div class='gauche'>";
                    echo "<img src= './assets/" .$perso["Img"] . "' alt='" .$perso["Img"] ."'/>";
                echo "</div>";
                echo "<div class='gauche'>";
                afficherPersonnage($perso);
                echo "</div>";
            echo "</div>";
        echo "</section>";  
                
            echo "<div class='clearB'></div>";
    }

    function afficherPersonnage($personnage){
        foreach($personnage as $index => $value) {
            if($index !== "Img" && $index !== "Sexe"){
                echo "<b>" . $index . "</b>: " . $value . "<br />"; 
            }
            if($index === "Sexe"){
                echo "<b>Sexe</b> :";
                if($value){
                    echo "Homme <br />"; 
                } else {
                    echo "Femme <br />"; 
                }
            }
        }
    }
   ?>

<?php 
    include("./common/footer.php")
?>