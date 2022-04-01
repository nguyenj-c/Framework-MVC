<form class="form-text" action="/" method="POST" onsubmit="return Valide(this)">
    <label class="form-label" for="email">Email :</label>
    <input type="email" name="email" id="email" size="50" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" placeholder="toto@exemple.com"
           class="input-group-text" required>
    <label class="form-label" for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" class="input-group-text" required>
</form>

