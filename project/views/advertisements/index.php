<?php $this->title = 'Всички обяви'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Author ID</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($this->advertisements as $advertisement) { ?>
        <tr>
            <td><?= $advertisement['id']?></td>
            <td><?= htmlspecialchars($advertisement['title'])?></td>
            <td><?= cutLongText($advertisement['content'])?></td>
            <td><?= htmlspecialchars($advertisement['date'])?></td>
            <td><?= $advertisement['user_id']?></td>
            <td><a href="<?=APP_ROOT?>/advertisements/edit/<?=$advertisement['id']?>">[Edit]</a>
                <a href="<?=APP_ROOT?>/advertisements/delete/<?=$advertisement['id']?>">[Delete]</a>
            </td>
        </tr>
    <?php } ?>
</table>
