<?php $this->title = perm_title . ' :: Редактирайте обява'; ?>

<h2><?=htmlspecialchars($this->title)?></h2>

<main>
    <form method="post">
        <div>Заглавие:</div>
        <input type="text" name="title" value="<?=htmlspecialchars($this->advertisement['title'])?>" />
        <div>Съдържание:</div>
        <textarea rows="10" name="content"><?=htmlspecialchars($this->advertisement['content'])?></textarea>
        <div>Цена:</div>
        <input type="text" name="price" value="<?=htmlspecialchars($this->advertisement['price'])?>" >
        <div>Автор:</div>
        <input type="text" name="user_id" value="<?=htmlspecialchars($this->advertisement['user_id'])?>"/>
        <div><input type="submit" value="Редактирай" />
            <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
    </form>
</main>

