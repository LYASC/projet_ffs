
<title>Retour d'experience</title>
    <div class="Formulaire">
        <h2>Formulaire</h2>
        <form>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="date_activite">Date de l'activité</label>
                <input type="date" id="date_activite" name="date_activite" required>
            </div>
    
            <div class="form-group">
            <label for="departement">Département</label>
                <select id="departement" name="departement" required>
                    <option value=""></option>
                    <option value="Ain">Ain</option>
                    <option value="	Aisne">	Aisne</option>
                    <option value="Alpes de Haute-Provence">Alpes de Haute-Provence</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="avis">Avis ou suggestion</label>
                <textarea id="avis" name="avis" rows="4" required></textarea>
            </div>
    
        <div class="form-group">
                <label>Niveau de pratique :</label>
                <div class="radio-group">
        
                    <label>
                        <input type="radio" id="debutant" name="niveau_pratique" value="debutant" required>
                        Débutant
                    </label>
            
                    <label>
                        <input type="radio" id="intermediaire " name="niveau_pratique" value="intermediaire">
                        Intermédiaire
                    </label>
    
                    <label>
                        <input type="radio" id="confirme"  name="niveau_pratique" value="confirme">
                        Confirmé
                    </label>
                    <label>
                        <input type="radio" id="expert"  name="niveau_pratique" value="expert">
                        Expert
                    </label>
                </div>
            </div>
            
            <button type="submit">Soumettre</button>
        </form>
    </div>
    