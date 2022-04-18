@extends('layouts.app')


@section('content')

<h1>Bienvenue</h1>


<div class="row justify-content-center">
    @foreach ($professeurs as $professeur)
    <div class="col-md-4 my-1">

        <div class="card text-left">
            <h2 class="card-title text-center">{{$professeur->nom}} {{$professeur->prenom}}</h2>
            <img class="card-img-top" src="{{asset('/storage/'.$professeur->image)}}" alt="">
            <div class="card-body">
                <p>Spécialité : {{$professeur->specialite}}</p>
                <p>Email : {{$professeur->email}}</p>
                <p>Téléphone : {{$professeur->telephone}}</p>
                <p>Date de recrutement : {{$professeur->date_recrutement}}</p>
                <form action="" method="post">
                    <a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-warning">Voir plus</a>
                    <a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-warning">Modifier mon profil</a>
                </form>

            </div>
        </div>
    </div>
    @endforeach
</div>




@endsection