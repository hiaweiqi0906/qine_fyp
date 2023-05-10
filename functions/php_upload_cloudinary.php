<?php
require_once('../vendor/autoload.php');

use Cloudinary\Cloudinary;
// use Cloudinary\Transformation\Resize;

$cloudinary = new Cloudinary(
    [
        'cloud' => [
            'cloud_name' => 'papero',
            'api_key'    => '116725562168465',
            'api_secret' => '-Y2arZ5dXUvc30KKji3GQemYjl4',
        ],
    ]
);
?>