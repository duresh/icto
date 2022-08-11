@extends('dashboard.index')
@section('content')

<Table class="table table-striped table-bordered table-hover" id="members-table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email address</th>
            <th scope="col">Profile Image</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><img src="{{asset('storage/images/'. $user->imgname) }}" height="50" width="50"/></td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        @endforeach
    </tbody>
</Table>

@endsection

