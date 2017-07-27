<!DOCTYPE html>
<html>
  @extends('layouts.head')
  
  <body>
    @include('layouts.nav')
    
    <div class="container">
      <br>
      <h1 class="text-center">Publish A Product Listing</h1>
      <hr>
      
      <form method="POST" action="/product">
        {{csrf_field()}}
        <div class="row">
          <div class="col col-sm-3">
            <input class="form-control" name="name" placeholder="Enter product name" required/>
          </div>
          <div class="col col-sm-6">
            <textarea class="form-control" name="description" placeholder="Enter description" rows="3"></textarea>
          </div>
          <div class="col col-sm-3">
            <input class="form-control" name="price" placeholder="Enter price (in $USD)"/>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" style="background-color:#F15A2D;color:#fff;border-color:#F15A2D"/>Submit</button>
          </div>
        </div>
      </form>
      
    </div>
    
    @include('layouts.footer')
  </body>
</html>