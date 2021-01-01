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
                                                     src="@if(isset($roomtype->feature_image)){{asset('storage/'.$roomtype->feature_image)}} @else http://placeimg.com/200/100/any @endif"
                                                     alt="">
                                            </div>
                                        </td>
                                        <td width="30%">
                                            {{ $roomtype->description }}
                                        </td>
                                        <td>
                                            <span class="common_price">{{$roomtype->common_price}}</span> VND
                                        </td>
                                        <td>
                                            <a href="{{route('admin.roomtype.edit', $roomtype->slug)}}"><span
                                                    class="material-icons">create</span></a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.roomtype.destroy', $roomtype->slug)}}"><span
                                                    class="material-icons">clear</span></a>
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
                                                <input type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       id="name" name="name"
                                                       placeholder="Tên loại phòng">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label class="name" for="common_price">
                                                    Giá tiền chung (VND):
                                                </label>
                                                <div class="input-group">

                                                    <input type="number" min="1" id="common_price"
                                                           class="form-control @error('common_price') is-invalid @enderror"
                                                           name="common_price" placeholder="Giá tiền chung"
                                                           aria-required="true" aria-invalid="true">
                                                    @error('common_price')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
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
                                                       class="@error('feature_image') is-invalid @enderror"
                                                       onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])"
                                                       required="required">
                                                @error('feature_image')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                                <fieldset class="form-group mt-2">
                                                    <img id="preview_image" width="100%">
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

@section('scripts')

    <script type="text/javascript">
        $('.common_price').simpleMoneyFormat();
    </script>
@endsection
