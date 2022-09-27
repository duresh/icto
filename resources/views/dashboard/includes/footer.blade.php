 <!-- Jquery JS-->
    <script src="{{ asset('admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    {{-- <script src="{{ asset('admin/vendor/chartjs/Chart.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('admin/vendor/select2/select2.min.js') }}">
    </script>
    <script src="{{ asset('js/datatables.min.js') }}"></script>
    <script src="{{ asset('css/dist/zebra_datepicker.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/chartjs-plugin-colorschemes.min.js') }}"></script>

    <script>
        $('#stockDate').Zebra_DatePicker();

        var url = "{{route('stock.chart')}}";
        var dates = new Array();
        var Labels = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                dates.push(data.stockDate);
                Labels.push(data.stockName);
                Prices.push(data.stockPrice);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'line',
                  data: {
                      labels:dates,
                      datasets: [{
                          label: 'Infosys Price',
                          data: Prices,
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      },
                      plugins: {
                        colorschemes: {
                            scheme: 'brewer.BrBG3'
                        }
                        }
                  }
              });
          });
        });
        </script>
