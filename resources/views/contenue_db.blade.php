<!DOCTYPE html>
<html>

<head>
    <title>Liste des retours d'expérience</title>
</head>

<body>
    <h1>Liste des retours d'expérience</h1>
    @if (session()->has('soumis'))
        <div class="alert alert-success">{{ session()->get('soumis') }}</div>
    @endif
    <table border="1">

        <tr>
            {{--  <th>ID</th> --}}
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Type d'activité</th>
            <th>Date de l'activité</th>
            <th>Titre du retour</th>
            <th>Retour</th>
            {{--       <th>Département</th> --}}
            {{--   <th>Avis</th> --}}
            {{--   <th>Niveau de pratique</th> --}}
            <th>Créé le</th>
        </tr>
        @foreach ($internautes as $internaute)
            <tr>
                {{--  <td>{{ $internaute->id }}</td> --}}
                <td>{{ $internaute->nom }}</td>
                <td>{{ $internaute->prenom }}</td>
                <td>{{ $internaute->email }}</td>
                <td>{{ $internaute->type_activite }}</td>
                <td>{{ $internaute->date_activite }}</td>
                <td>{{ $internaute->titre_du_retour }}</td>
                {{--             <td>{{ $internaute->retour }}</td> --}}
                <td>{{ $internaute->departement }}</td>
                {{-- <td>{{ $internaute->avis }}</td>
                <td>{{ $internaute->niveau_pratique }}</td> --}}
                <td>{{ $internaute->created_at }}</td>
                <td>
                    <a href="{{ url('/modification_retour/' . $internaute->id) }}" class="btn btn-primary">Modifier</a>

                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
