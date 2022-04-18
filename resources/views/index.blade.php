@extends('layouts.app')


@section('content')

<h1>Bienvenue</h1>


<!--<div class="container">
       <div class="row">
           <div class="col-md-10 col-md-offset-2">
           <div class="pull-right"><a href="{{url('create')}}" class="btn btn-success">Nouveau Profe</a></div>
           <table class="table table-info">
                <thead>
                    <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Dossier_scientifique</th>
                    <th scope="col">Dossier_Pedagogique</th>
                    <th scope="col">Dossier_administratif</th>
                    
                    <th scope="col">Show</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($professeurs as $professeur)
                    <tr>
                    <td>{{$professeur->nom}}</td>
                    <td>{{$professeur->prenom}}</td>
                    <td><a href="/storage/{{$professeur->Dossier_scientifique}}"   download>Download Dossier_scientifique</a></td>
                    <td><a href="/storage/{{$professeur->Dossier_Pedagogique}}"  download>Download Dossier_Pedagogique</a></td>
                    <td><a href="/storage/{{$professeur->Dossier_administratif}}"  download>Download Dossier_administratif</a></td>
                    
                    <td><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Show</a></form></td>
                    <td><form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-primary">Edit</a></form></td>
                    <td><form action="{{route('professeurs.destroy',$professeur->id)}}" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-danger">Delete</button></form></td>

                    </tr>
                    
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
</div>-->
<div class="row">
    @foreach ($professeurs as $professeur)
    <div class="col-md-4 my-2">

        <div class="card text-left">
            <h2 class="card-title text-center">{{$professeur->nom}} {{$professeur->prenom}}</h2>
            <img class="card-img-top" src="{{asset('/storage/'.$professeur->image)}}" alt="">
            <div class="card-body">
                <p>Spécialité : {{$professeur->specialite}}</p>
                <p>Email : {{$professeur->email}}</p>
                <p>Téléphone : {{$professeur->telephone}}</p>
                <p>Date de recrutement : {{$professeur->date_recrutement}}</p>
                <form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Voir plus</a></form>
            </div>
        </div>
    </div>
    @endforeach
</div>



@endsection