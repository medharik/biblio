@extends('base')
@section('titre')
    Edition du Theme
@endsection
@section('main')
   <div class="row">
    <div class="col-md-6  shadow p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="post" action="{{ route('themes.update', ['id' => $theme->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="theme" class="form-label">Theme : </label>
                <input value="{{ $theme->theme }}" type="text" name="theme" class="form-control" id="theme"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="niveau" class="form-label">Niveau</label>
                <input value="{{ $theme->niveau }}" type="text" name="niveau" class="form-control" id="niveau">
            </div>
            <div class="mb-3">
                <label for="niveau" class="form-label">Niveau</label>
                <input type="file" name="photo" class="form-control @error('niveau')
is-invalid
      @enderror"
                    id="photo">
                @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    <div class="col-md-6 text-center">
        <img style="height: 300px;" src="{{asset('storage/'.$theme->photo)}}" alt="" class="img-fluid">
    </div>
   </div>
@endsection
