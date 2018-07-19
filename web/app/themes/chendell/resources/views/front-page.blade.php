@extends('layouts.app')

@section('content')
<div class="positioning">
  <div>
    <img src="@asset('images/chendell_logo.png')" alt="Chendell" />
  </div>
  <h3 class="text-uppercase">Nsture Has a New Hero</h3>
  <p>Be one of the first to discover CHENDELL: A Natural Warrior. Coming to book shelves Fall 2018.</p>

  <div class="row">
    <div class="col">
      <form class="form-inline">
        <div class="input-group mb-2 mr-sm-2" style="width: 80%">
          <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Email Address" />
          <div class="input-group-append">
            <button class="btn btn-primary">NOTIFY ME</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
