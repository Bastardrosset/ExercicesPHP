<?php 
        include ("./common/head.php");
        include ("./common/menu.php");
?>

    <h1>Tableaux</h1>
        <div class="bloc-text">
            <h3>Etape 1</h3>
                Réaliser un tableau contenant les valeurs 2, 6, 12, 5, 26, 34, 40, 61
            <h3>Etape 2</h3>
                Réaliser une fonction qui vérifie si le tableau ne contient que des valeurs paires ou non
            <h3>Etape 3</h3>
                Afficher un message pour l'indiquer à l'utilisateur 
        </div>  
   <?php 
    
    $tab = [2, 6, 12, 5, 26, 34, 40, 61];

    echo "
        <div class=\"bloc-result\">
            <h2 class=\"result-title_text\">Résultat :</h2>
        </div>";
        if(checkArray($tab)){
            echo "
                <p class=\"result-text\">
                    Le tableau ne contient pas de valeurs paires !
                </p>";
        } else {
            echo "
                <p class=\"result-text\">
                    Le tableau contient des valeurs paires !
                </p>";
        }

    function checkArray($array){
        for($i = 0; $i <= count($array)-1; $i++){
            if($array[$i] % 2 !== 0){
                return false;
            }
        }
        return true;
    }
   ?>

<?php 
    include("./common/footer.php")
?>