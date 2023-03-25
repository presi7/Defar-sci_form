@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div>Total : {{ $total }}</div>
    <div>Ressources Humaines : {{ $rh }}</div>
    <div>Marketing Digital : {{ $md }}</div>
    <div>Gestion Projet{{ $gp }}</div>
    <div>Informatique Bureautique : {{ $ib }}</div>
    <div>Developpement web : {{ $dw }}</div>
    <div>Arduino : {{ $ard }}</div>
    <div>Modelisation Impression 3D : {{ $mi }}</div>
    <div>Maintenance : {{ $maint }}</div>
    <div>Design Graphique : {{ $dg }}</div>
    <div>Autres : {{ $other }}</div>

    <div class="card mt-5" >
        <div class="card-header bg-info text-white">Liste des Candidats</div>
        <div class="card-body">

            <table class="table" style="width: 100%;">
                <tr>
                    <th>#</th>
                    <th>Adresse Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Adresse Domicile</th>
                    <th>Domaine Competence</th>

                    <th>Actions</th>

                </tr>
                @foreach ($candidat as $candidats)
                    <tr >
                        <td>{{ $candidats->id }}</td>
                        <td>{{ $candidats->email }}</td>
                        <td>{{ $candidats->nom }}</td>
                        <td>{{ $candidats->prenom }}</td>
                        <td>{{ $candidats->telephone }}</td>
                        <td>{{ $candidats->adresse }}</td>
                        <td>{{ $candidats->domaine }}</td>
                        {{-- <td>{{ number_format($candidat->pourcentage, 2) }}%</td> --}}
                        {{-- {{ number_format(floatval($value ?? ''), 2, ',', ' ') }} --}}


                        <td>
                            <a href="{{route('edit-candidat',$candidats->id )}}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-candidat',$candidats->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Souhaitez-vous le supprimer')" href="{{route('delete-candidat',$candidats->id)}}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
