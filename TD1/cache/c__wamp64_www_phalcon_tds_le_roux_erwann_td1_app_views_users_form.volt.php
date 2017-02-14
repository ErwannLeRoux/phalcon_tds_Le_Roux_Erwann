<div class="ui menu">
    <?= $this->tag->linkTo(['users/index', '<i class="sign in icon"></i> Retour à la liste', 'class' => 'item']) ?>
</div>

<div class="ui icon message">
    <i class="info icon"></i>
    <div class="content">
        <div class="header">
            Message
        </div>
        <p><?= $texte ?></p>
    </div>
</div>

<div class="ui form">
    <div class="two fields">
        <div class="field">
            <label>Prénom</label>
            <input type="text" placeholder="Prénom" value="">
        </div>
        <div class="field">
            <label>Nom</label>
            <input type="text" placeholder="Nom">
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Login*</label>
            <input type="text" placeholder="Login" required>
        </div>
        <div class="field">
            <label>Mot de passe*</label>
            <input type="password" placeholder="Mot de passe" required>
        </div>
    </div>
    <div class="field">
        <label>Email*</label>
        <input type="text" placeholder="Email" required>
    </div>
    <div class="field">
        <label>Role</label>
        <select class="ui dropdown">
            <?php foreach ($roles as $role) { ?>
                <option value=""><?= $role->getName() ?></option>
            <?php } ?>
        </select>
    </div>

</div>
<br>
<div class="two ui buttons">
    <button class="ui green button">Valider</button>
    <button class="ui button">Réinitialiser</button>
</div>



