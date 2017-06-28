<div id="inscription">
    <h2>Inscription</h2>
    <form method="post" action="controller/signup.php">
        <input name="nom" class="input" type="text" placeholder="  Nom*" min="3" required="required"><br>
        <input name="prenom" class="input" type="text" placeholder="  Prénom*" min="3" required="required"><br>
        <input name="email" class="input" type="text" placeholder="  Email*" pattern="[a-zA-Z_]+[0-9]*@[a-zA-Z]+.[a-zA-Z]+" required="required"><br>
        <input name="password" class="input" type="password" placeholder="  Password*" min="5" required="required"><br>
        <input name="image" type="file" accept="application/png" value="Attaché votre Image"><br>

        <br><br><br>
        <input name="structure" class="input" type="text" placeholder="  Structure d'affiliation"><br>
        <input name="fonction" type="text" class="input" placeholder="  Fonction" min="3"><br>
        <input name="grade" class="input" type="text" placeholder="  Grade" min="5"><br>

        <select name="pays" class="input">
               <option value="1">Algerie</option>
               <option value="2">France</option>
               <option value="3">USA</option>
               <option value="4">Australie</option>
        </select><br>

        <textarea name="biographie" id="biographie"  cols="40" rows="10" placeholder="biographie..."></textarea><br>



        <input name="cvitae" type="file" accept="application/pdf" value="Attaché votre CV"><br>

        <input name="signup" class="input validation" type="submit" value="Inscription">
    </form>
</div>