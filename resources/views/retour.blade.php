<title>Retour d'experience</title>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@elseif (session()->has('soumis'))
    <div class="alert alert-success">{{ session()->get('soumis') }}</div>
@endif

<div class="Formulaire">
    <h1>Formulaire</h1>
    <form action="/soumission_formulaire" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value={{ old('nom') }}>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value={{ old('prenom') }}>
        </div>
        <div class="form-group">
            <label for="email">Adresse Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="type_activite">Type d'activité</label>
            <select id="type_activite" name="type_activite" value={{ old('type_activite') }}>
                <option value=""></option>
                <option value="activite1">Activite 1</option>
                <option value="activite2">Activite 2</option>
                <option value="activite3">activite 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="date_activite">Date de l'activité</label>
            <input type="date" id="date_activite" name="date_activite" value={{ old('date_activite') }}>
        </div>
        <div class="form-group">
            <label for="titre_du_retour">Titre de votre retour</label>
            <input type="text" id="titre_du_retour" name="titre_du_retour" value={{ old('titre_du_retour') }}>
        </div>
        <div class="form-group">
            <label for="retour">Votre retour</label>
            <textarea id="retour" name="retour" rows="4" value={{ old('retour') }}></textarea>
        </div>

        <div class="form-group">
            <label for="departement">Département</label>
            <select id="departement" name="departement" value={{ old('departement') }}>
                <option value=""></option>
                <option value="ain">Ain</option>
                <option value="aisne"> Aisne</option>
                <option value="ahp">Alpes de Haute-Provence</option>
            </select>
        </div>

        <div class="form-group">
            <label for="avis">Avis ou suggestion</label>
            <textarea id="avis" name="avis" rows="4" value={{ old('avis') }}></textarea>
        </div>

        <div class="form-group">
            <label for="niveau_pratique">Niveau de pratique :</label>
            <div class="radio-group">
                <label>
                    <input type="radio" name="niveau_pratique" value="debutant"
                        {{ old('niveau_pratique') == 'debutant' ? 'checked' : '' }}>
                    Débutant
                </label>
                <label>
                    <input type="radio" name="niveau_pratique" value="intermediaire"
                        {{ old('niveau_pratique') == 'intermediaire' ? 'checked' : '' }}>
                    Intermédiaire
                </label>
                <label>
                    <input type="radio" name="niveau_pratique" value="confirme"
                        {{ old('niveau_pratique') == 'confirme' ? 'checked' : '' }}>
                    Confirmé
                </label>
                <label>
                    <input type="radio" name="niveau_pratique" value="expert"
                        {{ old('niveau_pratique') == 'expert' ? 'checked' : '' }}>
                    Expert
                </label>
            </div>
        </div>
        <button type="submit">Soumettre</button>
    </form>

    <a href="{{ url('/page_accueil') }}" class="btn btn-primary">Retour page d'acceuil</a>
</div>
