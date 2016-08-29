<?php $this->title = perm_title . ' :: Добавете нова обявя!'; ?>

<h2><?=htmlentities($this->title)?></h2>

<main>
<form method="post">
    <div>Заглавие:</div>
    <input type="text" name="title" />
    <div>Цена:</div>
    <input type="text" name="price" />
    <div>Съдържание:</div>
    <textarea name="content" rows="10"></textarea>
    <div>Снимка:</div>
    <input type="text" name="photo" />
    <div><input type="submit" value="Добави" />
        <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
</form>
</main>