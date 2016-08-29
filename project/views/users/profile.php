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
            <div class="divCell"></div>
        </div>
    </div>
</main>