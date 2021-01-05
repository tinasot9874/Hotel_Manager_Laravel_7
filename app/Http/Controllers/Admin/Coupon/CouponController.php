<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coupon\CreateCouponRequest;
use App\Model\Admin\Coupon;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupon.index')->with('coupons',$coupons);
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
    public function store(CreateCouponRequest $request)
    {
        $coupon = Coupon::create([
            'name' => $request->name,
            'discount'  => $request->discount,
            'status' => 1,
            'description'   => $request->description,
        ]);
        if ($coupon){
            toast('Tạo mã khuyến mãi thành công!','success')->position('top-end');
        }
        return redirect(route('admin.coupon.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::find($id);
        return response()->json($coupon);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return response()->json($coupon);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }
    public function updateWithAjax(Request $request)
    {
        $coupon = Coupon::find($request->coupon_id);
        $coupon->discount = $request->discount;
        $coupon->description = $request->description;
        $coupon->save();
        return response()->json($coupon);
    }

    public function changeStatus(Request $request)
    {
        $coupon = Coupon::find($request->coupon_id);

        $coupon->status = $request->status;
        $coupon->save();

        return response()->json(['success'=>'Đổi trạng thái thành công!.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return response()->json(['success'=>'Xoá thành công']);
    }
}
