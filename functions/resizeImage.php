<?php

function resizeImage($imagePath, $width, $height) {
    // Get original image dimensions
    list($originalWidth, $originalHeight) = getimagesize($imagePath);

    // Calculate aspect ratios
    $aspectRatio = $originalWidth / $originalHeight;
    $targetAspectRatio = $width / $height;

    // Calculate new dimensions while maintaining aspect ratio
    if ($aspectRatio > $targetAspectRatio) {
        $newWidth = $width;
        $newHeight = $width / $aspectRatio;
    } else {
        $newWidth = $height * $aspectRatio;
        $newHeight = $height;
    }

    // Create a new image resource
    $image = imagecreatetruecolor($newWidth, $newHeight);

    // Load the original image based on file type
    $extension = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));
    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            $originalImage = imagecreatefromjpeg($imagePath);
            break;
        case 'png':
            $originalImage = imagecreatefrompng($imagePath);
            break;
        case 'gif':
            $originalImage = imagecreatefromgif($imagePath);
            break;
        default:
            return false; // Unsupported image type
    }

    // Resize the image
    imagecopyresampled(
        $image,
        $originalImage,
        0,
        0,
        0,
        0,
        $newWidth,
        $newHeight,
        $originalWidth,
        $originalHeight
    );

    // Output the resized image to a file or browser
    // Here, we're outputting to the browser, so the resized image will be displayed directly
    header('Content-Type: image/jpeg');
    imagejpeg($image);

    // Free up memory by destroying the image resources
    imagedestroy($originalImage);
    imagedestroy($image);
}




?>