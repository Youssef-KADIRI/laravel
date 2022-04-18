@extends('layouts.app')


@section('content')

<h1>Créer mon profil</h1>
<!--<form method="POST" action="{{route('professeurs.store')}}" enctype="multipart/form-data">
   @csrf
   <div class="container ">
       <div class="row">
           <div class="col-md-6 col-md-offset-4">
   
                    <div class="form-group ">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" name="nom" >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom :</label>
                        <input type="text" class="form-control" name="prenom" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="cin">CIN :</label>
                        <input type="text" class="form-control" name="cin" >
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Image :</label>
                        <input type="file" class="form-control" name="image" >
                    </div>
                    <div class="form-group">
                        <label for="telephone">Telephone :</label>
                        <input type="tel" class="form-control" name="telephone" >
                    </div>
                    <div class="form-group">
                        <label for="date_recrutement">Date de recrutement :</label>
                        <input type="date" class="form-control" name="date_recrutement" >
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" class="form-control" name="date_naissance" >
                    </div>
                    <div class="form-group">
                        <label for="specialite">Specialite :</label>
                        <select name="specialite" class="form-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    
                    <div class="form-group has-feedback" style="padding-top: 15px">
                        <label>Appartenant_a_ENSAJ : </label>
                            
                        <div class="pull-right">
                            <label for="appartenant_a_ENSAJ"> Oui </label>
                            <input type="radio"  value="Oui" name="appartenant_a_ENSAJ" >
                                    
                            <label for="appartenant_a_ENSAJ"> No </label>
                            <input type="radio"  value="NO" name="appartenant_a_ENSAJ" >
                        </div>
                            
                    </div>
                    <div class="form-group">
                        <label for="Dossier_scientifique">Dossier scientifique :</label>
                        <input type="file" class="form-control" name="Dossier_scientifique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_Pedagogique">Dossier Pédagogique :</label>
                        <input type="file" class="form-control" name="Dossier_Pedagogique" >
                    </div>
                    <div class="form-group">
                        <label for="Dossier_administratif">Dossier administratif :</label>
                        <input type="file" class="form-control" name="Dossier_administratif" >
                    </div>
                <button type="submit" class="btn btn-primary">Add Professeurs</button>

           </div>
       </div>
    </div>
 
</form>-->

<section style="background-color: transparent;">
    <form method="POST" action="{{route('professeurs.store')}}" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control" name="nom">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Prénom</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="prenom">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Photo</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Cin</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cin">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date de recrutement</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date_recrutement">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Téléphone</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" name="telephone">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date de naissance</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date_naissance">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Professeur à l'ENSAJ</p>
                                </div>
                                <div class="col-sm-9">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" value="oui" name="appartenant_a_ENSAJ" id="oui" autocomplete="off" checked="">
                                        <label class="btn btn-outline-primary" for="oui">Oui</label>
                                        <input type="radio" class="btn-check" value="non" name="appartenant_a_ENSAJ" id="non" autocomplete="off" checked="">
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
                                        <input type="radio" class="btn-check" value="informatique" name="specialite" id="informatique" autocomplete="off" checked="">
                                        <label class="btn btn-outline-primary" for="informatique">Informatique</label>
                                        <input type="radio" class="btn-check" value="civil" name="specialite" id="civil" autocomplete="off" checked="">
                                        <label class="btn btn-outline-primary" for="civil">Civil</label>
                                        <input type="radio" class="btn-check" value="industrie" name="specialite" id="industrie" autocomplete="off" checked="">
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
                                    <input type="file" class="form-control" name="Dossier_scientifique">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Dossier pédagogique</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="Dossier_Pedagogique">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Dossier administratif</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="Dossier_administratif">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyez</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</section>


@endsection