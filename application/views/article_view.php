<div id="wrapper">
    <div id="content">
        <h3><p><?php echo $pages_info['title']; ?></p></h3>
        <p><?php echo $pages_info['text_art']; ?></p>
        <p>Автор статьи: <?php echo $pages_info['author_art']; ?></p>
        <p>Дата публикации: <?php echo $pages_info['date_art']; ?></p>
      
    <br /><br /><hr />
    <p>Оставить комментарий</p>
    <hr /><br /><br />
    <a name='f'></a>
    <form method="POST" action='<?php echo base_url();?>index.php/article/<?php echo $pages_info['title_url']; ?>#f'>
        <p>Автор:<div id="show_error"><?php echo form_error('author'); ?></div></p>
        <p><input type="text" name="author" value="<?php echo set_value('author'); ?>"></p><br />
        <p>Текст комментария:<div id="show_error"><?php echo form_error('comment'); ?></div></p>
        <p><textarea name="comment" cols="70" rows="7"><?php echo set_value('comment'); ?></textarea></p><br /><br />
        <input type="hidden" name="avatar_comm" value='avatar.png'>
        <input type="hidden" name="title_url" >
        <input type="hidden" name="category_comm" >
        <p><input class="btn btn-success" type="submit" name="add" value="Отправить"></p>
    </form>
        
    </div>    
</div>