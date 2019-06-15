 <?php
        $hash = $_GET['hash'];

        if($hash == md5('614121390759251MXvRdponYG8lktKIhh9I')) { ?>
            <h1>Hello</h1>
        <?php } else { ?>
            <h1>Ошибка входа</h1>
        <?php } ?>
