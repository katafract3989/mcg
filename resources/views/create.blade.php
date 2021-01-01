@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Add employee</div>



                    <div class="panel-body">

                        <form action="/add">
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" class="form-control"  name="first_name" aria-describedby="First Name" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Surname</label>
                                <input type="text" class="form-control" name="surname"  aria-describedby="Surname" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Salary</label>
                                <input type="number" class="form-control" name="salary"  aria-describedby="Salary" required>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Hiring month</label>
                                <input type="text" class="form-control" name="hiring_month"   aria-describedby="Hiring month" required>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            <div class="col-6">
            <H2>LIST</H2>
                {{ $list->links() }}
                <table class="table table-inverse">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Salary</th>
                        <th>Hiring month</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                    <tr>




                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->surname}}</td>
                            <td>{{$item->salary}} руб.</td>
                            <td>{{$item->month_of_hiring}}</td>
                        <td><a href="/edit/{{$item->id}}">Edit</a></td>
                        <td><a href="/delete/{{$item->id}}">Delete</a></td>



                    </tr>
                    @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
@endsection
