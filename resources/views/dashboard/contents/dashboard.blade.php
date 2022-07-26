@extends('dashboard.index')
@section('content')
<div class="row">
<div class="col-md-12">
    <div class="overview-wrap">
        <h2 class="title-1">Dashboard</h2>

    </div>
</div>
</div>


<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('home.members') }}">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $count; }}</h2>
                        <span>members registered</span>
                    </div>
                </div>

            </div>
        </div>
        </a>
    </div>
   <div class="col-sm-6 col-lg-3">
        <a href="{{ route('home.paidCustomers') }}">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money-box"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $fuser; }}</h2>
                        <span>customers payed</span>
                    </div>
                </div>

            </div>
        </div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="{{ route('home.pendingCustomers') }}">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-box-mail"></i>
                    </div>
                    <div class="text">
                        <h2>{{ $puser }}</h2>
                        <span>Pending Customers</span>
                    </div>
                </div>

            </div>
        </div>
    </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>$1,060,386</h2>
                        <span>total earnings</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
   <div>

    </div>
</div>

@endsection
