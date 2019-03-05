<?php

Route::set('index.php', function() {
    IndexController::CreateView('index');
});

Route::set('about-us', function() {
    AboutController::CreateView('aboutus');
    AboutController::test();
});

Route::set('contact-us', function() {
    ContactController::CreateView('contactus');
});

?>