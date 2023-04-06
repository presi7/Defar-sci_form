@extends('layouts.app')

@section('content')

<div class="conatiner">
    @if (session('success'))
    <div class="alert alert-success mt-3">
        {{session('success')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header bg-info text-white">Editer un candidat</div>
        <div class="card-body">
            <form action="{{route('update.candidat',$candidat->id)}}" method="post">
                @csrf



            </form>
        </div>
    </div>
</div>

@endsection
