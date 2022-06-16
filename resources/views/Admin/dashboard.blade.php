@include('admin/header')

<div class="db-info-wrap">
    <div class="row">
      
        <div class="col-xl-6 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-purple">
                    <i class="fas fa-users"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>{{$user->count()}}</h5> 
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-red">
                    <i class="far fa-envelope-open"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Booking</h4>
                    <h5>{{$booking->count()}}</h5> 
                </div>
            </div>
        </div>
    </div>
               
    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box">
                <h4>Booking Details</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email Address</th>
                                <th>Current Location</th>
                                <th>Destination</th>
                                <th>Date of Leaving</th>
                                <th>Date of Returning</th>
                                <th>Adults</th>
                                <th>Children</th>
                                <th>Travel Class</th>
                                <th>Trip Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach($booking as $books)
                                <td>{{$books->email}}</td>
                               <td>{{$books->current}}</td>
                               <td>{{$books->detination}}</td>
                               <td>{{$books->leaving}}</td>
                               <td>{{$books->returning}}</td>
                               <td>{{$books->noofadult}}</td>
                               <td>{{$books->noofchildren}}</td>
                               <td>{{$books->typeofclass}}</td>
                               <td>{{$books->typeoftrip}}</td>
                            
                               
                               @endforeach
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box">
                <h4>Users Details</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Phone number</th>
                                <th>Email</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               @foreach($user as $users)
                                <td>{{$users->name}}</td>
                               <td>{{$users->phone}}</td>
                               <td>{{$users->email}}</td>
                               <td>{{$users->country}}</td>
                               
                               
                               @endforeach
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    
</div>


@include('admin/footer')