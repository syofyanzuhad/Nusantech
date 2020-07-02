<?php

function maze(int $s) {
   for ($height=0; $height < $s; $height++) { 
      for ($width=0; $width < $s; $width++) { 
         if ($height%4 == 0) {
            if ($width == 1) {
               echo ' ';
            } else {
               echo '@';
            }
         } elseif ($height%2 == 0 && $height != 0) {
            if ($width == $s-2) {
               echo ' ';
            } else {
               echo '@';
            }
         } else {
            if ($width > 0 && $width < $s-1) {
               echo ' ';
            } else {
               echo '@';
            }
         }
      }
      echo "\n";
   }
}

echo 'Masukkan panjang sisi : ';
$input = trim(fgets(STDIN));
// $input = 15;
maze($input);