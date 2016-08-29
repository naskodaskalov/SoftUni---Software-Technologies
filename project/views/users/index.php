<?php $this->title = perm_title . ':: Списък с всички потребители'; ?>

<h2>Списък с всички потребители</h2>

<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Потребителско име</th>
            <th>Име и фамилия</th>
            <th>Телефон</th>
            <th>E-mail</th>
        </tr>
        <?php foreach($this->users as $user) { ?>
            <tr>
                <td><?=$user['id'] ?></td>
                <td><a href="<?=APP_ROOT?>/users/profile/<?=$user['id']?>"><?=htmlspecialchars($user['username']) ?></a></td>
                <td><a href="<?=APP_ROOT?>/users/profile/<?=$user['id']?>"><?=htmlspecialchars($user['full_name']) ?></a></td>
                <td><?=$user['phone'] ?></td>
                <td><?=htmlspecialchars($user['email']) ?></td>
            </tr>
        <?php } ?>
    </table>
</main>