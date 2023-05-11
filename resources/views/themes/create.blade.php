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
