@extends('base')
@section("titre")
    Nouveau Theme
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
    <form method="post" action="{{ route('kiki') }}"  enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label for="theme" class="form-label">Theme : </label>
            <input value="{{old('theme')}}" type="text" name="theme" class="form-control  @error('theme')
            is-invalid   @enderror" id="theme" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau</label>
      <input type="text"   value="{{old('niveau')}}" name="niveau" class="form-control @error('niveau')
is-invalid
      @enderror" id="niveau">
      @error('niveau')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau</label>
      <input type="file"   name="photo" class="form-control @error('niveau')
is-invalid
      @enderror" id="photo">
      @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
