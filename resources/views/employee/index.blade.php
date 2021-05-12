@extends("layout.app")
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">surname</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->surname}}</td>
                <td>
                    <a class="" href="{{route("employee.edit",$employee->id)}}">Edit</a>
                </td>

            </tr>
        @endforeach
        </tbody>
        {{$employees->links()}}
    </table>
@endsection
