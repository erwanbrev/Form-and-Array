<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire / Tableaux</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="GET">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="mail">Mail</label>
        </br>
        <input type="email" name="mail">
        </br>
        <label for="pwd">Password</label>
        <input type="password" name="pwd">
        <button type="submit">Valider</button>
    </form>
    <section>
        <?php
        //formulaire
        $tableau = array(
            array("DDupont", "ddupont@domain.com", "mdp789"),
            array("Fschmoll", "fscholl@domain.com", "mdp456"),
            array("HSmith", "HSmith@domain.com", "mdp123"),
            //recuperer données saisies dans le formulaire
            array($_GET['username'], $_GET['mail'], $_GET['pwd'])
            // array($_POST['username'], $_POST['mail'], $_POST['pwd'])
        );
        echo "<H2>" . "Tableau sans ID :" . "</H2>";
        echo "<table>";
        echo "<tr>";
        echo "<th> Username </th>";
        echo "<th> Mail </th>";
        echo "<th> Password </th>";
        //tableau sans ID
        foreach ($tableau as $tablo) {
            echo "<tr>";
            echo "<td>";
            echo $tablo['0'];
            echo "</td>";
            echo "<td>";
            echo $tablo['1'];
            echo "</td>";
            echo "<td>";
            echo $tablo['2'];
            echo "</td>";
            echo "</tr>";
        }
        echo " </table>";

        //tableau avec ID
        echo "<H2>" . "Tableau avec ID :" . "</H2>";
        echo "<table>";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> Username </th>";
        echo "<th> Mail </th>";
        echo "<th> Password </th>";
        foreach ($tableau as $ID => $tablo) {
            echo "<tr>";
            echo "<td>";
            echo $ID;
            echo "</td>";
            echo "<td>";
            echo $tablo['0'];
            echo "</td>";
            echo "<td>";
            echo $tablo['1'];
            echo "</td>";
            echo "<td>";
            echo $tablo['2'];
            echo "</td>";
            echo "</tr>";
        }
        echo " </table>";
        ?>
    </section>
    <section>
        <?php
        //afficher le contenu en code visible
        echo "<H2>" . "Tableau format code :" . "</H2>";
        echo "<pre>";
        print_r($tableau);
        echo "</pre>";
        echo "<H2>" . "Affichage des noms d'utilisateurs :" . "</H2>";
        foreach ($tableau as $tablo) {
            echo $tablo['0'] . "<br/>";
            echo $tablo['1'] . "<br/>";
            echo $tablo['2'] . "<br/>";
        }
        ?>
    </section>

</body>

</html>