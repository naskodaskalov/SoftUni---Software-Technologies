<?php $this->title = perm_title . ' :: Всички обяви'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>Заглавие</th>
        <th>Съдържание</th>
        <th>Цена</th>
        <th>Дата</th>
        <th>Автор</th>
        <?php if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") { ?>
        <th>Админ действия</th>
        <?php }?>
    </tr>
    <?php foreach ($this->advertisements as $this->advertisement) {?>
        <tr>
            <td><?=htmlspecialchars($this->advertisement['title'])?></td>
            <td><?=cutLongText($this->advertisement['content'])?><br/><a class="read-more" href="<?=APP_ROOT?>/home/view/<?=$this->advertisement['id']?>"> [дочети]</a></td>
            <td><?=$this->advertisement['price']?> лв.</td>
            <td><?=htmlspecialchars($this->advertisement['date'])?></td>
<!--            <td>--><?//=$advertisement['full_name']?>
            <td><?php if ($this->advertisement['full_name'] == null) {
                echo $this->advertisement['username'];
                } else {
                    echo $this->advertisement['full_name'];
                } ?>
            </td>
            <?php if (isset($_SESSION['username']) && $_SESSION['username'] == "admin") {?>
            <td><a href="<?=APP_ROOT?>/advertisements/edit/<?=$this->advertisement['id']?>">[Edit]</a>
                <a href="<?=APP_ROOT?>/advertisements/delete/<?=$this->advertisement['id']?>">[Delete]</a>
            </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
