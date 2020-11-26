<?php include ("head.php"); ?>
<body>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">
<header>

</header>
   <h1>SUIVI-CARBU</h1>
<main>

    <form action="ajout--traitement.php" method="post">

    <h2>ajout d'un plein</h2>
      
      <label for="prix-au-litre">Prix payé (au litre)</label>
      <input type="number" name="prix-au-litre" id="prix-au-litre" step="0.001"><br/>

      <label for="volume-plein">Volume total du plein (en litres)</label>
      <input type="number" name="volume-plein" id="volume-plein" step="0.01" required><br/>

      <label for="kilometres-parcourus">Kilomètres parcourus (depuis le dernier plein)</label>
      <input type="number" name="kilometres-parcourus" id="kilometres-parcourus" step="0.01" required><br/>

      <button>ajouter</button>

    </form>
  </main>
  
</body>
</html>