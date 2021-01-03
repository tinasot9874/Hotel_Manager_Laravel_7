@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách các dịch vụ</h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-deck-wrapper">
                                    <div class="card-deck">
                                        @foreach($services as $service )
                                        <div class="card col-md-4">
                                            <img class="card-img-top img-fluid" src="https://placeimg.com/600/400?7" alt="Card image">
                                            <div class="card-block">
                                                <h5 class="card-title">
                                                    {{ $service->name }}
                                                </h5>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        {{$service->type}}
                                                    </small>
                                                </p>
                                                <p class="card-text">
                                                    {{$service->excerpt}}                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Tạo mới loại phòng</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
