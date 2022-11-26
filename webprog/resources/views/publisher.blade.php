@extends('layouts.main')


@section('content')
<div class="container">
    <div class="row bg-secondary text-white">
        <div class="col">
            <h4>Alex Slamet</h4>
            <h4>Address : New york</h4>
            <h4>Phone - 087781793086</h4>
            <h4>Email - gantengslamet@gmail.com</h4>
        </div>
    </div>
    <div class="row">
        <div class="col order-1">
            <div class="card">
                <img src="{{ asset ('assets/images/bookcover1.jpg') }}" class="card-img-top" alt="bookcover1">
                <div class="card-body">
                    <h5 class="card-title">The Book of Art</h5>
                    <p class="card-text">by</p>
                    <p class="author">Regina Phalange</p>
                  <a href="{{ url('book-1') }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
        <div class="col order-2">
            <div class="card">
                <img src="{{ asset ('assets/images/bookcover2.jpg') }}" class="card-img-top" alt="bookcover2">
                <div class="card-body">
                    <h5 class="card-title">The King of Drugs</h5>
                    <p class="card-text">by</p>
                    <p class="author">Nora Barrett</p>
                  <a href="{{ url('book-2') }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
        <div class="col order-3">
            <div class="card">
                <img src="{{ asset ('assets/images/bookcover3.jpg') }}" class="card-img-top" alt="bookcover3">
                <div class="card-body">
                    <h5 class="card-title">Normal People</h5>
                    <p class="card-text">by</p>
                    <p class="author">Sally Rooney</p>
                  <a href="{{ url('book-3') }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
        <div class="col order-4">
            <div class="card">
                <img src="{{ asset ('assets/images/bookcover4.jpg') }}" class="card-img-top" alt="bookcover4">
                <div class="card-body">
                    <h5 class="card-title">Dune</h5>
                    <p class="card-text">by</p>
                    <p class="author">Frank Herbert</p>
                  <a href="{{ url('book-4') }}" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection

