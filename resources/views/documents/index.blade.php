@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')
    <table class="table" id="example">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">theme</th>
                <th scope="col">niveau</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($themes as $t)
                <tr>
                    <th scope="row">{{$t->id}}</th>
                    <td>{{$t->theme}}</td>
                    <td>{{$t->niveau}}</td>
                    <td>
                        <a href="{{ url('themes/'.$t->id ) }}" class="btn btn-sm btn-info">Consulter</a>
                        <form action="{{url('themes/'.$t->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Supprimer?')" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                        <a href="{{ route('themes.edit',[$t->id]) }}" class="btn btn-sm btn-warning">Editer</a>


                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
    @foreach ($themes as $t)
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
