<?php $this->title = perm_title . ' :: Добавете нова обявя!'; ?>

<h2><?=htmlentities($this->title)?></h2>

<main>
<form class="ads-form" method="post">
    <div class="ads-form">
        <div>Заглавие:</div>
        <input type="text" name="title" size="87"/>
    </div>
    <div>Съдържание:</div>
    <textarea name="content" rows="15" cols="100"></textarea>
    <div>Цена:</div>
    <input type="text" name="price" size="10"/>лв.
    <div>Снимка:</div>
    <input type="text" name="photo" />
    <div><input type="submit" value="Добави обява" />
        <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
</form>
</main>