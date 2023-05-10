@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<ul>
    <li>Titre : {{$theme->theme}} </li>
    <li>Niveau : {{$theme->niveau}}</li>
</ul>
@endsection
