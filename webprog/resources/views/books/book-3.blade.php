@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Book Cover</h4>
        </div>
    </div>
    <div class="row">
        <div class="card mb-3">
            <img src="{{ asset ('assets/images/bookcover3.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Title: The Book of Art</p>
              <p class="card-text">Author: Regina Phalange</p>
              <p class="card-text">Publisher: </p>
              <p class="card-text">Year: </p>
              <p class="card-text">Synopsis: </p>
            </div>
        </div>
    </div>
</div>
@endsection