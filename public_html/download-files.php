<?php

/*
 * This file is used to download files from the server, it will
 * zip the files and allow the user to save them to disk
*/


/*
 * Ensures the name given to the function
 * is in the correct format to be downloaded
 * @param name: String name for the zip file
*/
function fix_zip_name($name){
  //Convert to lowercase and replace spaces with underscores
  $new = str_replace(' ', '_', $name);
  $new=strtolower($new);

  //Ensure there is a .zip on the end
  if(!isset(pathinfo($new)["extension"])){
    $new=$new.".zip";
  }
  return $new;

}

/*
 * This function will delete a folder
 * @param target: directory to delete
*/
function delete_files($target) {
  if(is_dir($target)){
    $files = glob( $target . '*', GLOB_MARK );

    foreach( $files as $file ){
      delete_files( $file );      
    }

    rmdir( $target );
  } elseif(is_file($target)) {
    unlink( $target );  
  }
}


/*
 * This function will create a zip file of the files
 * specified and then serve them to the user
 * @param zip_base: the name of the zip file (default is Rocket-Products)
*/
function download_files($zip_base = "Rocket-Files.zip"){
  //Fix name
  $zip_base = fix_zip_name($zip_base);

  //----Begin download ZIP ---
  $file_path = dirname($_SERVER["DOCUMENT_ROOT"])."/download-content/"; 
  //Generate a temporary location to store the generated zip
  $temp_path = dirname($_SERVER["DOCUMENT_ROOT"])."/temp/temp-".uniqid()."/"; 
  //Full path for the temp zip
  $archive_file_name = $temp_path.$zip_base;

  //If the Temp location does not exist, create one (ENSURE PHP HAS PERMISSION)
  if (!file_exists($temp_path)) {
    mkdir($temp_path, 0777, true);
  }

  $zip = new ZipArchive();
  if ($zip->open($archive_file_name, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$archive_file_name>\n");
  }

  //Add file to zip
  $zip->addFile($file_path."file1.txt","file1.txt");
  $zip->addFile($file_path."file2.txt","file2.txt");

  $zip->close();


  //then send the headers to force download the zip file
  header("Content-type: application/zip"); 
  header("Content-Disposition: attachment; filename=$zip_base");
  //header("Content-length: " . filesize($archive_file_name));
  header("Pragma: no-cache"); 
  header("Expires: 0"); 
  readfile("$archive_file_name");

  //After download delete the file and folder
  delete_files($temp_path);


}


download_files();
?>
