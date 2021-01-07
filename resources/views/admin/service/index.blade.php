@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách các dịch vụ</h3>
                        <button style="float:right; width: 200px" class="btn btn-outline-info"><a href="{{route('admin.service.create')}}">Tạo mới</a></button>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">
                                        Tên dịch vụ
                                    </th>
                                    <th style="text-align: center;">
                                        Mô tả
                                    </th>
                                    <th style="text-align: center;">
                                        Trạng thái
                                    </th>
                                    <th style="text-align: center;">
                                        Giờ hoạt động
                                    </th>
                                    <th colspan="2" style="text-align: center;">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr id="tr_service_{{$service->id}}">
                                        <td class="text-center">
                                            <h5 class="card-title" style="text-align: center; font-weight: bold;">
                                                {{ $service->name }}
                                            </h5>
                                            <div width="250">
                                                <img class="img-thumbnail img-responsive" width="250"
                                                     src="@if(isset($service->feature_image)){{asset('storage/'.$service->feature_image)}} @else http://placeimg.com/200/100/any @endif"
                                                     alt="">
                                            </div>
                                        </td>
                                        <td width="30%">
                                            {{$service->excerpt}}
                                        </td>
                                        <td>
                                        @if($service->status == 1) <label class="tag bg-success">Đang hoạt động</label> @else <label class="tag bg-warning">Tạm dừng hoạt động</label> @endif
                                        </td>
                                        <td>
                                          {{$service->start_time}} ~ {{$service->end_time}}
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-info" href="{{route('admin.service.edit', $service->slug)}}">
                                                Chỉnh sửa
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-danger delete" data-id="{{$service->id}}">
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
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    <script>
        $(document).ready(function () {
            // setup Toastr
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

            // Xoá dữ liệu bằng ajax
            $('.delete').on('click', function () {
                var service_id = $(this).data('id');
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
                            var url = 'service/' + service_id;
                            $.ajax({
                                url: url,
                                method: "DELETE",
                                success: function (data) {
                                    $('#tr_service_' + service_id).hide();
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
        });
    </script>
@endsection
