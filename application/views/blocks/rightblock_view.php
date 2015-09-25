<div id="rightblock">
    <p><strong>Разделы</strong>
    <?php foreach ($categories as $item) { ?>
    <ul>
        <li>
            <a href="<?php echo base_url();?>index.php/articles/cat/<?php echo $item['title_url_cat']; ?>"><?php echo $item['title']; ?></a>
        </li>
    </ul>
    <?php } ?>
    <p><a href="<?php echo base_url();?>index.php/articles">Все статьи</a></p>
</div>
<div id="rightblock">
    <p><strong>Последние статьи</strong>
    <?php foreach ($latest_articles as $item) { ?>
    <ul>
        <li>
            <a href="<?php echo base_url();?>index.php/article/<?php echo $item['title_url']; ?>"><?php echo $item['title']; ?></a>
        </li>
    </ul>
    <?php } ?>
</div>