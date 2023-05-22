@extends('base')
@section('titre')
    Edition du Document
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
        <h2>Edition du document {{ $document->titre }} du theme {{ $document->theme->theme }}</h2>
        <form method="post" action="{{ route('documents.update',$document->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titre" class="form-label">Titre : </label>
                <input value="{{ $document->titre }}" type="text" name="titre"
                    class="form-control  @error('titre')
            is-invalid   @enderror" id="titre"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="chemin" class="form-label">Document : </label>
                <input type="file" name="chemin" id="chemin">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('discription')
is-invalid
      @enderror" id="description">{{ $document->description }}
      </textarea>
                @error('desccription')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                Theme : <select name="theme_id" id="theme_id" class="form-select">
                    @foreach ($themes as $t)
                        <option {{ $t->id == $document->theme->id ? 'selected' : '' }} value="{{ $t->id }}">
                            {{ $t->theme }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
