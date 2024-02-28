<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

    @include('admin.slider')


        <div class="content">
            @include('admin.header')

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                <form action="{{url('addcars')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label>Car Name</label>
                            <input type="text" name="name">
                        </div>
                        <div class="div_deg">
                            <label>Car Description</label>
                            <textarea name="description"></textarea>
                        </div>

                        <div class="div_deg">
                            <label>Car Price</label>
                            <input type="text" name="price">
                        </div>

                        <div class="div_deg">
                            <label>Car Luggage</label>
                            <input type="text" name="luggage">
                        </div>

                        <div class="div_deg">
                            <label>Car Passenger</label>
                            <input type="text" name="passenger">
                        </div>

                        <div class="div_deg">
                            <label>Car Door</label>
                            <input type="text" name="door">
                        </div>

                        <div class="div_deg">
                            <label>Car Image</label>
                            <input type="file" name="images">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" vaue="Add Car">
                        </div>

                    </form>
                    
                </div>
            </div>

        </div>

    </div>

    @include('admin.footer')
    
</body>

</html>