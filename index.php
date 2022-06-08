<?php 

  require 'faq-dabase.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Domande Frequenti - Pezzotto</title>
</head>
<body>
    <header></header>
    <main>

      <div>
        <?php foreach($faq_data as $faqs => $faq): ?>

            <h2><?php echo $faq['question']?> </h2>
            <p><?php echo $faq['answer']?> </p>

        <?php endforeach; ?>
      </div>

    </main>
</body>
</html>