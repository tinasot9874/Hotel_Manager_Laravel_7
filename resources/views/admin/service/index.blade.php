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
                                    <tr>
                                        <td class="text-center">
                                            <h5 class="card-title" style="text-align: center; font-weight: bold;">
                                                {{ $service->name }}
                                            </h5>
                                            <div>
                                                <img class="img-fluid" width="100%"
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
                                            <a class="btn btn-outline-danger"
                                                onclick="deleteConfirmation('{{$service->slug}}')">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
