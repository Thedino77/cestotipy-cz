<?php

/*
Plugin Name: Podpora počtu komentářů v češtině
Plugin URI: http://www.separatista.net
Description: Plugin upravuje správné fungování češtiny pro různý počet komentářů.
Author: Separatista
Version: 0.1
Author URI: http://www.separatista.net
*/

function right_czech($output, $number = null)

{
   if($number === null)
      $number = get_comments_number();

   if($number == NULL)
   return $output;

   $from_two_to_four = '% komentáře';
   
   if($number >= 2 && $number <= 4) 
      $output = str_replace('%', $number, $from_two_to_four);
      // $output = str_replace('%', $number, ( false === $more ) ? $from_two_to_four : $more);
   
   return $output;
}

add_filter('comments_number', 'right_czech');

?>