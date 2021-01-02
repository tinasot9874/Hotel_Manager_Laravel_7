<?php

namespace App\Http\Controllers\Admin\RoomType;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomType\CreateRoomTypeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\RoomType;
use RealRashid\SweetAlert\Facades\Alert;
class RoomTypeController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $roomtype = RoomType::paginate(4);
        return view('admin.roomtype.index')->with('roomtypes', $roomtype);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoomTypeRequest $request)
    {


        // create slug
        $slug = convert_to_slug($request->name);

        // upload the image to storage
        $feature_image = $request->file('feature_image')->store('roomtype_banner','public');

        //store value into database
        $roomtype = RoomType::create([
            'name' => $request->name,
            'slug'  => $slug,
            'common_price' => $request->common_price,
            'description'   => $request->description,
            'feature_image' => $feature_image
        ]);
        if ($roomtype){
            toast('Tạo loại phòng thành công!','success')->position('top-end');
        }
        return redirect(route('admin.roomtype.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomType $roomtype)
    {
        return view('admin.roomtype.edit')->with('roomtypes', $roomtype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomtype)
    {
        $data = $request->only([
            'name',
            'common_price',
            'description',
        ]);

        // handle image

        $data['slug'] = convert_to_slug($request->name);
        if ($request->hasFile('feature_image')) {
            $image = $request->feature_image->store('roomtype_banner','public');
            $data['feature_image'] = $image;
        }
        $roomtype->update($data);
        toast('Cập nhật loại phòng thành công!','success')->position('top-end');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $roomType = RoomType::where('slug', $slug)->delete();
        toast('Xoá loại phòng thành công!','success')->position('top-end');
        return redirect()->back();
    }
}
