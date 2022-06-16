@include('admin/header')

<div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>Add New Flight Schedule</h4>
                            <p>Veniam. Aenean beatae nonummy tenetur beatae? Molestias similique! Semper? Laudantium.</p>
                            <form class="form-horizontal" method="post" action="{{url('admin/store')}}">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Travel Date</label>
                                            <input name="travelDate" class="form-control" type="date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Travel Time</label>
                                            <input name="travelTime" class="form-control" type="time">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Arrival Date</label>
                                            <input name="arrivalDate" class="form-control" type="date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Arrival Time</label>
                                            <input name="arrivalTime" class="form-control" type="time">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Available Flight</label>
                                            <input name="avaliableFlight" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Number Of Stop</label>
                                            <input name="stops" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Cost</label>
                                            <input name="cost" class="form-control" type="text">
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                <button type="submit" name="Submit">Submit</button>
                            </form>
                        </div>
                    </div>  
                </div>
            </div>

@include('admin/footer')