@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách tiện ích phòng</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" width="5">
                                        icon
                                    </th>
                                    <th style="text-align: center;">
                                        Mô tả
                                    </th>
                                    <th colspan="2" style="text-align: center;">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($facilities as $facility)
                                <tr>
                                    <td class="text-center">
                                        {!! $facility->icon !!}
                                    </td>
                                    <td>
                                        {{$facility->description}}
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-info">
                                            Chỉnh sửa
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger">
                                            Xoá
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Tạo mới tiện ích</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <form class="ta" action="{{route('admin.facility.store')}}" method="POST">
                                            @csrf
                                            <fieldset class="form-group">
                                                <label for="name">
                                                    Icon (Lấy icon: <a class="text-success" href="https://material.io/resources/icons/?style=baseline" target="_blank">Material</a> hoặc
                                                    <a class="text-success" target="_blank" href="https://fontawesome.com/icons?d=gallery">Fontawesome</a> ):
                                                </label>
                                                <div class="input-group @error('icon') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('icon') form-control-danger @enderror"
                                                           id="icon" name="icon" required >
                                                    @error('icon')
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
                                                          rows="1"></textarea>
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
