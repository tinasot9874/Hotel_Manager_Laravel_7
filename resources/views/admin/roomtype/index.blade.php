@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách các loại phòng</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered m-b-0">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">
                                        Tên Loại
                                    </th>
                                    <th style="text-align: center;">
                                        Mô tả
                                    </th>
                                    <th style="text-align: center;">
                                        Giá chung
                                    </th>
                                    <th colspan="2" style="text-align: center;">
                                        Hành động
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roomtypes as $roomtype)
                                    <tr>
                                        <td class="text-center">
                                            <h5 class="card-title" style="text-align: center; font-weight: bold;">
                                                {{ $roomtype->name }}
                                            </h5>
                                            <div>
                                                <img class="img-fluid" width="100%"
                                                     src="@if(isset($roomtype->feature_image)){{asset('storage/'.$roomtype->feature_image)}} @else http://placeimg.com/200/50/any @endif"
                                                     alt="">
                                            </div>
                                        </td>
                                        <td width="30%">
                                            {{ excerpt_text($roomtype->description,250) }}
                                        </td>
                                        <td>
                                            <span class="common_price">{{$roomtype->common_price}}</span>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-info" href="{{route('admin.roomtype.edit', $roomtype->slug)}}">
                                                Chỉnh sửa
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-danger"
                                               onclick="deleteConfirmation('{{$roomtype->slug}}')">
                                                Xoá
                                            </a>
                                            <form action="" method="post" id="deleteConfirmation">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $roomtypes->links() }}
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
                            <table class="table table-bordered table-striped m-b-0">
                                <tbody>
                                <tr>
                                    <td>
                                        <form class="ta" action="{{route('admin.roomtype.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <fieldset class="form-group">
                                                <label for="name">
                                                    Tên loại phòng:
                                                </label>
                                                <div class="input-group @error('name') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('name') form-control-danger @enderror"
                                                           id="name" name="name"
                                                           placeholder="Tên loại phòng">

                                                    @error('name')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label class="name" for="common_price">
                                                    Giá tiền chung (VND):
                                                </label>
                                                <div class="input-group @error('common_price') has-danger @enderror">

                                                    <input type="number" min="1" id="common_price"
                                                           class="form-control @error('common_price') form-control-danger @enderror"
                                                           name="common_price" placeholder="Giá tiền chung"
                                                           aria-required="true" aria-invalid="true">
                                                    @error('common_price')
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
                                                          rows="5"></textarea>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="feature_image">
                                                    Banner đại diện
                                                </label>
                                                <input id="feature_image" type="file" name="feature_image"
                                                       class=" @error('feature_image') form-control-danger @enderror"
                                                       onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])"
                                                       required="required">
                                                @error('feature_image')
                                                <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <fieldset class="form-group mt-2">
                                                    <img id="preview_image" width="100%">
                                                </fieldset>
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
    <script type="text/javascript">
        $('.common_price').simpleMoneyFormat();

        function deleteConfirmation(slug) {
            Swal.fire({
                title: 'Xoá?',
                icon: 'warning',
                cancelButtonText: "Huỷ",
                confirmButtonText: 'Xoá',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Đã xoá thành công!'
                    ).then((result) => {
                            if (result.isConfirmed) {
                                var form = document.getElementById('deleteConfirmation')
                                form.action = 'roomtype/' + slug;
                                document.getElementById("deleteConfirmation").submit();
                            }
                        }
                    )
                }
            })
        }
    </script>
@endsection
