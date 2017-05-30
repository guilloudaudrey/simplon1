            <label for="nom">Nom</label><input type="text" name="nom" placeholder="Ex:Martin" id="nom" />
            <label for="prenom">Prénom</label><input type="text" name="prenom" placeholder="Ex:Paul" id="prenom" />
            <label for="age">Age</label><input type="number" name="age" min="0" id="age" />
            <label for="region">Région</label>
            <select name="region" id="region">
                <option value="nord">Nord</option>
                <option value="sud">Sud</option>
                <option value="est">Est</option>
                <option value="ouest">Ouest</option>
            </select>
            <label for="email">Email</label><input type="email" name="email" placeholder="name@exemple.com" id="email" />
            <label for="mdp">Mot de passe</label><input type="password" name="mdp" id="mdp" />
            <label>Avez-vous aimé l'article?</label>
            <div class="test">
                <label for="input-oui">Oui</label>
                <input id="input-oui" type="radio" name="rep" value="Oui" />
            </div>
            <div class="test">
                <label for="input-non">Non</label>
                <input id="input-non" type="radio" name="rep" value="Non" />
            </div>
            <label for="message">Message</label><textarea name="message" rows=10 cols="50" id="message"></textarea>
            <input class="button" type="submit" value="OK" />
            <input class="button" type="reset" value="Je recommence" />