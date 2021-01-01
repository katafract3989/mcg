@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">



                    <div class="jumbotron">
                        <h1 class="display-4">Edit employee data</h1>
                        <p class="lead">Change the data in the database.</p>
                        <hr class="my-4">
                        <form action="/editsave/{{$staff->id}}">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control"  name="first_name" value="{{$staff->first_name}}" aria-describedby="First Name" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Surname</label>
                                <input type="text" class="form-control" name="surname" value="{{$staff->surname}}"  aria-describedby="Surname" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="number" class="form-control" name="salary" value="{{$staff->salary}}"  aria-describedby="Salary" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hiring month</label>
                                <input type="text" class="form-control" name="hiring_month" value="{{$staff->month_of_hiring}}"   aria-describedby="Hiring month" required>
                                <input type="hidden" class="form-control" name="id" value="{{$staff->id}}">
                            </div>
                            <p class="lead">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="/create">back</a>
                            </p>
                        </form>


                    </div>



                </div>
            </div>




    </div>
@endsection
