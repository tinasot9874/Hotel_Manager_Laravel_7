@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="row">
                <!-- Cart View area -->
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-block">
                        <h5 class="m-b-0 v-align-middle text-overflow">
                    <span class="small pull-xs-right">
                      <i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i>
                      <span style="line-height: 24px;">+76%</span>
                    </span>
                            <span>804</span>
                        </h5>
                        <div class="small text-overflow text-muted">
                            View
                        </div>
                        <div class="small text-overflow">
                            Updated:&nbsp;<span>05:35 AM</span>
                        </div>
                    </div>
                </div>
                <!-- Cart Booking area -->
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-block">
                        <h5 class="m-b-0 v-align-middle text-overflow">
                    <span class="small pull-xs-right tag bg-success p-y-0 p-x-xs" style="line-height: 24px;">
                      <span>+20K</span>
                    </span>
                            <span>403</span>
                        </h5>
                        <div class="small text-overflow text-muted">
                            Disk usage
                        </div>
                        <div class="small text-overflow">
                            Updated:&nbsp;<span>12:42 PM</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-block">
                        <h5 class="m-b-0 v-align-middle text-overflow">
                    <span class="small pull-xs-right">
                      <i class="material-icons text-danger" style="width: 16px;">arrow_drop_down</i>
                      <span style="line-height: 24px;">+40%</span>
                    </span>
                            <span>976</span>
                        </h5>
                        <div class="small text-overflow text-muted">
                            GPU compute
                        </div>
                        <div class="small text-overflow">
                            Updated:&nbsp;<span>09:26 AM</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card card-block">
                        <h5 class="m-b-0 v-align-middle text-overflow">
                    <span class="small pull-xs-right">
                      <i class="material-icons text-success" style="width: 16px;">arrow_drop_up</i>
                      <span style="line-height: 24px;">+94%</span>
                    </span>
                            <span>457</span>
                        </h5>
                        <div class="small text-overflow text-muted">
                            CPU usage
                        </div>
                        <div class="small text-overflow">
                            Updated:&nbsp;<span>06:45 AM</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content area -->
            <ul class="list-group">
                <li class="list-group-item notification-bar-fail">
                    <div href="#" class="notification-bar-icon">
                        <div><i></i></div>
                    </div>
                    <div class="notification-bar-details">
                        <a href="#" class="notification-bar-title">
                            You have 8 projects still pending
                        </a>
                        <span class="text-muted">
                    26 mins ago
                  </span>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <!-- /main area -->
@endsection
