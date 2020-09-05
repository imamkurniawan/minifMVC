<?php

/**
 * Anti XSS attacks
 * Sterilisasi output yang mengandung script
 */

 function print_plaintext($str)
 {
     echo htmlentities($str, ENT_QUOTES, 'UTF-8');
 }

 function to_plaintext($str)
 {
     return htmlentities($str, ENT_QUOTES, 'UTF-8');
 }