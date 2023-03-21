@extends('layouts.app')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Ajouter un candidat</div>
        <div class="card-body">
            <form action="{{route('store.candidat')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Adresse Email:</label>
                    <input type="email" name="mail" id="" placeholder="Votre réponse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nom:</label>
                    <input type="text" name="nom" id="" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Prenom:</label>
                    <input type="text" name="prenom" id="" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="number" name="telephone" id="" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Adresse Domicile</label>
                    <input type="text" name="adresse" id="" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Choisir votre domaine de compétence</label>
                    <select name="" id="" class="form-control">
                        <option value="" disabled selected hidden>Votre domaine</option>
                        <option value="ressources-humaines">Ressources Humaines</option>
                        <option value="marketing-digital">Marketing Digital</option>
                        <option value="gestion-projet">Gestion Projet</option>
                        <option value="informatique-bureautique">Informatique Bureautique/option>
                        <option value="developpement-web">Développement Web</option>
                        <option value="ardino">Ardino(Robotique-Internet des objets connectés)</option>
                        <option value="modelisation-impression3d">Modélisation et Impression 3D</option>
                        <option value="rmaintenance">Maintenance</option>
                        <option value="design-graphique">Design Graphique</option>
                        <option value="autres">Autres</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Question/Suggestion/Commentaire</label>
                    <input type="text" name="question" id="" placeholder="Votre réponse" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success mt-3">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
