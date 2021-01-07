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
                                            <img width="40" src="{{asset('storage/'.$facility->icon)}}" alt="">
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
{{--                        <form class="form-inline" action="{{route('admin.facility.store')}}"--}}
{{--                              method="POST" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <fieldset class="form-group">--}}
{{--                                --}}{{--                                                <label for="name">--}}
{{--                                --}}{{--                                                    Icon (Lấy icon - <a class="text-success"--}}
{{--                                --}}{{--                                                                        href="https://www.flaticon.com/"--}}
{{--                                --}}{{--                                                                        target="_blank">Flaticon)</a>:--}}
{{--                                --}}{{--                                                </label>--}}
{{--                                --}}{{--                                                <div class="input-group @error('icon') has-danger @enderror">--}}
{{--                                --}}{{--                                                    <input type="file"--}}
{{--                                --}}{{--                                                           class="form-control @error('icon') form-control-danger @enderror sr-only"--}}
{{--                                --}}{{--                                                           id="input-icon" name="icon" required>--}}
{{--                                --}}{{--                                                    <button class="btn btn-primary" id="button_upload_icon">--}}
{{--                                --}}{{--                                                        Tải icon--}}
{{--                                --}}{{--                                                    </button>--}}
{{--                                --}}{{--                                                    @error('icon')--}}
{{--                                --}}{{--                                                    <span class="has-danger" role="alert">--}}
{{--                                --}}{{--                                                            <strong class="form-control-label">{{ $message }}</strong>--}}
{{--                                --}}{{--                                                    </span>--}}
{{--                                --}}{{--                                                    @enderror--}}
{{--                                --}}{{--                                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="inputPassword2" class="sr-only">--}}
{{--                                        Password--}}
{{--                                    </label>--}}
{{--                                    <input type="password" class="form-control" id="inputPassword2"--}}
{{--                                           placeholder="Password">--}}
{{--                                </div>--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    Confirm identity--}}
{{--                                </button>--}}
{{--                            </fieldset>--}}


{{--                        </form>--}}
                        <div class="card-block">
                            <form class="form-inline">
                                <div class="form-group m-b-1">
                                    <input type="text" class="form-control" id="input-icon" style="width:300px">
                                </div>
                                <button id="button_upload_icon" class="btn btn-primary m-b-1">
                                    Upload icon
                                </button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('ckfinder::setup')
@section('scripts')
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    <script>
        var button_upload_icon = document.getElementById('button_upload_icon');
        button_upload_icon.onclick = function () {
            selectFileWithCKFinder('input-icon');
        };
        function selectFileWithCKFinder( elementId ) {
            CKFinder.popup( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>
@endsection
