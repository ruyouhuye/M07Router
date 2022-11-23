<h1> Manga Data </h1>

<table>

     <?php
     require_once(__DIR__ . '/../viewlib.php');

     echo View\get_html_header($manga_table->header);
     echo View\get_html_body($manga_table->body);
     ?>

</table>
