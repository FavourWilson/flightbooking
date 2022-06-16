@include('admin/header')


<div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box table-opp-color-box">
                            <h4>Flight Schedules</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Travel Date</th>
                                            <th>Travel Time</th>
                                            <th>Arrival Date</th>
                                            <th>Arrival Time</th>
                                            <th>Available Time</th>
                                            <th>Available Flight</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($schedule as $sch)
                                            <td>{{$sch->country}}</td>
                                            <td>{{$sch->travelDate}}</td>
                                            <td>{{$sch->travelTime}}</td>
                                            <td>{{$sch->ArrivalDate}}</td>
                                            <td>{{$sch->Arrivaltime}}</td>
                                            <td>{{$sch->availableFlight}}</td>
                                            <td>{{$sch->cost}}</td>
                                            <td>
                                                <a href="edit-schedule/{{$sch->id}}" class="badge badge-success"><i class="far fa-edit"></i></a>
                                            </td>

                                            <form method="POST" action="{{url('delete/'.$sch->id )}}">
                                                @csrf
                                                @method('DELETE')
                                            <td>
                                                <button class="badge badge-danger"><i class="far fa-trash-alt"></i></button>
                                             </td>
                                            </form>
                                           
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