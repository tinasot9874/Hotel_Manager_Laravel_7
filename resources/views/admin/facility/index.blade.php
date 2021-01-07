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
                                    <th >
                                        icon
                                    </th>
                                    <th>
                                        Mô tả
                                    </th>
                                    <th>
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($facilities as $facility)
                                    <tr id="facility_{{$facility->id}}">
                                        <td class="text-center">
                                            <img width="40" src="{{$facility->icon}}" alt="">
                                        </td>
                                        <td>
                                            {{$facility->description}}
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-danger delete" data-id="{{$facility->id}}">
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

                        <form id="form_upload" action="{{route('admin.facility.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset class="form-group">
                                <label for="name">Icon (<a class="text-success" href="https://www.flaticon.com/"
                                                           target="_blank">Flaticon)</a>
                                </label>
                                <img id="preview_image" alt="" width="50px">
                                <div class="form-group @error('icon') has-danger @enderror">


                                    <input type="text"
                                           class="form-control @error('icon') form-control-danger @enderror "
                                           id="input-icon" name="icon" required style="display: none">


                                    <button class="btn btn-primary btn-sm" id="button_upload_icon">
                                        <i class="material-icons" aria-hidden="true">
                                            file_upload
                                        </i>
                                    </button>

                                    @error('icon')
                                        <span class="has-danger" role="alert">
                                            <strong class="form-control-label">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <fieldset class="form-group m-t-2">
                                    <label for="description">
                                        Mô tả:
                                    </label>
                                    <textarea class="form-control" id="description" name="description" required
                                              rows="3"></textarea>
                                </fieldset>
                                <br>
                            </fieldset>
                            <button type="submit" class="btn btn-success m-t-2" style="float:right;">
                                Tạo mới
                            </button>
                        </form>

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
        button_upload_icon.onclick = function (e) {
            e.preventDefault();
            selectFileWithCKFinder('input-icon');
        };

        function selectFileWithCKFinder(elementId) {
            CKFinder.popup({
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function (finder) {
                    finder.on('files:choose', function (evt) {
                        var file = evt.data.files.first();
                        var output = document.getElementById(elementId);
                        output.value = file.getUrl();
                        document.getElementById('preview_image').src = file.getUrl();
                    });

                    finder.on('file:choose:resizedImage', function (evt) {
                        var output = document.getElementById(elementId);
                        output.value = evt.data.resizedUrl;
                    });
                }
            });
        }
    </script>
    <script>
        // Xoá dữ liệu bằng ajax
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        $('.delete').on('click', function () {
            var facility = $(this).data('id');
            Swal.fire({
                title: 'Xoá mã',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Xoá!',
                cancelButtonText: 'Trở về!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Đã xoá!',
                    ).then((result) => {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var url = 'facility/' + facility;
                        $.ajax({
                            url: url,
                            method: "DELETE",
                            success: function (data) {
                                $('#facility_' + facility).hide();
                                Toast.fire({
                                    icon: 'success',
                                    title: data.success
                                })
                            }
                        });
                    })
                }
            })
        });
    </script>
@endsection
