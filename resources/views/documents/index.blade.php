@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')
    <table class="table" id="example">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Fichier</th>
                <th scope="col">Theme_id</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $t)
                <tr>
                    <th scope="row">{{$t->id}}</th>
                    <td>{{$t->titre}}</td>
                    <td>{{substr($t->description,0,10)}}...</td>
                    <td><a download href="{{ asset('storage/'.$t->chemin)}}" class="btn btn-success">TELECHARGER</a>
                        <a target="_blank" href="{{ asset('storage/'.$t->chemin)}}" class="btn btn-info">Consulter</a></td>
                    <td>{{$t->theme->theme}} pour le niveau  {{$t->theme->niveau}}</td>
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
    <div class="d-flex">
        {{ $documents->links() }}
    </div>
    @foreach ($documents as $t)
    @endforeach
@endsection
<script>
    function alerti() {
        swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, I am sure!',
    cancelButtonText: "No, cancel it!"
 }).then(

       function () { return false; });
    }
</script>
