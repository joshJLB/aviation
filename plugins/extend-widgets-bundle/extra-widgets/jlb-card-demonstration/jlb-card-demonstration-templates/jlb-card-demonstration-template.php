<?php 
    $repeater = $instance['card_repeater'];
    $title = $instance['title'];
?>

<div class="card-demo-container">
    <h2><?=$title; ?></h2>
    <div class="card-demo-inner">
        <?php foreach($repeater as $index => $slide){
            $cardTitle = $slide['card_title'];
            $cardTextarea = $slide['textarea'];
            $linkText = $slide['card_link_text'];
            $link = $slide['card_link'];
            $imageID = $slide['image'];
            $imageURL = wp_get_attachment_url($imageID);
        ?>

        <div class="card-single">
            <div class="card-single-image" style="background-image: url(<?=$imageURL; ?>);"></div>
            <h3><?=$cardTitle; ?></h3>
            <p class="card-single-paragraph"><?=$cardTextarea; ?></p>
            <a href="<?=$link; ?>"><?=$linkText; ?></a>
        </div>
<?php }; ?>
    </div>
</div>
