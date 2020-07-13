<?php
  // Testo del paragrafo
  $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  // Lunghezza del testo del paragrafo
  $lenght = strlen($text);

  // Parolaccia
  $swear_word = $_GET["badword"];

  //
  $new_text = str_replace($swear_word, '***', $text);

?>

<p>badword: <?php echo $swear_word?></p>

<p><?php echo $new_text?></p>

<p>Lunghezza: <?php echo $lenght ?></p>
