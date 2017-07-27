<!DOCTYPE html>
<html lang="en">
@extends('layouts.head')  
  <body>
    @include('layouts.nav')

    <section class="jumbotron text-center">
      <div class="container">
        <img src="{{asset('img/logo.png')}}" width="25%" length="25%"></img>
        <h1 class="jumbotron-heading">Welcome to MOSAIC Storefront!</h1>
        <p class="lead text-muted">Thank you for visiting the MOSAIC web page. MOSAIC is a special education program ran by Humble ISD. We support all students age 18 to 22 who receive special education as they transition from school life to adult life. We are not your typical school program so we need all the community and family support we can get!</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">
      @if ($products->count() > 0)
      <h3 class="text-center">We have {{$products->count()}} products for you to choose from.</h3>
      <hr>
      
        <div class="row">
          @foreach($products as $product)
          <div class="col col-sm-4">
            <div class="form-group">
            
              <div class="card text-center">
                <div class="card-block">
                  <h4 class="card-title">{{ $product->name }}</h4>
                  <h6 class="card-subtitle mb-2 text-muted">${{ $product->price }}</h6>
                  <p class="card-text">{{ $product->description }}</p>
                  @if($product->created_at == $product->updated_at)
                  <p class="card-text">Added {{ $product->created_at->diffForHumans() }}</p>
                  @else
                  <p class="card-text">Updated {{ $product->updated_at->diffForHumans() }}</p>
                  @endif
                  <a href="/product/{{$product->id}}" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            
            </div>
          </div>
          @endforeach
        </div>
        @else
        <br>
        <h3 class="text-center">We don't have anything for you to offer at the moment.</h3>
        <p class="text-center">Please check back later.</p>
        <br>
        @endif
      </div>
    </div>
    @include('layouts.footer')
  </body>
</html>
