<form action="/thanks.php" method="post">
    
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="last_name">
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="first_name">
    </div>
    <div>
        <label for="phone">Phone Number :</label>
        <input type="text" id="phone" name="phone_number">
    </div>
    <div>
        <label for="courriel">Email :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <label for="subject">Subject:</label>
    <select id="subject" name="subject">
        <option value="Valorant">Valorant</option>
        <option value="Days Gone">Days Gone</option>
        <option value="Dishonored">Dishonored</option>
        <option value="Elden Ring">Elden Ring</option>
    </select>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Send</button>
    </div>
</form>