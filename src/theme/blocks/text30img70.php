<?php

/**
 * Team Member block
 *
 * @package      ClientName
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
 **/
$headline = get_field('headline-block');
$text = get_field('text');
$img = get_field('images');


echo '<section>';

echo '<div class="sectionText">';
if (!empty($headline))
    echo '<h3>' . $headline . '</h3>';
echo $text;
echo '</div>';
echo '<div class="picture" style="background-image: url(' . $img . ');">';
echo '</div>';
echo '</section>';
