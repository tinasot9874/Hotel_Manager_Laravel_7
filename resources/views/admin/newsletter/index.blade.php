@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách theo dỗi</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">
                                        Email
                                    </th>
                                    <th style="text-align: center;">
                                        Ngày đăng ký
                                    </th>
                                    <th colspan="2" style="text-align: center;">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            tinasot9874@gmail.com
                                        </td>
                                        <td>
                                            <span class="common_price">5/12/2019</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-danger">
                                                Xoá
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>

@endsection
