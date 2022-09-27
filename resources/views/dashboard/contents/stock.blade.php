@extends('dashboard.index')
@section('content')

<div class="container">
          <br />
          <form action="{{route('stock.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
               <label for="stockName">Stock Name:</label>
               <input type="text" class="form-control" id="stockName" name="stockName">
             </div>
             <div class="form-group">
               <label for="stockPrice">Stock Price:</label>
               <input type="text" class="form-control" id="stockPrice" name="stockPrice">
             </div>
             <div class="form-group">
               <label for="stockDate">Stock Date:</label>
               <input type="text" class="form-control" id="stockDate" name="stockDate">
            </div>
             <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>


@endsection
