<?php require_once "header.php"; ?>

<form action="#" class="login__form">
    <div class="labels">
        <label for="nickname">Nickname: </label>
        <label for="email">E-mail: </label>
        <label for="password">Password: </label>
    </div>
    <div class="inputs">
        <input type="text" id="nickname" name="nickname" autocomplete="off">
        <input type="email" id="email" name="email" autocomplete="off">
        <input type="password" id="password" name="password" autocomplete="off">
    </div>

    <div class="div__for_btn">
        <button type="submit" class="login__form_btn">Sign up</button>
    </div>
</form>
<div class="skip__div"></div>

<?php require_once "footer.php"; ?>
