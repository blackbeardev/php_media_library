<?php

function get_item_html($id, $item) {
    $output = "<li><a href='#'><img src='" 
        .$item["img"] ."' alt='" 
        .$item["title"] ."'/>"
        ."<p>View details</p>"
        ."</a></li>";
        
        return $output;
}

function array_category($catalog, $category) {
    
    $output = array();
    
    foreach($catalog as $id => $item) {
        if($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            //Trim the, an or a from the titles starting from the left hand side of the name
            $sort = ltrim($sort, "The ");
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $output[$id] = $sort;
        } 
    }
    
    asort($output);
    
    return array_keys($output);
}

?>