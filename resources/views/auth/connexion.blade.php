<title>Retour d'experience</title>
<h1>Connexion espace administratif</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
@endif
</ul>
<div class="card">
    <div class="card-body">
        <form action="/page_connexion" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                <button class="btn btn-primarty">Se connecter</button>
            </div>
        </form>
        <a href="{{ url('/page_accueil') }}" class="btn btn-primary">Retour page d'acceuil</a>
    </div>
