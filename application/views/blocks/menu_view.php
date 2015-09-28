<div id="menu">
    <ul>
        <?php foreach($pages as $item) { ?>
            <li>
                <a href="<?php echo base_url(); ?>index.php/pages/<?php echo $item['title_url'];?>"><?php echo $item['title'];?></a>
            </li>
        <?php } ?>
    </ul>
</div>