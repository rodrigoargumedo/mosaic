<!DOCTYPE html>
<html lang="en">
@extends('layouts.head')  
  <body>
    @include('layouts.nav')

    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        <p>
          <a href="#" class="btn btn-primary">Main call to action</a>
          <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
      </div>
    </section>

    <div class="album text-muted">
      <div class="container">

      
        <div class="row">
          @foreach($products as $product)
          <div class="col-sm-3">
            
            <div class="card text-center">
              <div class="card-block">
                <h4 class="card-title">{{ $product->name }}</h4>
                <h6 class="card-subtitle mb-2 text-muted">${{ $product->price}}</h6>
                <p class="card-text">{{ $product->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </body>
</html>
