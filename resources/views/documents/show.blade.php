@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<ul>
    <li>Titre : {{$document->titre}} </li>
    <li>Dsecription : {{$document->description}}</li>
    <li>Cours : <a download href="{{ asset('storage/'.$document->chemin)}}" class="btn btn-success">TELECHARGER</a>
        <a target="_blank" href="{{ asset('storage/'.$document->chemin)}}" class="btn btn-info">Consulter</a>
    </li>
</ul>
@endsection
