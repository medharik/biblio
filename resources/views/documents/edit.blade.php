@extends('base')
@section("titre")
    Edition du Theme
@endsection
@section('main')
<div class="col-md-6 mx-auto shadow p-3 ">

    <form method="post" action="{{ route('themes.update',["id"=>$theme->id]) }}" >
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="theme" class="form-label">Theme : </label>
            <input value="{{$theme->theme}}" type="text" name="theme" class="form-control" id="theme" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="niveau"  class="form-label">Niveau</label>
      <input value="{{$theme->niveau}}" type="text" name="niveau" class="form-control" id="niveau">
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
</div>
  @endsection
