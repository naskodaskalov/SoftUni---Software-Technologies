<?php $this->title  = perm_title . ' :: профилът на ' . $this->user['username']; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<main>


    <div class="divTable">
        <div class="divRow">
            <div class="divCell-titles">Име и фамилия:</div>
            <div class="divCell"><?=htmlentities($this->user['full_name'])?></div>
        </div>
        <div class="divRow">
            <div class="divCell-titles">Потребителско име:</div>
            <div class="divCell"><?=htmlentities($this->user['username'])?></div>
        </div>
        <div class="divRow">
            <div class="divCell-titles">E-mail адрес:</div>
            <div class="divCell"><?=htmlentities($this->user['email'])?></div>
        </div>
        <div class="divRow">
            <div class="divCell-titles">Мобилен телефон:</div>
            <div class="divCell"><?=htmlentities($this->user['phone'])?></div>
        </div>
        <div class="divRow">
            <div class="divCell-titles">Всички обяви на потребителя:</div>
            <div class="divCell">

            </div>
            <table>
                <tr>
                    <th>Заглавие</th>
                    <th>Съдържание</th>
                    <th>Цена</th>
                    <th>Дата</th>
                    <th>Автор</th>
                    <?php if (isset($_SESSION['username']) && $_SESSION['user_id'] == $this->users['id'] || isset($_SESSION['username']) && $_SESSION['user_id'] == "5") { ?>
                        <th>Админ действия</th>
                    <?php } ?>
                </tr>
                <?php foreach ($this->usersAds as $usersAds) {
                    if ($this->users['id'] == $usersAds['user_id']) {?>
                        <tr>
                            <td><?=htmlspecialchars($usersAds['title'])?></td>
                            <td><?=cutLongText($usersAds['content'])?><br/><a href="<?=APP_ROOT?>/home/view/<?=$usersAds['id']?>"> [дочети]</a></td>
                            <td><?=$usersAds['price']?> лв.</td>
                            <td><?=htmlspecialchars($usersAds['date'])?></td>
                            <td><?php if ($usersAds['full_name'] == null) {
                                    echo $usersAds['username'];
                                } else {
                                    echo $usersAds['full_name'];
                                } ?>
                            </td>
                            <?php if (isset($_SESSION['username']) && $_SESSION['user_id'] == $this->users['id'] || isset($_SESSION['username']) &&  $_SESSION['user_id'] == "5") { ?>
                                <td><a href="<?=APP_ROOT?>/advertisements/edit/<?=$usersAds['id']?>">[Edit]</a>
                                    <a href="<?=APP_ROOT?>/advertisements/delete/<?=$usersAds['id']?>">[Delete]</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } else {

                    }
                } ?>
            </table>
        </div>
    </div>
</main>