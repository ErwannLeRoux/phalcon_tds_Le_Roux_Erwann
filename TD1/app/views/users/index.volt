<h3>Liste des utilisateurs</h3>
<div id="newUser">
    <button class="ui basic button" onclick="">
        <i class="add user icon"></i>
        Nouvel Utilisateur...
    </button>
</div>

<div id = "container-list">
    <table class="ui selectable table">
        <th>{{ check_field("selectAll") }}</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Login</th>
        <th>Email</th>
        <th>Role</th>
        {% for user in users %}

            <tr>
                <td>{{ check_field("select") }}</td>
                <td>
                    {{ user.getFirstname() }}
                </td>
                <td>
                    {{ user.getLastname() }}
                </td>
                <td>
                    {{ user.getLogin() }}
                </td>
                <td>
                    {{ user.getEmail() }}
                </td>
                <td>
                    {% for role in roles %}
                        {% if role.getId() == user.getIdrole() %}
                            {{ role.getName() }}
                        {% endif %}
                    {% endfor %}
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
        {% endfor %}
    </table>
</div>


