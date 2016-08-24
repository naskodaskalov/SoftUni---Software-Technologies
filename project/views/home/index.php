<?php $this->title = 'Добре дошли в "Обяви.Ме"'; ?>

<h2 class="pages-titles"><?=htmlspecialchars($this->title)?></h2>

<main>
    <?php if ($this->isLoggedIn) : ?>
        <div>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></div>
    <?php endif; ?>
</main>