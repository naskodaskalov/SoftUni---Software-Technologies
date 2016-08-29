<?php $this->title = perm_title . ' :: Изтриване на обява'; ?>

<h2>Сигурни ли сте, че искате да изтриете тази обява?</h2>

<main>
    <form method="post">
        <div>Заглавие:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['title'])?>" disabled>
        <div>Съдържание:</div>
        <textarea rows="10" disabled><?=htmlspecialchars($this->advertisement['content'])?></textarea>
        <div>Цена:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['price'])?>" disabled>
        <div>Дата:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['date'])?>" disabled>
        <div>Автор ID:</div>
        <input type="text" value="<?=htmlspecialchars($this->advertisement['user_id'])?>" disabled>
        <div><input type="submit" value="Изтрий" />
            <a href="<?=APP_ROOT?>/advertisements">[Отказ]</a></div>
    </form>
</main>