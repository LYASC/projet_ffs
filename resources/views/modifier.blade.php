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
    <form action="/modification_retour" method="POST">
        <input type="text" name="id" style="display: none;" value="{{ $internaute->id }}">

        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom"
                    value="{{ old('nom', isset($internaute) ? $internaute->nom : '') }}">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom"
                    value="{{ old('prenom', isset($internaute) ? $internaute->prenom : '') }}">
            </div>
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" id="email" name="email"
                    value="{{ old('email', isset($internaute) ? $internaute->email : '') }}">
            </div>
            <div class="form-group">
                <label for="type_activite">Type d'activité</label>
                <select id="type_activite" name="type_activite">
                    <option value=""></option>
                    <option value="activite1"
                        {{ old('type_activite', isset($internaute) ? $internaute->type_activite : '') == 'activite1' ? 'selected' : '' }}>
                        Activité 1</option>
                    <option value="activite2"
                        {{ old('type_activite', isset($internaute) ? $internaute->type_activite : '') == 'activite2' ? 'selected' : '' }}>
                        Activité 2</option>
                    <option value="activite3"
                        {{ old('type_activite', isset($internaute) ? $internaute->type_activite : '') == 'activite3' ? 'selected' : '' }}>
                        Activité 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_activite">Date de l'activité</label>
                <input type="date" id="date_activite" name="date_activite"
                    value="{{ old('date_activite', isset($internaute) ? $internaute->date_activite : '') }}">
            </div>
            <div class="form-group">
                <label for="titre_du_retour">Titre de votre retour</label>
                <input type="text" id="titre_du_retour" name="titre_du_retour"
                    value="{{ old('titre_du_retour', isset($internaute) ? $internaute->titre_du_retour : '') }}">
            </div>
            <div class="form-group">
                <label for="retour">Votre retour</label>
                <textarea id="retour" name="retour" rows="4">{{ old('retour', isset($internaute) ? $internaute->retour : '') }}</textarea>
            </div>
            <div class="form-group">
                <label for="departement">Département</label>
                <select id="departement" name="departement">
                    <option value=""></option>
                    <option value="ain"
                        {{ old('departement', isset($internaute) ? $internaute->departement : '') == 'ain' ? 'selected' : '' }}>
                        Ain</option>
                    <option value="aisne"
                        {{ old('departement', isset($internaute) ? $internaute->departement : '') == 'aisne' ? 'selected' : '' }}>
                        Aisne</option>
                    <option value="ahp"
                        {{ old('departement', isset($internaute) ? $internaute->departement : '') == 'ahp' ? 'selected' : '' }}>
                        Alpes de Haute-Provence</option>
                </select>
            </div>
            <div class="form-group">
                <label for="avis">Avis ou suggestion</label>
                <textarea id="avis" name="avis" rows="4">{{ old('avis', isset($internaute) ? $internaute->avis : '') }}</textarea>
            </div>
            <div class="form-group">
                <label for="niveau_pratique">Niveau de pratique :</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="niveau_pratique" value="debutant"
                            {{ old('niveau_pratique', isset($internaute) ? $internaute->niveau_pratique : '') == 'debutant' ? 'checked' : '' }}>
                        Débutant
                    </label>
                    <label>
                        <input type="radio" name="niveau_pratique" value="intermediaire"
                            {{ old('niveau_pratique', isset($internaute) ? $internaute->niveau_pratique : '') == 'intermediaire' ? 'checked' : '' }}>
                        Intermédiaire
                    </label>
                    <label>
                        <input type="radio" name="niveau_pratique" value="confirme"
                            {{ old('niveau_pratique', isset($internaute) ? $internaute->niveau_pratique : '') == 'confirme' ? 'checked' : '' }}>
                        Confirmé
                    </label>
                    <label>
                        <input type="radio" name="niveau_pratique" value="expert"
                            {{ old('niveau_pratique', isset($internaute) ? $internaute->niveau_pratique : '') == 'expert' ? 'checked' : '' }}>
                        Expert
                    </label>
                </div>
            </div>
            <button type="submit">Soumettre</button>

            <a href="{{ url('/tableau_de_bord') }}" class="btn btn-primary">Retour page d'acceuil</a>
        </div>
