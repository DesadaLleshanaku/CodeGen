<?php
/**
* Validate a file based on its type and size. This is a helper function for validateFile ()
* 
* @param $file
* @param $allowedTypes
* @param $maxSize
* 
* @return True if the file is valid false if it is
*/
function validateFile($file, $allowedTypes, $maxSize) {
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];

    // Check if the file type is allowed
    $allowedExtensions = explode(',', $allowedTypes);
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    // Check if file extension is allowed
    if (!in_array($fileExtension, $allowedExtensions)) {
        return false; // File type not allowed
    }

    // Check if the file size is within the maximum limit
    // Returns true if the file size is greater than the maximum size
    if ($fileSize > $maxSize) {
        return false; // File size exceeds the maximum limit
    }

    return true; // File is valid
}
