<?php 

class AppHelper extends Helper 
{ 
    function url($url = NULL, $full = FALSE) 
    { 
        $routerUrl = Router::url($url, $full); 
        if (
            !preg_match('/\\.(atom|css|csv|doc|docx|gif|html|ico|jpeg|jpg|json|php|png|rss|swf|xls|xlsx|xml?)$/', strtolower($routerUrl))
            && substr($routerUrl, -1) != '/' 
            && strpos($routerUrl, '#') === FALSE
        ) 
        { 
            $routerUrl .= '/'; 
        }        
        
        return $routerUrl; 
    } 
} 
?>