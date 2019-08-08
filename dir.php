<?php
   echo '<h1>Index of /Matrimony/</h1>';
   echo '<ul>';
   echo '<li><a href="/"> Parent Directory</a></li>';

   $dir = scandir('.');
   $files = count( $dir );
   for ( $i = 0; $i < $files; $i++ )
   {
       if ( is_file($dir[$i]) && strlen( $dir[$i] ) <= 36 && ( strstr( strtolower( $dir[$i] ), '.htm' ) ||  strstr( strtolower( $dir[$i] ), '.html' ) ||  strstr( strtolower( $dir[$i] ), '.php' ) ) )
           echo "<li><a href=\"$dir[$i]\">$dir[$i]</a></li><br>";

       if ( is_dir($dir[$i])  && $dir[$i] != "." && $dir[$i] != ".." && $dir[$i] != "adult" )
           echo "<li>FOLDER - !!!! <a href=\"$dir[$i]\"/>$dir[$i]/</a></li><br>";
   }

   echo '</ul>';
?>
