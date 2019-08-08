<?php
include('dbconnect.php');
        /*
                Script: dcPagination
                Version: 1.2
                Author: Josh Benham
                Handle: schnoodles
                Url: schnoodles@diverse-code.net
                Website: http://www.diverse-code.net
                Started: 17/10/05
        */

    // This class is for writing pagination to a page.
        class Pagination 
        {
                var $query, $url, $page, $pages, $start, $num_rows, $num;
                
                // Use $p = new dcPagination(url,query,num) to construct class and set variables.
                function __construct($url,  $query, $num) 
                {
                    ($_GET['screen'] != 0) ? $this->page = $_GET['screen'] : $this->page = 1; 
                        $this->url = $url;
                        $this->num = $num;
                        $this->num_rows = mysql_num_rows(mysql_query($query));
                        $this->pages = ceil($this->num_rows / $this->num);      
                        $this->start = ($this->page - 1) * $this->num;  
                        $this->query = "$query LIMIT $this->start, $this->num";
                }
                
                // Use $p->getFirst() to return a link which will bring you to the first page.
                function getFirst()
                {
                        if ($this->page != 1) 
                        {
                                $go = $this->url."&amp;screen=1";
                                return '<a href="'.$go.'"><b>&lt;</b></a> ';
                        }
                }

        // Use $p->getPrev() to return a link which will bring you to the last page.
                function getPrev()
                {
                        if ($this->page > 1) 
                        {
                                $screen = $this->page - 1;
                                $go = $this->url."&amp;screen=".$screen;
                                return '<a href="'.$go.'"><b>&lt;</b></a> ';
                        }
                }
                
                // Use $p->getLinks() to return links to all the pages.
                function getLinks()
                {
                        $link = "";
                        for ($links = 1;$links < ($this->pages + 1);$links++) 
                        {
                                if ($links != $this->page) 
                                {
                                        $go = $this->url."&amp;screen=".$links;
                                        $link .= ' <a href="'.$go.'">'.$links.'</a> ';
                                }
                                else 
                                {
                                        $go = $this->url."&amp;screen=".$links;
                                        $link .= ' <b>'.$links.'</b> ';
                                }
                        }
                        return $link;
                }
                
                // Use $p->getNext() to return a link which will bring you to the next page.
                function getNext()
                {
                        if ($this->page < $this->pages) 
                        {
                                $screen = $this->page + 1;
                                $go = $this->url."&amp;screen=".$screen;
                                return '<a href="'.$go.'"><b>&gt;</b></a> ';
                        }
                }
                        
        // Use $p->getLast() to return a link which will bring you to the last page.
                function getLast()
                {
                        if ($this->page != $this->pages) 
                        {
                                $screen = $this->pages;
                                $go = $this->url."&amp;screen=".$screen;
                                return '<a href="'.$go.'"><b>&gt;</b></a> ';
                        }
                }
                
                // Use $p->getViewFrom() to return the number you are viewing from.
                function getViewFrom()
                {
                        $from = "";
                        if ($from != 0) 
                        { 
                                $from = $this->start + 1; 
                                return "$from ";
                        }
                        else 
                        { 
                                $from = $this->start; 
                                return "$from ";
                        }
                }
                
                // Use $p->getViewTo() to return the number you are viewing to.
                function getViewTo()
                {
                        if (($this->start + $this->num) > $this->num_rows) 
                        {
                                $to = $this->num_rows; 
                                return $to;
                        }
                        else 
                        {
                                $to = $this->start + $this->num;
                                return $to;
                        }
                }
                
                // Use $p->getViewing() to return the number of page you are currently viewing.
                function getViewing()
        {
            return $this->page;
        }
                
                // Use $p->getViewingOf() to return the number of pages there are.
                function getViewingOf()
        {
            return $this->pages;
        }
                
                // Use $p->getQuery() to return the query you want to call.
                function getQuery()
        {
            return $this->query;
        }
        }
        
       ?>