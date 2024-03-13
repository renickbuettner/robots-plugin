<?php

Route::get('robots.txt', function () {
    return \Renick\Robots\Classes\RobotsFile::get();
});
