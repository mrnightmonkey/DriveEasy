<!doctype html>
<html lang="en">

  <head>
  <base href="/public">
  @include('home.css')
<style>
    .booking-form {
    max-width: 500px;
    margin: auto;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.booking-form .form-group {
    margin-bottom: 20px;
}

.booking-form label {
    font-weight: bold;
}

.booking-form input[type="text"],
.booking-form input[type="email"],
.booking-form input[type="tel"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

.booking-form input[type="text"]:focus,
.booking-form input[type="email"]:focus,
.booking-form input[type="tel"]:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.booking-form .form-row {
    display: flex;
}

.booking-form .form-group.col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
    padding-right: 15px;
}

.booking-form button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.booking-form button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
  </head>
  <body>
    
    @include('home.header')

    <div class="site-section bg-light">
      <div class="container">
        
        

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">

           
            </div>
           
          </div>
          <form action="{{url('addreserve',$data->id)}}" method="Post" class="booking-form">

                <div class="listing-img h-100 mr-4">
                    <img src="/cars/{{$data->carimage}}"  class="img-fluid">
                </div>
                <div class="listing-contents h-100">
                <h3>{{$data->carname}}</h3>
                <div class="rent-price">
                  <strong>${{$data->carprice}}</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">{{$data->carluggage}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">{{$data->cardoor}}</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">{{$data->carpassenger}}</span>
                  </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success" >
                    <button type="button" class="close" data-bs-dismiss="alert" >X</button>
                    {{session()->get('message')}}
                    </div>
                    @endif

                    </div>
                    @if($errors)

                    @foreach($errors->all() as $errors)

                    <li>
                        {{$errors}}
                    </li>
                    @endforeach
                    @endif
                

            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" @if(Auth::check()) value="{{Auth::user()->name}}" @endif>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" @if(Auth::check()) value="{{Auth::user()->email}}" @endif>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pickup">Pick up</label>
                    <input type="text" name="pickdate" id="pickdate"  class="form-control datepicker" placeholder="Pick up date">
                </div>

                <div class="form-group col-md-6">
                    <label for="dropoff">Drop off</label>
                    <input type="text" name="dropdate" id="dropdate"  class="form-control datepicker" placeholder="Drop off date">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Reserve Car</button>
            </div>
            </form>

          

        </div>
      </div>
    </div>


    @include('home.footer')

  </body>

</html>
