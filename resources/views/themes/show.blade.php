@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<ul>
    <li>Titre : {{$theme->theme}} </li>
    <li>Niveau : {{$theme->niveau}}</li>
</ul>
<hr>
<table class="table" id="example">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Cree le </th>
            <th scope="col">Fichier</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($theme->documents as $t)
            <tr>
                <th scope="row">{{$t->id}}</th>
                <td>{{$t->titre}}</td>
                <td>{{substr($t->description,0,10)}}...</td>
                <td>{{$t->created_at}}</td>
                <td><a download href="{{ asset('storage/'.$t->chemin)}}" class="btn btn-success">TELECHARGER</a>
                    <a target="_blank" href="{{ asset('storage/'.$t->chemin)}}" class="btn btn-info">Consulter</a></td>
                <td>
                    <a href="{{ url('documents/'.$t->id ) }}" class="btn btn-sm btn-info">Consulter</a>
                    <form action="{{url('documents/'.$t->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Supprimer?')" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                    <a href="{{ route('documents.edit',[$t->id]) }}" class="btn btn-sm btn-warning">Editer</a>


                </td>
            </tr>
        @endforeach


    </tbody>
</table>
@endsection
