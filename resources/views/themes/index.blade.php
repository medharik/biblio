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
                    <td>@mdo</td>
                </tr>
            @endforeach


        </tbody>
    </table>
    @foreach ($themes as $t)
    @endforeach
@endsection
