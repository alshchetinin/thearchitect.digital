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

$flexwidth = get_field('flexwidth');
$fleswidthimg = get_field('flexwidthimg');
$caption = get_field('caption')
?>


<section>
<div class="sectionText" style="width: <?php  echo $flexwidth ?>% ">
<?php 
 if (!empty($headline))
    echo '<h3>' . $headline . '</h3>';
echo $text;
?>
</div>
<div class="picture picture_img" style="width: <?php  echo $fleswidthimg ?>% ">

<figure>
<img class="img-responsive" <?php awesome_acf_responsive_image(get_field( 'images' ),'thumb-700','100%'); ?>  alt="" />
<?php 
 if (!empty($caption))
 echo '<figcaption>'. $caption .'</figcaption>';
?>
</figure>

</div>
</section>
