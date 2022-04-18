@extends('layouts.app')


@section('content')

<!--<h1>Edit</h1>
<form method="POST" action="{{url('professeurs/'.$professeurs->id)}}" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT">   
@csrf
   <div class="container">
       <div class="row">
           <div class="col-md-6">
   
                    <div class="form-group ">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" value="{{$professeurs->nom}}" name="nom" >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control"value="{{$professeurs->prenom}}" name="prenom" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control"value="{{$professeurs->email}}" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control"value="{{$professeurs->cin}}" name="cin" >
                    </div>
                    
                    @if($professeurs->image)
                    <div class="form-group">
                        <img src="/storage/{{$professeurs->image}}" alt="">
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" value="{{$professeurs->image}}" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control"value="{{$professeurs->telephone}}" name="telephone" >
                    </div>
                    <div class="form-group">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_recrutement}}" name="date_recrutement" >
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control"value="{{$professeurs->date_naissance}}" name="date_naissance" >
                    </div>
                    <div class="form-group">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A" {{$professeurs->specialite=="A" ?'selected' :''}}>A</option>
                            <option value="B" {{$professeurs->specialite=="B" ?'selected' :''}}>B</option>
                            <option value="C" {{$professeurs->specialite=="C" ?'selected' :''}}>C</option>
                        </select>

                    </div>
                    
                    <div class="form-group has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio" name="appartenant_a_ENSAJ" value="Oui" {{ $professeurs->appartenant_a_ENSAJ=="Oui" ? 'checked' : ''}}  >
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio" name="appartenant_a_ENSAJ"  value="No" {{ $professeurs->appartenant_a_ENSAJ=="No" ? 'checked' : ''}}  >
                        </div>
                            
                    </div>

                    @if($professeurs->Dossier_scientifique)
                    <div class="form-group">
                        <a href="/storage/{{$professeurs->Dossier_scientifique}}" class="link-success"  download>Download Dossier scientifique</a>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_scientifique}}" name="Dossier_scientifique" >
                    </div>
                    
                    @if($professeurs->Dossier_Pedagogique)
                    <div class="form-group">
                    <a href="/storage/{{$professeurs->Dossier_Pedagogique}}" class="link-success" download>Download Dossier Dossier_Pedagogique</a>
                    </div>
                    @endif
                    <div class="form-group">
                        <a></a>
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_Pedagogique}}" name="Dossier_Pedagogique" >
                    </div>

                    @if($professeurs->Dossier_administratif)
                    <div class="form-group">
                    <a href="/storage/{{$professeurs->Dossier_administratif}}" class="link-success" download>Download Dossier Dossier_administratif</a>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control"value="{{$professeurs->Dossier_administratif}}" name="Dossier_administratif" >
                    </div>
                <button type="submit" class="btn btn-danger">Modifier</button>

           </div>
       </div>
    </div>
 
</form>-->
<section style="background-color: transparent;">
    <form method="POST" action="{{url('professeurs/'.$professeurs->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Nom</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$professeurs->nom}}" name="nom">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Prénom</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$professeurs->prenom}}" name="prenom">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cin</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$professeurs->cin}}" name="cin">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Photo</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" value="{{$professeurs->image}}" name="image">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date de recrutement</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" value="{{$professeurs->date_recrutement}}" name="date_recrutement">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Téléphone</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" value="{{$professeurs->telephone}}" name="telephone">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{$professeurs->email}}" name="email">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date de naissance</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" value="{{$professeurs->date_naissance}}" name="date_naissance">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Professeur à l'ENSAJ</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="appartenant_a_ENSAJ" autocomplete="off" value="oui" {{ $professeurs->appartenant_a_ENSAJ=="oui" ? 'checked' : ''}}>
                                        <label class="btn btn-outline-primary" for="oui">Oui</label>
                                        <input type="radio" class="btn-check" name="appartenant_a_ENSAJ" autocomplete="off" value="non" {{ $professeurs->appartenant_a_ENSAJ=="non" ? 'checked' : ''}}>
                                        <label class="btn btn-outline-primary" for="non">Non</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Spécialité</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="specialite" id="informatique" autocomplete="off" value="informatique" {{ $professeurs->specialite=="informatique" ? 'checked' : ''}}>
                                        <label class="btn btn-outline-primary" for="informatique">Informatique</label>
                                        <input type="radio" class="btn-check" name="specialite" id="civil" autocomplete="off" value="civil" {{ $professeurs->specialite=="civil" ? 'checked' : ''}}>
                                        <label class="btn btn-outline-primary" for="civil">Civil</label>
                                        <input type="radio" class="btn-check" name="specialite" id="industrie" autocomplete="off" value="industrie" {{ $professeurs->specialite=="industrie" ? 'checked' : ''}}>
                                        <label class="btn btn-outline-primary" for="industrie">Industrie</label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Dossier scientifique</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" value="{{$professeurs->Dossier_scientifique}}" name="Dossier_scientifique">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Dossier pédagogique</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" value="{{$professeurs->Dossier_Pedagogique}}" name="Dossier_Pedagogique">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Dossier administratif</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" value="{{$professeurs->Dossier_administratif}}" name="Dossier_administratif">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection