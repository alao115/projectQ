@extends('layouts.header')

@section('content')
<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Tables</h2>
    </div>
  </header>
  <!-- Breadcrumb-->
  <div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Tables</li>
    </ul>
  </div>

  <!-- <div class="statistics col-lg-3 col-12">
    <div class="statistic d-flex align-items-center bg-white has-shadow">
      <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
      <div class="text"><strong>234</strong><br><small>Applications</small></div>
    </div>
    <div class="statistic d-flex align-items-center bg-white has-shadow">
      <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
      <div class="text"><strong>152</strong><br><small>Interviews</small></div>
    </div>
    <div class="statistic d-flex align-items-center bg-white has-shadow">
      <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
      <div class="text"><strong>147</strong><br><small>Forwards</small></div>
    </div>
  </div> -->
<br>
  <div class="statistics col-lg-12 col-15">
    <div class="statistic d-flex align-items-center bg-white has-shadow">
      <div class="col-lg-3">
        <strong>1086.4 XOF</strong>
        <br>
        <p>Total transaction amount</p>
      </div>

      <div class="col-lg-3">
        <strong>1086.4 XOF</strong>
        <br>
        <p>Available amount</p>
      </div>

      <div class="col-lg-3">
        <strong>1086.4 XOF</strong>
        <br>
        <p>Today's amount</p>
      </div>


      <div class="col-lg-3">
        <strong>1086.4 XOF</strong>
        <br>
        <p>Last week's amount</p>
      </div>

    </div>
  </div>


  <section class="tables">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-close">
              <!-- <div class="dropdown">
                <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
              </div> -->
            </div>
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Transaction</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>MSISDN</th>
                      <th>OPERATION TYPE</th>
                      <th>AMOUNT</th>
                      <th>TRANSACTION DATE</th>
                      <th>CLIENT ID</th>
                      <th>RESPONSE MESSAGE</th>
                      <th>CLIENT REF N</th>
                      <th>RESPONSE TIME</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>22996301592</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Dashboard</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
  </div> -->

@endsection
