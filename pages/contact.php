<section>
    <h1>Contact</h1>
</section>
<section>
    <div class="content">
        <form action="/save.php" method="post">
            <div>
                <input type="text" name="userName" placeholder="Pseudo">
            </div>
            <div>
                <input type="email" name="userEmail" placeholder="votre mail">
            </div>
            <div>
                <input type="text" name="subject" placeholder="sujet">
            </div>
            <div>
                <label for="id-message">votre message</label>
            </div>
            <div>
                <textarea name="userMessage" id="id-message" cols="30" maxlength="255" rows="10"
                          placeholder="255 caracteres max."></textarea>
            </div>
            <div>
                <input type="submit" value="envoyer">
            </div>
        </form>
    </div>
</section>
