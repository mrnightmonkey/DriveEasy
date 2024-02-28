 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
               
                
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-car me-2"></i>Cars</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/createcars')}}" class="dropdown-item">Add Car</a>
                            <a href="{{url('/viewcars')}}" class="dropdown-item">View Cars</a>
                            <a href="{{url('/reservation')}}"  class="dropdown-item">Car Reservation</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->