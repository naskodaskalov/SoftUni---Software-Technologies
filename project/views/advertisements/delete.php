<?php $this->title = perm_title . ' :: Изтриване на обява'; ?>

<h2>Сигурни ли сте, че искате да изтриете тази обява?</h2>

<main>
    <form class="ads-form" method="post">
        <div class="ads-form">
            <div>Заглавие:</div>
            <input type="text" size="87" value="<?=htmlspecialchars($this->advertisement['title'])?>" disabled>
        </div>
        <div>Съдържание:</div>
        <textarea rows="15" cols="100" disabled><?=htmlspecialchars($this->advertisement['content'])?></textarea>
        <div>Цена:</div>
        <input type="text" size="10" value="<?=htmlspecialchars($this->advertisement['price'])?>" disabled>
        <div>Дата:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['date'])?>" disabled>
        <div>Автор ID:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['user_id'])?>" disabled>
        <div><input type="submit" value="Изтрий обява" />
            <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
    </form>
</main>