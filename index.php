<?php include ("head.php"); ?>
<body>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
  <header>
    <h1>SUIVI-CARBU</h1>
  </header>

  <main>
    
    <?php

      if (isset($_COOKIE["plein"])) {

        echo "<table>"
             ."<caption><h2>Page d'accueil<h2></caption>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L</th>"
            ."<th>Conso</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          echo "<tr>"
          ."<td align=center>$datePlein</td>"
          ."<td align=center>$prixLitre</td>";

          if($moyenneLitresAuCent < 6)
          {
            echo "<td width=33% align=center style='color:green'>$moyenneLitresAuCent</td>";
          }
          elseif($moyenneLitresAuCent < 7)
          {
            echo "<td width=33% align=center style='color:black'>$moyenneLitresAuCent</td>";
          }
          else
          {
          echo "<td width=33% align=center style='color:red'>$moyenneLitresAuCent</td>";
          }
          echo"</tr>";

        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Ajouter un plein pour commencer</p>";

      }

    ?>

    <a class="btn" href="ajout--formulaire.php">ajouter</a>

  </main>

</body>
</html>