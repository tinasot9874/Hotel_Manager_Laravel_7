@extends('admin.layouts.default')

@section('css')

@endsection

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Tạo mới dịch vụ</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <form class="ta" action="{{route('admin.service.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <fieldset class="form-group">
                                                <label for="name">
                                                    Tên dịch vụ:
                                                </label>
                                                <div class="input-group @error('name') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('name') form-control-danger @enderror"
                                                           id="name" required name="name">

                                                    @error('name')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="type">
                                                    Loại dịch vụ:
                                                </label>
                                                <div class="input-group @error('type') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('type') form-control-danger @enderror"
                                                           id="type" name="type">

                                                    @error('type')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="hotline">
                                                    Số Hotline:
                                                </label>
                                                <div class="input-group @error('hotline') has-danger @enderror">
                                                    <input type="number"
                                                           class="form-control @error('type') form-control-danger @enderror"
                                                           id="hotline" name="hotline">

                                                    @error('hotline')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="hotline">
                                                    Thời gian hoạt động:
                                                </label>
                                                <div class="input-group @error('start_time') has-danger @enderror"
                                                     style="display: flex;">
                                                    <input style="width: 100px;" id="start_time" type="text"
                                                           name="start_time"
                                                           class="form-control @error('start_time') form-control-danger @enderror time-picker">
                                                    <span class="input-group-addon add-on" style="width: 50px;">
                                                        <i class="material-icons">access_time</i>
                                                    </span>
                                                    <label style="padding: 10px" for="">Đến</label>
                                                    <input style="width: 100px;" type="text" name="end_time"
                                                           class="form-control @error('end_time') form-control-danger @enderror time-picker">
                                                    <span class="input-group-addon add-on" style="width: 50px;">
                                                        <i class="material-icons">access_time</i>
                                                    </span>
                                                </div>

                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="excerpt">
                                                    Mô tả ngắn:
                                                </label>
                                                <textarea class="form-control" id="excerpt" name="excerpt" required=""
                                                          rows=""></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="description">
                                                    Nội dung chi tiết dịch vụ:
                                                </label>
                                                <textarea class="form-control" id="description" name="description"
                                                          required
                                                          rows="5"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="status">
                                                    Trạng thái dịch vụ:
                                                </label>

                                                <select class="custom-select" name="status">
                                                        <option value="0">Tạm dừng</option>
                                                        <option value="1">Hoạt động</option>
                                                </select>
                                            </fieldset>

                                            <fieldset class="form-group">
                                                <label for="feature_image">
                                                    Banner đại diện
                                                </label>
                                                <input id="feature_image" type="file" name="feature_image" required
                                                       class=" @error('feature_image') form-control-danger @enderror"
                                                       onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])">
                                                @error('feature_image')
                                                <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <fieldset class="form-group mt-2">
                                                    <img
                                                         id="preview_image"
                                                         width="35%">
                                                </fieldset>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
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
@include('ckfinder::setup')
@section('scripts')
    <!-- initialize page scripts -->
    <script src="{{asset('vendor/ckeditor4/ckeditor.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
    <script src="{{asset('vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script>
        /******** Timepicker ********/
        $('.time-picker').timepicker();
    </script>
    <!-- end initialize page scripts -->

    <script>
        CKEDITOR.replace('description', {
            extraPlugins: 'uploadimage,image2',
            height: 300,

            // Upload images to a CKFinder connector (note that the response type is set to JSON).
            uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

            filebrowserBrowseUrl: '/ckfinder/browser',

            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserWindowWidth: '1000',
            filebrowserWindowHeight: '700'
        });

    </script>
@endsection
