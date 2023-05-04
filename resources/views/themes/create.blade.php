@extends('layout')
@section('titre')
    Nouveau theme
@endsection
@section('contenu')
<div class="col-md-6 mx-auto shadow p-3 ">

    <form method="post" action="{{ route('kiki') }}" >
        @csrf
        <div class="mb-3">
            <label for="theme" class="form-label">Theme : </label>
            <input type="text" name="theme" class="form-control" id="theme" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="niveau" class="form-label">Niveau</label>
      <input type="text" name="niveau" class="form-control" id="niveau">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection