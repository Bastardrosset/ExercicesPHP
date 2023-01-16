<?php 
        include ("./common/head.php");
        include ("./common/menu.php");
?>

    <h1>Calculer la moyenne</h1>
        <section class="center">
            <form action="#" method="GET">
                <label for="nb">Combien de notes :</label>
                <input type="number" name="nb" id="nb"><br />
                <input type="submit" value="Valider">
            </form>
        </section>

   <?php 
    
    if(isset($_GET["nb"]) && $_GET["nb"] > 0){
        $nbNotes = $_GET["nb"];
        echo "<form action=\"#\" method=\"POST\">";
        echo "<fieldset>";
        echo "<legend>Inscrire les notes pour calculer la moyenne</legend>";
        for($i = 1; $i <= $nbNotes; $i++){
            echo "<label for=\"note" . $i . "\">Note" . $i . ":</label>";
            echo "<input type=\"number\" name=\"note" . $i . "\" id=\"note" . $i . "\" required><br />";
        }
        echo "<input type=\"submit\" value=\"Calculer\">";
        echo "</fieldset>";
        echo "</form>";
        if(isset($_POST["note1"])){
            $res = 0;
            for($i = 1; $i <= $nbNotes; $i++){
                $res += $_POST["note".$i];
            }
            echo "La moyenne est :" . $res / $nbNotes ;
        }
        } else {
            echo "<h2>Saisir une valeur dans les champs ci-dessus</h2>";
        }
   ?>

<?php 
    include("./common/footer.php")
?>