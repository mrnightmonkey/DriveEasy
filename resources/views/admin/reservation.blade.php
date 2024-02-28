<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        /* Basic table styling */
        .table_deg {
            width: 100%;
            border-collapse: collapse;
        }

        .th_deg,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Styling for table header */
        .th_deg {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Styling for delete and update buttons */
        .btn {
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-warning {
            background-color: #ffc107;
            color: black;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        /* Styling for images */
        img {
            max-width: 100px;
            max-height: 100px;
            display: block;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

    @include('admin.slider')


        <div class="content">
            @include('admin.header')

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                <table class="table_deg" >
                    <tr>
                        <th class="th_deg" >Name</th>
                        <th class="th_deg" >Email</th>
                        <th class="th_deg" >Pick Date</th>
                        <th class="th_deg" >Drop Date</th>
                        <th class="th_deg" >Car Price</th>
                    </tr>

                    @foreach($data as $data)

                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->pickdate}}</td>
                        <td>{{$data->dropdate}}</td>
                        <td>{{$data->car->carprice}}</td>
                    </tr>

                    @endforeach

                </table>
                    
                </div>
            </div>

        </div>

    </div>

    @include('admin.footer')
    
</body>

</html>