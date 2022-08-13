@extends('dashboard.index')
@section('content')

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" id="confirm-status">
        {{ session('status') }}
    </div>
  @endif
  @if(session('danger'))
  <div class="alert alert-danger alert-dismissible fade show">
        {{ session('danger') }}
    </div>
    @endif
<Table class="table table-striped table-bordered table-hover" id="members-table">
    <thead>
        <tr>
        <th>id</th>
        <th>User</th>
        <th>Card Holder</th>
        <th>Payment</th>
        <th>Payid on</th>
        <th>Status</th>
        <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($payments as $payment)
        <tr>
            <td>{{ $payment->id }}</td>
            <td>{{ $payment->user }}</td>
            <td>{{ $payment->nameOn }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->created_at }}</td>
            <td> @if($payment->status == '0')
                <span class="badge rounded-pill bg-warning text-dark">Pending</span>
                @else
                <span class="badge rounded-pill bg-success text-light">Confirmed</span>
                @endif


            </td>
            <td><a href="{{ route('payment.confirm', $payment->id) }}" class="btn btn-primary" id="confirm">Confirm</a></td>

        @endforeach

    </tbody>

</Table>


@endsection
