@extends('dashboard.index')
@section('content')
<div class="container mt-0">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if(session('danger'))
  <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif

    <table class="table table-striped table-hover table-bordered" id="members-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Amount</th>
                <th scope="col">Paid by</th>
                <th scope="col">Confirmed at</th>
                </tr>
        </thead>
        <tbody>
            @foreach($completed as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->amount }}</td>
                <td>{{ $data->nameOn }}</td>
                <td>{{ $data->updated_at }}</td>
            </tr>
        @endforeach

        </tbody>
        </tbody>
    </table>

    <div class="row">
            <div class="bg-success text-light col-4">Total Amount Paid</div>
            <div class="bg-warning text-light col-2">Rs. {{ $totalP }}</div>
    </div>





</div>



@endsection
