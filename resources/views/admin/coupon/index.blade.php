@extends('admin.layouts.default')
@section('content')
    <div class="main-content">
        <div class="content-view">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        Danh sách mã khuyến mãi
                    </div>
                    <div class="alert alert-success" style="display:none"></div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0" id="coupon_table">
                                <thead>
                                <tr>
                                    <th>
                                        Tên mã khuyến mãi
                                    </th>
                                    <th>
                                        Mô tả mã
                                    </th>
                                    <th>
                                        Mức giảm VND
                                    </th>
                                    <th>
                                        Trạng thái
                                    </th>
                                    <th colspan="2">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coupons as $coupon)
                                    <tr id="trcoupon_{{$coupon->id}}">
                                        <td>
                                            <label class="tag tag-success"
                                                   style="font-size: 25px;">{{$coupon->name}}</label>
                                        </td>
                                        <td>
                                            {{$coupon->description}}
                                        </td>
                                        <td class="discount_price">{{$coupon->discount}}</td>
                                        <td>
                                            <input data-id="{{$coupon->id}}" class="toggle-class" type="checkbox"
                                                   data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                                   data-on="Hoạt động"
                                                   data-off="Tạm dừng" {{ $coupon->status === 1 ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-info button_toggle_modal_edit"
                                                    data-id="{{$coupon->id}}" data-toggle="modal"
                                                    data-target=".edit-coupon-modal">
                                                Chỉnh sửa
                                            </button>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-danger delete" data-id="{{$coupon->id}}">
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
                        <h3>Tạo mã khuyến mãi</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <form class="ta" id="create_form" method="post"
                                              action="{{route('admin.coupon.store')}}">
                                            @csrf
                                            <fieldset class="form-group">
                                                <label for="name">
                                                    Tên mã khuyến mãi:
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
                                                <label class="name" for="discount">
                                                    Giá tiền giảm (VND):
                                                </label>
                                                <div class="input-group @error('discount') has-danger @enderror">

                                                    <input type="number" min="1" id="discount"
                                                           class="form-control @error('discount') form-control-danger @enderror"
                                                           name="discount"
                                                           aria-required="true" aria-invalid="true">
                                                    @error('discount')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="description">
                                                    Mô tả (Tuỳ chọn):
                                                </label>
                                                <textarea class="form-control" id="description" name="description"
                                                          rows="3"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <button type="submit" class="btn btn-primary" id="submit">
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

    <!--- Modal -->
    <div class="modal fade edit-coupon-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Sửa thông tin</h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="form_edit_modal" class="form-horizontal">
                        <div class="form-group">
                            <label for="name">Tên mã:</label>
                            <input type="text" id="id_model" style="display: none;">
                            <input type="text" class="form-control" id="name_model" disabled value="">
                        </div>
                        <div class="form-group">
                            <label for="discount">Giá tiền (VND):</label>
                            <input type="number" class="form-control" id="discount_model" value="">
                        </div>
                        <div class="form-group">
                            <label for="description">
                                Mô tả (Tuỳ chọn):
                            </label>
                            <textarea class="form-control" id="description_model" name="description"
                                      rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary update_modal">Lưu thay đổi</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--- /Modal -->
@endsection
@section('scripts')

    <link href="{{asset('https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css')}}"
          rel="stylesheet">
    <script src="{{asset('https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js')}}"></script>
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    <script>
        // format tiền
        $('.discount_price').simpleMoneyFormat();

        $(document).ready(function () {
            // Tích hợp Toast cho ajax
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

            // Thay đổi trạng thái bằng ajax
            $('.toggle-class').on('change', function (e) {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var coupon_id = $(this).data('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                var data = {
                    coupon_id: coupon_id,
                    status: status,
                };
                $.ajax({
                    url: "{{route('admin.coupon.changeStatus')}}",
                    method: "POST",
                    data: data,
                    success: function (data) {
                        Toast.fire({
                            icon: 'success',
                            title: data.success
                        })
                    }
                });
            });

            // Xoá dữ liệu bằng ajax
            $('.delete').on('click', function () {
                var coupon_id = $(this).data('id');
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
                            var url = 'coupon/' + coupon_id;
                            $.ajax({
                                url: url,
                                method: "DELETE",
                                success: function (data) {
                                    $('#trcoupon_' + coupon_id).hide();
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

            //Chỉnh sửa dữ liệu
            // lấy data qua method show (GET)
            $('.button_toggle_modal_edit').on('click', function () {
                var coupon_id = $(this).data('id');
                // Dùng $.get(url, function()) lấy data qua method GET
                $.get('coupon/' + coupon_id, function (data) {

                    // gán giá trị từ database vào input của modal
                    $('#id_model').val(data.id);
                    $('#name_model').val(data.name);
                    $('#discount_model').val(data.discount);
                    $('#description_model').val(data.description);
                });

            });
            // Lấy giá trị của form sau khi thay đổi dữ liệu trên input modal
            $('#form_edit_modal').submit(function (e) {
                e.preventDefault(); // ngăn form submit
                var coupon_id = $('#id_model').val();
                var discount = $('#discount_model').val();
                var description = $('#description_model').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{route('admin.coupon.updateWithAjax')}}',
                    method: "post",
                    data: {
                        coupon_id: coupon_id,
                        discount: discount,
                        description: description,
                    },
                    success: function (data) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Cập nhật thành công'
                        })
                        $('#trcoupon_'+data.id + ' td:nth-child(2)').text(data.description);
                        $('#trcoupon_'+data.id + ' td:nth-child(3)').text(data.discount).simpleMoneyFormat();
                        $('.edit-coupon-modal').modal('toggle'); // đóng modal
                        $('#form_edit_modal')[0].reset(); // reset lại dữ liệu các trường của modal sau khi cập nhât
                    }
                });
            });

        });
    </script>
@endsection
