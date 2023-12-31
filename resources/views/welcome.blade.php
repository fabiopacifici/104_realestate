@extends('layouts.app')

@section('title', 'Real Estate Welcome')

@section('content')


<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Our Real Estate</h1>
        <p class="col-md-8 fs-4">Top quality houses for rich people</p>
        <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
</div>


<section class="latest_houses py-5">
    <div class="container">
        <h3>Latest Houses</h3>
        <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum esse necessitatibus exercitationem, in rem natus? Quam error, praesentium pariatur quod ipsa sed id qui placeat corrupti officia, nam cum sint.
        </p>

        <div class="row">

            @forelse ($latest_houses as $house)
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="{{$house->image}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4>{{$house->address}}</h4>
                        <div class="price">
                            Price: ${{$house->price}}
                        </div>
                    </div>
                </div>


            </div>
            @empty
            <div class="col">
                <p>No houses yet! Come back later</p>
            </div>
            @endforelse

        </div>





    </div>
</section>


@endsection