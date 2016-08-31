<?php $this->title = perm_title . ' :: Редактирайте обява'; ?>

<h2><?=htmlspecialchars($this->title)?></h2>

<main>
    <form class="ads-form" method="post">
        <div class="ads-form">
            <div>Заглавие:</div>
            <input type="text" name="title" value="<?=htmlspecialchars($this->advertisement['title'])?>" size="87"/>
        </div>
        <div>Съдържание:</div>
        <textarea rows="15" cols="100" name="content"><?=htmlspecialchars($this->advertisement['content'])?></textarea>
        <div>Цена:</div>
        <input type="text" name="price" size="10" value="<?=htmlspecialchars($this->advertisement['price'])?>" >лв.
        <div>Автор ID:</div>
        <input type="text" name="user_id" value="<?=htmlspecialchars($this->advertisement['user_id'])?>"/>
        <div><input type="submit" value="Редактирай обява" />
            <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
    </form>
</main>

