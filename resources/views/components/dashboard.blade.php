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
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-control">
                                @foreach($data as $d)
                                    <option value="">{{$d->tahun}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih Data</label>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-control">
                                <option value="">Komponen</option>
                                <option value="">Mobil</option>
                            </select>
                        </div>
                    </div> --}}
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
                          <!-- <span class="small text-muted">Unit</span> -->
                          <!-- <span class="fe fe-arrow-up text-success fe-12"></span> -->
                        </div>
                        <div class="col-6 text-center mb-3">
                          <p class="mb-1 small text-muted">Total Forecast Sales</p>
                          <span class="h3 forecast-sales text-danger">$260</span><br>
                          <!-- <span class="small text-muted">Unit</span> -->
                          <!-- <span class="fe fe-arrow-up text-success fe-12"></span> -->
                        </div>
                        <div class="col-4 text-center mb-3">
                          <!-- <p class="mb-1 small text-muted">Conversion</p>
                          <span class="h3">6%</span><br>
                          <span class="small text-muted">-2%</span>
                          <span class="fe fe-arrow-down text-danger fe-12"></span> -->
                        </div>
                      </div>
                      <!-- <table class="table table-borderless mt-3 mb-1 mx-n1 table-sm">
                        <thead>
                          <tr>
                            <th class="w-50">Goal</th>
                            <th class="text-right">Conversion</th>
                            <th class="text-right">Completions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Checkout</td>
                            <td class="text-right">5%</td>
                            <td class="text-right">260</td>
                          </tr>
                          <tr>
                            <td>Add to Cart</td>
                            <td class="text-right">55%</td>
                            <td class="text-right">1260</td>
                          </tr>
                          <tr>
                            <td>Contact</td>
                            <td class="text-right">18%</td>
                            <td class="text-right">460</td>
                          </tr>
                        </tbody>
                      </table> -->
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div>
            
            
        </div> <!-- .row -->

        <div class="mb-2 align-items-center">
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
                  </div> <!-- .card-body -->
                </div> <!-- .card -->
              </div>
        <div class="row items-align-baseline">
            
            <div class="col-md-12 col-lg-6">
                <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                    <div class="chart-widget mb-2">
                        <div id="radialbar"></div>
                    </div>
                    <div class="row items-align-center">
                        <div class="col-12 text-center">
                        <p class="text-muted mb-1">Remaining Production This Year</p>
                        <h6 class="mb-1 sisa-produksi">$1,823</h6>
                        <!-- <p class="text-muted mb-0">+12%</p> -->
                        </div>
                        <!-- <div class="col-4 text-center">
                        <p class="text-muted mb-1">Revenue</p>
                        <h6 class="mb-1">$6,830</h6>
                        <p class="text-muted mb-0">+8%</p>
                        </div>
                        <div class="col-4 text-center">
                        <p class="text-muted mb-1">Earning</p>
                        <h6 class="mb-1">$4,830</h6>
                        <p class="text-muted mb-0">+8%</p>
                        </div> -->
                    </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-12 col-lg-6">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="card-title">
                        <strong>Services</strong>
                        <a class="float-right small text-muted" href="#!">View all</a>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
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
                          <div class="row align-items-center my-2">
                            <div class="col">
                              <strong>Databases</strong>
                              <div class="my-0 text-muted small">Local, DC</div>
                            </div>
                            <div class="col-auto">
                              <strong>+62%</strong>
                            </div>
                            <div class="col-3">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- .col-md-12 -->
                        <div class="col-md-12">
                          <div id="chart-box" class="mt-3">
                            <div id="pieChartWidget"></div>
                          </div>
                        </div>
                      </div> <!-- .row -->
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-4 -->
        </div> <!-- .row -->
    </div> <!-- .col-12 -->

    @section('javascript')
        <script type="text/javascript" src="{{asset('external_js/dashboard.js')}}"></script>
    @endsection

</div>

@endsection