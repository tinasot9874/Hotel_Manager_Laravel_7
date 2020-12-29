@extends('admin.layouts.default')

@section('content')
    <!-- main area -->
    <div class="main-content">
        <!-- dashboard area -->
        <div class="content-view">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header no-bg b-a-0">
                        <h3>Danh sách loại phòng</h3>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped m-b-0">
                                <thead>
                                <tr>
                                    <th>
                                        Rendering engine
                                    </th>
                                    <th>
                                        Browser
                                    </th>
                                    <th>

                                    </th>
                                    <th>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        Gecko
                                    </td>
                                    <td>
                                        Firefox 3.0
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                    <td>
                                        Delete
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
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
                                        <div class="form-group">
                                            <form class="form-inline">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputAmount">
                                                        Amount (in dollars)
                                                    </label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            $
                                                        </div>
                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                                        <div class="input-group-addon">
                                                            .00
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">
                                                    Transfer cash
                                                </button>
                                            </form>
                                        </div>
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
