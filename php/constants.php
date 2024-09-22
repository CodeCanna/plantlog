<?php
define("IMG_UPLOADS_PATH", dirname(__DIR__) . "/uploads/");

if (file_exists(IMG_UPLOADS_PATH)) {
    echo "IT FUCKING EXISTS!!";
}