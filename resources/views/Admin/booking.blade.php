@include('admin/header')

<div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Recent Booking</h4>
                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th>Email Address</th>
                                <th>Current Location</th>
                                <th>Destination</th>
                                <th>Date of Departure</th>
                                <th>Date of Return</th>
                                <th>No Of Adult</th>
                                <th>No Of Children</th>
                                <th>Flight Class</th>
                                <th>Tip Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  @foreach($data as $book)
                                    <td>{{$book->email}}</td>
                                    <td>{{$book->current}}</td>
                                    <td>{{$book->destination}}</td>
                                    <td>{{$book->leaving}}</td>
                                    <td>{{$book->returning}}</td>
                                    <td>{{$book->noofadult}}</td>
                                    <td>{{$book->noofchildren}}</td>
                                    <td>{{$book->typeofclass}}</td>
                                    <td>{{$book->typeoftrip}}</td>

                                  @endforeach
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@include('admin/footer')