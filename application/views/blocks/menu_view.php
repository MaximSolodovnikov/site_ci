<div id="menu">
    <ul>
        <?php foreach($pages as $item) { ?>
            <li>
                <a href="<?php echo base_url(); ?>index.php/pages/<?php echo $item['title_url_page'];?>"><?php echo $item['title'];?></a>
            </li>
        <?php } ?>
    </ul>
</div>