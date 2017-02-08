<h3>Liste des utilisateurs</h3>
<div id="newUser">
    <button class="ui basic button" onclick="">
        <i class="add user icon"></i>
        Nouvel Utilisateur...
    </button>
</div>

<div id = "container-list">
    <table class="ui selectable table">
        <th><?= $this->tag->checkField(['selectAll']) ?></th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Login</th>
        <th>Email</th>
        <th>Role</th>
        <?php foreach ($users as $user) { ?>

            <tr>
                <td><?= $this->tag->checkField(['select']) ?></td>
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


