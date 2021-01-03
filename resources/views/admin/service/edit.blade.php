@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Chỉnh sửa: {{$service->name}}</h3>
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
                                                    Tên dịch vụ:
                                                </label>
                                                <div class="input-group @error('name') has-danger @enderror">
                                                    <input type="text"
                                                           class="form-control @error('name') form-control-danger @enderror"
                                                           id="name" name="name" value="{{$service->name}}"
                                                    >

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
                                                           id="type" name="type" value="{{$service->type}}"
                                                    >

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
                                                    <input type="text"
                                                           class="form-control @error('type') form-control-danger @enderror"
                                                           id="hotline" name="hotline" value="{{$service->hotline}}"
                                                    >

                                                    @error('hotline')
                                                    <span class="has-danger" role="alert">
                                                            <strong class="form-control-label">{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="status">
                                                    Trạng thái dịch vụ:
                                                </label>
                                                <select class="custom-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <label for="excerpt">
                                                    Mô tả:
                                                </label>
                                                <textarea class="form-control" id="excerpt" name="excerpt"
                                                          rows="">{{$service->excerpt}}</textarea>
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
                                                    <img src="{{asset($service->feature_image)}}" id="preview_image"
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

@section('scripts')

@endsection
