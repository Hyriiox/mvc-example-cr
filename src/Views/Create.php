<section id="login-container">
    <div class="bienvenue">
        <h1>Fais toi un compte zeubi !</h1>
    </div>
    <form action='create' method="post">
        <input type="text" name="pseudo" placeholder=""></input>
        <input type="password" name="password" placeholder=""></input>
        <input type="text" name="email" placeholder=""></input>
        <input type="text" name="fonction" placeholder=""></input>

        <input type="submit" class="button" value="Enregistrer"/>
        <input type="reset" class="button" value="Annuler"/>
    </form>
    <?php
    if (isset($error_message)) {
    ?>
        <div>
            <p><?= $error_message ?></p>
        </div>
    <?php
    } ?>
</section>