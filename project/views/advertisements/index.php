<?php $this->title = perm_title . ' :: Всички обяви'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Заглавие</th>
        <th>Съдържание</th>
        <th>Цена</th>
        <th>Дата</th>
        <th>Автор</th>
        <?php if ($_SESSION['username'] == "admin") { ?>
        <th>Админ действия</th>
        <?php }?>
    </tr>
    <?php foreach ($this->advertisements as $advertisement) { ?>
        <tr>
            <td><?=$advertisement['id']?></td>
            <td><?=htmlspecialchars($advertisement['title'])?></td>
            <td><?=cutLongText($advertisement['content'])?><br/><a class="read-more" href="<?=APP_ROOT?>/home/view/<?=$advertisement['id']?>"> [дочети]</a></td>
            <td><?=$advertisement['price']?> лв.</td>
            <td><?=htmlspecialchars($advertisement['date'])?></td>
            <td><?=$advertisement['user_id']?></td>
            <?php if ($_SESSION['username'] == "admin") {?>
            <td><a href="<?=APP_ROOT?>/advertisements/edit/<?=$advertisement['id']?>">[Edit]</a>
                <a href="<?=APP_ROOT?>/advertisements/delete/<?=$advertisement['id']?>">[Delete]</a>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

