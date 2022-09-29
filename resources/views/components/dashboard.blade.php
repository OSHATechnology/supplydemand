@extends('layouts.index')
@section('content')

          <div class="row justify-content-center">
               <div class="col-12">
                    <div class="row align-items-center mb-2">
                         <div class="col">
                              <h2 class="h5 page-title">Welcome!</h2>
                         </div>
                         <div class="col-auto">
                              <form action="">
                                   <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Year</label>
                                        <div class="col-sm-8">
                                             <select name="" id="select-year" class="form-control">
                                                  @foreach($data as $d)
                                                       <option value="{{$d->tahun}}">{{$d->tahun}}</option>
                                                  @endforeach
                                             </select>
                                         </div>
                                   </div>
                              </form>
                         </div>
                    </div>
                    <div class="row items-align-baseline">
                         <div class="col-md-12">
                              <div class="card shadow mb-4">
                                   <div class="card-header">
                                        <strong>Goal</strong>
                                   </div>
                                   <div class="card-body px-4">
                                        <div class="row border-bottom">
                                             <div class="col-6 text-center mb-3">
                                                  <p class="mb-1 small text-muted">Total Actual Sales</p>
                                                  <span class="h3 actual-sales text-success">26</span><br>
                                             </div>
                                             <div class="col-6 text-center mb-3">
                                                  <p class="mb-1 small text-muted">Total Forecast Sales</p>
                                                  <span class="h3 forecast-sales text-danger">$260</span><br>
                                             </div>
                                             <!-- <div class="col-4 text-center mb-3">
                                                  <p class="mb-1 small text-muted">Target Sales</p>
                                                  <span class="h3 target-sales text-primary">$260</span><br>
                                             </div> -->
                                             <div class="col-4 text-center mb-3">
                                                  
                                             </div>
                                        </div>
                                   </div> <!-- .card-body -->
                               </div> <!-- .card -->
                         </div>
                    </div> <!-- .row -->

                    <div class="row items-align-baseline">
                         <div class="col-md-12">
                              <div class="card shadow mb-4">
                                   <div class="card-body">
                                        <div class="py-5 text-center">
                                             <p class="text-muted mb-2">Target Sales</p>
                                             <h2 class="mb-1 target-sales text-primary">1,254</h2>
                                        </div>
                                        <div class="row align-items-center mb-1">
                                             <div class="col-auto">
                                                  <div class="my-2 text-left">
                                                       <small class="text-danger mr-2">High</small>
                                                       <small class="text-warning mx-2">Medium</small>
                                                       <small class="text-success mx-2">Low</small>
                                                  </div>
                                             </div>
                                             <div class="col text-right">
                                                  <small class="mb-0 text-muted">Statistics</small>
                                             </div>
                                        </div>
                                        <div class="progress rounded mb-3 target-progressbar" style="height:14px">
                                             <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                                             <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                                             <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
        

          <div class="mb-2 align-items-center" id="div-chart">
               <div class="card shadow mb-4">
                    <div class="card-body">
                         <div class="row mt-1 align-items-center">
                              <div class="col-12 col-lg-4 text-left pl-4">
                                   <p class="mb-1 small text-muted">Car Production Data</p>
                                   <span class="h3 data-produksi-mobil">29019 Unit</span>
                                   <!-- <span class="small text-muted">+20%</span>
                                   <span class="fe fe-arrow-up text-success fe-12"></span> -->
                                   <p class="text-muted mt-2"></p>
                              </div>
                              <div class="col-6 col-lg-2 text-center py-4">
                                   <p class="mb-1 small text-muted">Sales</p>
                                   <span class="h3 data-penjualan">20391 <span class="small text-muted"> Unit /tahun</span></span><br />
                                   <!-- <span class="small text-muted">+20%</span> -->
                                   <!-- <span class="fe fe-arrow-up text-success fe-12"></span> -->
                              </div>
                              <div class="col-6 col-lg-2 text-center py-4 mb-2">
                                   <p class="mb-1 small text-muted">Highest Sales</p>
                                   <span class="h3 total-penjualan-tertinggi">20812  <span class="small text-muted"> Unit /tahun</span></span><br />
                                   <!-- <span class="small text-muted">+6%</span>
                                   <span class="fe fe-arrow-up text-success fe-12"></span> -->
                              </div>
                              <div class="col-6 col-lg-2 text-center py-4">
                                   <p class="mb-1 small text-muted">Lowest Sales</p>
                                   <span class="h3 total-penjualan-terendah">10921  <span class="small text-muted"> Unit /tahun</span></span><br />
                                   <!-- <span class="small text-muted">+20%</span>
                                   <span class="fe fe-arrow-down text-danger fe-12"></span> -->
                              </div>
                              <div class="col-6 col-lg-2 text-center py-4">
                                   <p class="mb-1 small text-muted">Highest Production</p>
                                   <span class="h3 total-produksi-tertinggi">19383</span><br />
                                   <!-- <span class="small text-muted">-2%</span>
                                   <span class="fe fe-arrow-up text-success fe-12"></span> -->
                              </div>
                         </div>
                         <div class="chartbox mr-4">
                              <div id="areaChart"></div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row items-align-baseline">
               <div class="col-md-12 col-lg-6" id="div-radial">
                    <div class="card shadow eq-card mb-4">
                         <div class="card-body">
                              <div class="chart-widget mb-2">
                                   <div id="radialbar"></div>
                              </div>
                              <div class="row items-align-center">
                                   <div class="col-12 text-center">
                                        <p class="text-muted mb-1">Remaining Production This Year</p>
                                        <h6 class="mb-1 sisa-produksi">$1,823</h6>
                                   </div>
                              </div>
                         </div> 
                    </div>
               </div>
               <div class="col-md-12 col-lg-6">
                    <div class="card shadow eq-card mb-4">
                         <div class="card-body">
                              <div class="card-title">
                                   <strong>Car Type</strong>
                              </div>
                              <div class="row">
                                   <div class="col-md-12" id="div-cartype">
                                        <div class="row align-items-center my-2">
                                             <div class="col">
                                                  <strong>Cloud Server</strong>
                                                  <div class="my-0 text-muted small">Global, Services</div>
                                             </div>
                                             <div class="col-auto">
                                                  <strong>+85%</strong>
                                             </div>
                                             <div class="col-3">
                                                  <div class="progress" style="height: 4px;">
                                                       <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center my-2">
                                             <div class="col">
                                                  <strong>CDN</strong>
                                                  <div class="my-0 text-muted small">Global, Services</div>
                                             </div>
                                        <div class="col-auto">
                                             <strong>+75%</strong>
                                        </div>
                                        <div class="col-3">
                                             <div class="progress" style="height: 4px;">
                                                  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12" id="div-pie">
                                   <div id="chart-box" class="mt-3">
                                        <div id="pieChartWidget"></div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

    @section('javascript')
        <script type="text/javascript" src="{{asset('external_js/dashboard.js')}}"></script>
    @endsection

</div>

@endsection