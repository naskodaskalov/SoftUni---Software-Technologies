<?php $this->title = perm_title . ' :: Моите обяви'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Заглавие</th>
        <th>Съдържание</th>
        <th>Цена</th>
        <th>Дата</th>
        <th>Автор</th>
        <th>Админ действия</th>
    </tr>
    <?php foreach ($this->myads as $myads) {
        if ($myads['user_id'] == $_SESSION['user_id']) {?>
            <tr>
                <td><?=$myads['id']?></td>
                <td><?=htmlspecialchars($myads['title'])?></td>
                <td><?=cutLongText($myads['content'])?><br/><a class="read-more" href="<?=APP_ROOT?>/home/view/<?=$myads['id']?>"> [дочети]</a></td>
                <td><?=$myads['price']?> лв.</td>
                <td><?=htmlspecialchars($myads['date'])?></td>
                <td><?=$myads['user_id']?></td>
                    <td><a href="<?=APP_ROOT?>/advertisements/edit/<?=$myads['id']?>">[Edit]</a>
                        <a href="<?=APP_ROOT?>/advertisements/delete/<?=$myads['id']?>">[Delete]</a>
                    </td>
            </tr>
        <?php } else {

        }} ?>
</table>

