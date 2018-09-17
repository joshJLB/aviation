<?php 
    $title = $instance['title'];
    $repeater = $instance['links_repeater'];
    $linkText = $instance['link_text'];
    $linkURL = $instance['link_url'];
    $imageID = $instance['image'];
    $imageURL = wp_get_attachment_url($imageID);
?>

<div class="links-section-container" style="background-image: url(<?=$imageURL; ?>);">
    <div class="links-section-inner">
        <h2><?=$title; ?></h2>
        <div class="links-section-content">
            <?php foreach($repeater as $index => $slide){
                $item = $slide['item'];
            ?>
                <div class="slide">
                    <i class="fal fa-angle-right"></i><p><?=$item; ?></p>
                </div>
            <?php }; ?>
        </div>
        <div class="links-section-links">
            <a href="<?=$linkURL; ?>"><?=$linkText; ?></a>
            <i class="fal fa-angle-right three-link-arrow"></i>
        </div>
    </div>
</div>

