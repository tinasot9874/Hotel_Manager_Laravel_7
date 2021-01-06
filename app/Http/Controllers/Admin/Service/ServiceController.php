<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use App\Model\Admin\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $data = $request->only([
            'name',
            'type',
            'hotline',
            'start_time',
            'end_time',
            'excerpt',
            'description',
            'status',
        ]);
        // handle image

        $data['slug'] = convert_to_slug($request->name);
        if ($request->hasFile('feature_image')) {
            $image = $request->feature_image->store('service','public');
            $data['feature_image'] = $image;
        }
        $service = Service::create($data);
        if ($service) {
            toast('Tạo mới dịch vụ thành công!', 'success');
            return redirect()->back();
        }else{
            toast('Tạo mới thất bại, vui lòng thử lại!', 'error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit')->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->only([
            'name',
            'type',
            'hotline',
            'start_time',
            'end_time',
            'excerpt',
            'description',
            'status',
        ]);
        // handle image

        $data['slug'] = convert_to_slug($request->name);
        if ($request->hasFile('feature_image')) {
            $image = $request->feature_image->store('service','public');
            $data['feature_image'] = $image;
        }
        $service->update($data);
        toast('Cập nhật dịch vụ thành công!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return response()->json(['success' => 'Xoá dữ liệu thành công!']);
    }
}
