<?php $this->title = 'Влезте в системата'; ?>

<h2 class="pages-titles"><?= htmlspecialchars($this->title) ?></h2>

<main>
    <form class="login-form" method="post">
        <div class="divTable">
            <div class="divRow">
                <div class="divCell"><label for="username">Потребителско име:</label></div>
                <div class="divCell"><input type="text" id="username" name="username" placeholder="потребителско име"/></div>
            </div>
            <div class="divRow">
                <div class="divCell"><label for="password">Парола:</label></div>
                <div class="divCell"><input type="password" id="password" name="password" placeholder="парола"/></div>
            </div>
            </div>
            <div class="divRow">
                <div class="divCell-buttons" align="center"><input type="submit" value="Влез" />
                    <a href="<?=APP_ROOT?>/">[Отказ]</a><a href="<?=APP_ROOT?>/users/register">[Регистрирай се]</a></div>
            </div>

        </div>
    </form>
</main>