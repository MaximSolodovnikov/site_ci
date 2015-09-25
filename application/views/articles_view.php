<div id="wrapper">
    <div id="content">
        <?php foreach ($articles as $item) { ?>
            <h3><a href="<?php echo base_url();?>index.php/article/<?php echo $item['title_url']; ?>"><?php echo $item['title']; ?></a></h3>
            <p><?php echo $item['keywords']; ?></p>
        <?php } ?>
    </div>
</div>