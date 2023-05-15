@extends('base')
@section('titre')
    Nouveau Document
@endsection
@section('main')


    <div class="col-md-6 mx-auto shadow p-3 ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('documents.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre : </label>
                <input value="{{ old('titre') }}" type="text" name="titre"
                    class="form-control  @error('titre')
            is-invalid   @enderror" id="titre"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="chemin" class="form-label">Fichier : </label>
                <input value="{{ old('chemin') }}" type="file" name="chemin"
                    class="form-control  @error('chemin')
        is-invalid   @enderror" id="chemin"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea value="{{ old('description') }}" name="description"
                    class="form-control @error('discription')
is-invalid
      @enderror" id="description">
      </textarea>
                @error('desccription')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                Theme : <select name="theme_id" id="theme_id" class="form-select">
                   @foreach ($themes as $t)
                   <option value="{{$t->id}}">{{$t->theme}}</option>
                   @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
