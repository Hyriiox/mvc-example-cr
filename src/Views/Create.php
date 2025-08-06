<section id="create-container">
    <div class="bienvenue">
        <h1>Fais toi un compte Zeubi !</h1>
    
    <form action='create' method="post">

    <div>
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" placeholder=""></input>
    </div>

    <div>
        <label for="email">Email :</label>
        <input type="text" name="email" placeholder=""></input>
    </div>

    <div>
        <label for="password">Mot de Passe :</label>
        <input type="password" name="password" placeholder=""></input>
    </div>

    <div>
        <label for="fonction">Fonction :</label>
        <input type="text" name="fonction" placeholder=""></input>
    </div>

    <div class="inline">
        <input type="submit" class="button" value="Enregistrer"/>
        <input type="reset" class="button" value="Annuler"/>
    </div>

    </div>
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