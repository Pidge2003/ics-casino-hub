<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
/**
 * Output WordPress Page ID 32 as the header
 */
$page_id = 32; 
$page = get_post($page_id);

if ($page) {
    echo '<header class="site-header">';
      echo apply_filters('the_content', $page->post_content);
    echo '</header>';
}
?>

