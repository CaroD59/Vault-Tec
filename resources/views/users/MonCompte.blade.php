@extends('template')

<head>
    <link rel="stylesheet" href="{{ asset('css/authentification/account.css') }}">
</head>

@section('content')
    <h2>Mon profil</h2>

    <article>
        <div class="verified">
            {{ session('isVerified') == null ? 'NOT VERIFIED' : 'VERIFIED' }}
        </div>
        <form class="lunchbox-div" method="POST" action="/mon-profil">
            @csrf
            {{-- Là où sera tous nos emojis -> slot --}}
            <div class="slot"></div>
            <img src="img/profile/lunchbox.png" class="lunchbox" id="id-lunchbox" alt="">
            <div class="items-div" id="items-div">
                <h1>Mes items</h1>
                <div class="items">
                    @foreach ($items as $item)
                        <img src="{{ $item->img }}" class="img-items" alt="">
                        <p>{{ $item->item }}</p>
                    @endforeach
                </div>
            </div>
        </form>

    </article>

    <form method="POST" action="/mon-profil" enctype="multipart/form-data">
        @csrf

        <div class="avatar">
            <img src="{{ Session::get('avatar') }}" alt="" class="img-avatar">
        </div>
        <div class="form-group">
            <a href="/modifier-avatar">Changer mon avatar</a>
        </div>
        <div class="form-group">
            <label for="nom">Nom de famille</label>
            <input type="text" name="nom" class="nom" value="{{ Session::get('nom') }}">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="prenom" value="{{ Session::get('prenom') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="email" value="{{ Session::get('email') }}">
        </div>
        <div class="form-group">
            <label for="mdp">Nouveau mot de passe</label>
            <input type="password" name="mdp" class="mdp">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" class="password_confirmation">
        </div>
        <div class="form-group">
            <input type="submit" value="Modifier mon profil">
        </div>
        <div class="form-group">
            <a href="">Désactiver mon compte</a>
        </div>

    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="/js/lunchbox.js"></script>
@endsection
