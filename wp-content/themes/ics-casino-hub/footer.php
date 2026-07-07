<?php
/**
 * Output WordPress Page ID 45 as the footer
 */
$footer_page_id = 45; 
$footer_page = get_post($footer_page_id);

if ($footer_page) {
    echo '<footer>';
        echo apply_filters('the_content', $footer_page->post_content);
    echo '</footer>';
} else {
    echo '<footer>';
        echo '<p>&copy; ' . date('Y') . ' ' . get_bloginfo('name') . '</p>';
    echo '</footer>';
}
?>

<?php wp_footer(); ?>
</body>
</html>