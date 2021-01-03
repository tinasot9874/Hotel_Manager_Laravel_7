@extends('admin.layouts.default')
@section('title-page', 'Edit')
@section('content')

    <div class="main-content">
        <div class="content-view ">
            <div class="row">
                <div class="col col-lg-12 ">
                    <div class="card">
                        <div class="card-header no-bg b-a-0">
                            Edit
                        </div>
                        <div class="card-block">
                            <form class="ta" action="{{route('admin.roomtype.update', $roomtypes->slug)}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <fieldset class="form-group">
                                    <label for="name">
                                        Tên loại phòng:
                                    </label>
                                    <div class="input-group @error('name') has-danger @enderror">
                                        <input type="text"
                                               class="form-control @error('name') form-control-danger @enderror"
                                               id="name" name="name" value="{{$roomtypes->name}}">

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
                                               name="common_price" aria-required="true" aria-invalid="true" value="{{$roomtypes->common_price}}">
                                        @error('common_price')
                                        <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <label for="description">
                                        Mô tả chung:
                                    </label>
                                    <textarea class="form-control" id="description" name="description" rows="10">{{$roomtypes->description}}
                                    </textarea>
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
                                    <fieldset class="form-group mt-2" >
                                        <img width="350px" src="{{asset('storage/'.$roomtypes->feature_image)}}" id="preview_image" width="100%">
                                    </fieldset>
                                </fieldset>
                                <fieldset class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </fieldset>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main area -->
    </div>



@endsection
@section('scripts')
    <script>
        //$('.common_price').simpleMoneyFormat();
    </script>
@endsection
