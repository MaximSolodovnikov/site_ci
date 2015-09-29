<div id="wrapper">
    <div id="content">
        <a name='c'></a>
        <h3><p><?php echo $pages_info['title']; ?></p></h3>
        <p><?php echo $pages_info['text_art']; ?></p>
        <p>Автор статьи: <?php echo $pages_info['author_art']; ?></p>
        <p>Дата публикации: <?php echo $pages_info['date_art']; ?></p>
      
    <br /><br /><hr />
    <p>Комментарии</p>
    <?php echo $captcha; ?>
    <?php echo $this->input->post('captcha'); ?>
    <?php echo $this->session->userdata['captcha'];?>
    <hr />
    
    <?php foreach($comments as $item) {?>
    
        <p><strong>Автор комментария:</strong> <?php echo $item['author_comm']; ?></p><br />
        <p><img src="<?php echo base_url();?>img/avatar.png" alt=""></p><br />
        <p>Текст комментария: <br /><?php echo $item['comment']; ?></p><br />
        <hr />
        
    <?php }?>
        
    <hr /><br /><br />
    <a name='f'></a>
    <form method="POST" action='<?php echo base_url();?>index.php/article/<?php echo $pages_info['title_url']; ?>#f'>
        <p>Автор:<div id="show_error"><?php echo form_error('author'); ?></div></p>
        <p><input type="text" name="author" value="<?php echo set_value('author'); ?>"></p><br />
        <p>Текст комментария:<div id="show_error"><?php echo form_error('comment'); ?></div></p>
        <p><textarea name="comment" cols="70" rows="7"><?php echo set_value('comment'); ?></textarea></p><br />
        <input type="hidden" name="avatar_comm" value='avatar.png'>
        <input type="hidden" name="title_url" value="<?php echo $pages_info['title_url']; ?>" >
        <input type="hidden" name="category" value="<?php echo $pages_info['category']; ?>" >
        <p>Символы с картинки:<div id="show_error"><?php echo $error; ?></div></p>
        <p><input type="text" name="captcha" value=""  ></p><br />
        <p><?php echo $captcha; ?></p>
        <p><input class="btn btn-success" type="submit" name="add" value="Отправить"></p>
    </form>
    </div>    
</div>