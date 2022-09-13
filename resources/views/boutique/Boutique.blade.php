@extends('template')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/boutique/boutique.css') }}">
    <title>Vault Tec Corporation</title>
</head>

@section('content')
    <main>

        <body>

            <h1>BOUTIQUE</h1>

            <a href="/create-article">Créer un article</a>

            @foreach ($boutiques as $boutique)
                <div class="produit">
                    <img src="{{ asset('storage/' . $boutique->img) }}" alt="Produit" class="img-produit" />
                    <p>{{ $boutique->nom }}</p>
                    <p>{{ $boutique->description }}</p>
                    <p>{{ $boutique->prix }}</p>
                    <p>{{ $boutique->quantité }}</p>
                    <p><a href="/boutique/article/{{ $boutique->idproduit }}">En savoir plus sur cet article</a></p>
                    @if (session('iduser') == $boutique->iduser)
                        <div>
                            <a class="text-danger" href="/delete-article/{{ $boutique->idproduit }}">Supprimer</a>
                            <a class="text-primary" href="/update-article/{{ $boutique->idproduit }}">Modifier</a>
                        </div>
                    @endif
                </div>
            @endforeach

        </body>

    </main>
@endsection
