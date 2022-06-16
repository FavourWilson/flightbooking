

@include('admin/header')


<div class="db-info-wrap">
<div class="row">
        <div class="col-lg-12">
            <div class="dashboard-box">
                <h4>Users Details</h4>
                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
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
                               @foreach($data as $users)
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

