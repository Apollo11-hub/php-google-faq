<?php 

  require 'faq-dabase.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,700;0,900;1,400&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title>Domande Frequenti - Pezzotto</title>
</head>
<body>
    <header>
      <img src="./Img/Immagine 2022-06-08 162224.png" alt="img:)">
      <nav>
        <ul>
          <li>introduzione</li>
          <li>norme sulla privacy</li>
          <li>termini di servizio</li>
          <li>tecnologie</li>
          <li class="li-hover">
            domande frequenti
            <div class="li-active"></div>
          </li>
        </ul>
      </nav>
    </header>
    <main>

      <div class="wrapper-main">
        <?php foreach($faq_data as $faq): ?>

            <h2><?php echo $faq['question']?> </h2>
            <p><?php echo $faq['answer']?> </p>

        <?php endforeach; ?>
      </div>

    </main>
</body>
</html>