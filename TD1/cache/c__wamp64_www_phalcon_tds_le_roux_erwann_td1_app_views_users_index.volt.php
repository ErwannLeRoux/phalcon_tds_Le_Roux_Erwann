<h3>Liste des utilisateurs</h3>

<div id="newUser">
    <?= $this->tag->linkTo(['users/form', '<i class="add user icon"></i>Nouvel Utilisateur...', 'class' => 'ui basic button']) ?>
</div>
<div id = "container-list">
    <table class="ui selectable table">
        <th>
            <div class="ui checkbox">
                <input id="tout" type="checkbox">
                <label for="tout"></label>
            </div>
        </th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Login</th>
        <th>Email</th>
        <th>Role</th>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td>
                    <div name = "check" class="ui checkbox">
                        <input class = "autreCheck" name = "example" id="example_<?= $user->getId() ?>" type="checkbox" onchange="checkAllBoxes(this)">
                        <label for="example_<?= $user->getId() ?>"></label>
                    </div>
                </td>
                <td>
                    <?= $user->getFirstname() ?>
                </td>
                <td>
                    <?= $user->getLastname() ?>
                </td>
                <td>
                    <?= $user->getLogin() ?>
                </td>
                <td>
                    <?= $user->getEmail() ?>
                </td>
                <td>
                    <?php foreach ($roles as $role) { ?>
                        <?php if ($role->getId() == $user->getIdrole()) { ?>
                            <?= $role->getName() ?>
                        <?php } ?>
                    <?php } ?>
                </td>
                <td>
                    <button class="ui basic button">
                        <i class="edit icon"></i>
                    </button>
                    <button class="ui basic red button">
                        <i class="red remove icon"></i>
                    </button>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>


