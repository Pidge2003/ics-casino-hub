<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'ics-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap',
        [],
        null
    );
});