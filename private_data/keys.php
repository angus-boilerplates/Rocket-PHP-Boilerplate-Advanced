<?php
/*
 * Keys php file, contains functions that will return api keys or database
 * passwords etc, because this file is not in public access it means your 
 * data will not be visible if PHP on your server is disabled.
 *
*/

//Example secret key
function secret_key_1(){
  return "secret_key_1_password";
}