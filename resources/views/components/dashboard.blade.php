@extends('layouts.index')
@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="row align-items-center mb-2">
            <div class="col">
                <h2 class="h5 page-title">Welcome!</h2>
            </div>
            <div class="col-auto">
                <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                        <label for="reportrange" class="sr-only">Date Ranges</label>
                        <div id="reportrange" class="px-2 py-2 text-muted">
                            <span class="small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                        <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-2 align-items-center">
            <div class="card shadow my-4">
                <div class="card-body">
                    <div class="row align-items-center my-4">
                        <div class="col-md-4">
                            <div class="mx-4">
                                <strong class="mb-0 text-uppercase text-muted">Total Revenue</strong><br>
                                <h3>Rp 1.000.000K</h3>
                                <p class="text-muted"></p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="p-4">
                                    <p class="small text-uppercase text-muted mb-0">Sales</p>
                                    <span class="h2 mb-0">1200K</span>
                                    <p class="small mb-0">
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                        <span class="text-muted ml-1">+25%</span>
                                    </p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-4">
                                    <p class="small text-uppercase text-muted mb-0">Orders</p>
                                    <span class="h2 mb-0">3K+</span>
                                    <p class="small mb-0">
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                        <span class="text-muted ml-1">+28.5%</span>
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <!-- <div class="col-6">
                                    <div class="p-4">
                                    <p class="small text-uppercase text-muted mb-0">Visitors</p>
                                    <span class="h2 mb-0">1626</span>
                                    <p class="small mb-0">
                                        <span class="text-muted ml-1">+1.5%</span>
                                    </p>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <div class="p-4">
                                    <p class="small text-uppercase text-muted mb-0">Customers</p>
                                    <span class="h2 mb-0">186</span>
                                    <p class="small mb-0">
                                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                                        <span class="text-muted ml-1">-2.5%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mr-4">
                            <div id="areaChart"></div>
                        </div>
                    </div> <!-- .col-md-8 -->
                </div> <!-- end section -->
            </div>
        </div>
        <div class="row items-align-baseline">
            <div class="col-md-12 col-lg-4">
                <div class="card shadow eq-card mb-4">
                    <div class="card-body mb-n3">
                    <div class="row items-align-baseline h-100">
                        <div class="col-md-6 my-3">
                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Earning</strong></p>
                        <h3>$2,562</h3>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-6 my-4 text-center">
                        <div lass="chart-box mx-4">
                            <div id="radialbarWidget"></div>
                        </div>
                        </div>
                        <div class="col-md-6 border-top py-3">
                        <p class="mb-1"><strong class="text-muted">Cost</strong></p>
                        <h4 class="mb-0">108</h4>
                        <p class="small text-muted mb-0"><span>37.7% Last week</span></p>
                        </div> <!-- .col -->
                        <div class="col-md-6 border-top py-3">
                        <p class="mb-1"><strong class="text-muted">Revenue</strong></p>
                        <h4 class="mb-0">1168</h4>
                        <p class="small text-muted mb-0"><span>-18.9% Last week</span></p>
                        </div> <!-- .col -->
                    </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-12 col-lg-4">
                <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                    <div class="chart-widget mb-2">
                        <div id="radialbar"></div>
                    </div>
                    <div class="row items-align-center">
                        <div class="col-4 text-center">
                        <p class="text-muted mb-1">Cost</p>
                        <h6 class="mb-1">$1,823</h6>
                        <p class="text-muted mb-0">+12%</p>
                        </div>
                        <div class="col-4 text-center">
                        <p class="text-muted mb-1">Revenue</p>
                        <h6 class="mb-1">$6,830</h6>
                        <p class="text-muted mb-0">+8%</p>
                        </div>
                        <div class="col-4 text-center">
                        <p class="text-muted mb-1">Earning</p>
                        <h6 class="mb-1">$4,830</h6>
                        <p class="text-muted mb-0">+8%</p>
                        </div>
                    </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-12 col-lg-4">
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