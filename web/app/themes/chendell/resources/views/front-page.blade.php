@extends('layouts.app')

@section('content')
<div class="positioning">
  <h1 class="text-uppercase">Chendell</h1>
  <h2 class="text-uppercase">A Natural Warrior</h2>
  <h3>Lorem Ipsum Dolor Sit Amet</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis lectus dolor.</p>

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
