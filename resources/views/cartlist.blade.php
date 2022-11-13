@extends('master')
@section("content")

<div class="custom-product">

<div class="col-sm-10">
    <div class="trending-wrapper">
        <h2>Result for Cartlist</h2>

        @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">

            <div class="col-sm-3">
                <a href="detail/{{ $item->id }}">
                    <img class="trending-image" src="{{ $item->gallery }}" >
                    </a>
            </div>

            <div class="col-sm-3">
                <div class="" >
                      <h2>{{ $item->name}}</h2>
                      <h5>{{ $item->description }}</h5>
                </div>
            </div>

            <div class="col-sm-4">
                <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove to Cart</a>
            </div>
          @endforeach

        </div>
<div> <a class="btn btn-success" href="ordernow">Ordernow</a> <br><br>
</div>

</div>

</div>
</div>


@endsection
