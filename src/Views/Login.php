<section id="login-container">
    <div class="bienvenue">
        <h1>Bienvenue sur Code News</h1>
        <p>Veuillez vous authentifier :</p>
    </div>
    <form action='login' method="post">
        <input type="text" name="email" placeholder="Email"></input>
        <input type="password" name="password" placeholder="Mot de passe"></input>

        <input type="submit" class="button" value="Connexion" />
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