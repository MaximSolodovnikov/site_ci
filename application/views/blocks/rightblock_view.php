<div id="rightblock">
    <p><strong>Разделы</strong>
    <?php foreach ($categories as $item) { ?>
    <ul>
        <li>
            <a href="<?php echo base_url();?>index.php/articles/<?php echo $item['title_url_cat']; ?>"><?php echo $item['title_cat']; ?></a>
        </li>
    </ul>
    <?php } ?>
    <p><a href="<?php echo base_url();?>index.php/articles">Все статьи</a></p>
</div>