@extends('dashboard.index')
@section('content')

<div class="row">
		<div class="col" id="myChart"></div>
	</div>


@include('dashboard.includes.footer')
<script>
$(document).ready(function(){
     //charts
$("#myChart").html('
<div class="container">
<canvas id="graph" data-settings=
\'{
	"type" : "'line'",
	"data" : {

		"labels" : ['{{ $pluckedDate }}'],
		"datasets" : [{

			"label" : "Month",
			"backgroundColor": [
			      "rgba(255, 99, 132, 0.2)",
			      "rgba(255, 159, 64, 0.2)",
			      "rgba(255, 205, 86, 0.2)",
			      "rgba(75, 192, 192, 0.2)",
			      "rgba(54, 162, 235, 0.2)",
			      "rgba(153, 102, 255, 0.2)",
			      "rgba(201, 203, 207, 0.2)"
			    ],

			    "borderColor": [
				      "rgb(255, 99, 132)",
				      "rgb(255, 159, 64)",
				      "rgb(255, 205, 86)",
				      "rgb(75, 192, 192)",
				      "rgb(54, 162, 235)",
				      "rgb(153, 102, 255)",
				      "rgb(201, 203, 207)"
				    ],
    		"borderWidth": 1,
    		"hoverOffset": 10,

			"data" : ['{{ $pluckedAmount }}']
			}]
	},

	"options" : {

		"legend" : {

			"display" : true
		}
	}

	}\'>

</canvas>
</div>');
			$("#graph").chart = new Chart($("#graph"),$("#graph").data("settings"));
})
</script>
{{-- <div class="row">
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Yearly Sales</h3>
                <canvas id="sales-chart" height="333" style="display: block; width: 667px; height: 333px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Team Commits</h3>
                <canvas id="team-chart" height="333" style="display: block; width: 667px; height: 333px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Bar chart</h3>
                <canvas id="barChart" height="444" style="display: block; width: 667px; height: 444px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Rader chart</h3>
                <canvas id="radarChart" height="444" style="display: block; width: 667px; height: 444px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Line Chart</h3>
                <canvas id="lineChart" height="333" style="display: block; width: 667px; height: 333px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Doughut Chart</h3>
                <canvas id="doughutChart" height="333" style="display: block; width: 667px; height: 333px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Pie Chart</h3>
                <canvas id="pieChart" height="444" style="display: block; width: 667px; height: 444px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Polar Chart</h3>
                <canvas id="polarChart" height="444" style="display: block; width: 667px; height: 444px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card m-b-30">
            <div class="au-card-inner"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                <canvas id="singelBarChart" height="333" style="display: block; width: 667px; height: 333px;" width="667" class="chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
</div> --}}


@endsection
