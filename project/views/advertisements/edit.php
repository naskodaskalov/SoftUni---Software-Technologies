<?php $this->title = perm_title . ' :: Редактирайте обява'; ?>

<h2><?=htmlspecialchars($this->title)?></h2>

<main>
    <form class="ads-form" method="post">
        <div class="ads-form">
            <div>Заглавие:</div>
            <input type="text" name="title" value="<?=htmlspecialchars($this->advertisements['title'])?>" size="87"/>
        </div>
        <div>Съдържание:</div>
        <textarea rows="15" cols="100" name="content"><?=htmlspecialchars($this->advertisements['content'])?></textarea>
        <div>Цена:</div>
        <input type="text" name="price" size="10" value="<?=htmlspecialchars($this->advertisements['price'])?>" >лв.
        <?php if ($_SESSION['user_id'] == "5") { ?>
            <div>Автор ID:</div>
            <input type="text" name="user_id" value="<?=htmlspecialchars($this->advertisements['user_id'])?>"/>
        <?php } ?>
<!--        <div>Категория:</div>-->
<!--        <select name="categories">-->
<!--                <option value="--><?//=$this->advertisements['categories']?><!--" selected>--><?//=$this->advertisement['categories']?><!--</option>-->
<!--            --><?php //foreach ($this->categories as $category) { ?>
<!--                <option value="--><?//=$category['type_category']?><!--">--><?//=$category['type_category']?><!--</option>-->
<!--            --><?php //} ?>
<!--}        </select>-->
        <div><input type="submit" value="Редактирай обява" />
            <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
    </form>
</main>

