@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-8">
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
                                        Tên trạng thái
                                    </th>
                                    <th style="text-align: center;">
                                        Mô tả trạng thái
                                    </th>
                                    <th colspan="2" style="text-align: center;">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">
                                        Tạm dừng hoạt động
                                    </td>
                                    <td>
                                        <span class="common_price">Dùng để tạm dừng các hoạt động dịch vụ</span>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Tạo mới trạng thái</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <form class="ta" action="{{route('admin.status.store')}}" method="POST">
                                            @csrf
                                            <fieldset class="form-group">
                                                <label for="name">
                                                    Tên trạng thái:
                                                </label>
                                                <div class="input-group @error('name') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('name') form-control-danger @enderror"
                                                           id="name" name="name">
                                                    @error('name')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="description">
                                                    Mô tả:
                                                </label>
                                                <textarea class="form-control" id="description" name="description"
                                                          rows="3"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                    Tạo mới
                                                </button>
                                            </fieldset>

                                        </form>
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
