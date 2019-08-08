
<?php
include('dbconnect.php');
require 'Paging.class.php';
        
             //   Example:
                
                $url = "?goto=page";
                $query = "SELECT * FROM register ORDER BY id DESC";

                $p = new dcPagination($url, $query, 50);
                $query = $p->getQuery();
                
                echo "On Page " . $p->getViewing() . " of " . $p->getViewingOf() . ", Viewing " . $p->getViewFrom() . " to " . $p->getViewTo() . "<br />";
                echo $p->getFirst() . $p->getPrev() . $p->getLinks() . $p->getNext() . $p->getLast();
        
      
        
?>
