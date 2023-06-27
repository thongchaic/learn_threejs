<HTML>
<BODY>
  <?php
  $dir    = '.';
  $files = scandir($dir);
  foreach ($files as $file) {
    if($file === 'index.php' || $file === '.' || $file === '..'){ continue; }
    echo "<a href='$file'>$file</a><BR>";
  }
  ?>
</BODY>
</HTML>
