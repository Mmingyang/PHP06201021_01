<?php

namespace App\Http\Controllers;

use App\Models\Fenlei;
use App\Models\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class GoodsController extends Controller
{
    //
    public function index()
    {
//        $goods=Goods::all();
//
//        return view("goods.index",compact("goods"));

        $rows=DB::table("goods")
            ->join("fenleis","fenleis.id","=","goods.categy_id")
            ->select("goods.*","fenleis.fenleiN")
            ->get();

        return view("goods/index",compact("rows"));

    }


    public function add(Request $request)
    {
        if($request->isMethod("post")){

            $data=$request->post();

            if(Goods::create($data)){

                session()->flash("success","添加成功");
                return redirect("goods/index");
            }


        }

        $rows=DB::select("select * from fenleis");

        return view("goods/add",compact("rows"));

    }


    public function edit(Request $request,$id)
    {
        $goods=Goods::find($id);

        if($request->isMethod("post")){

            $data=$request->post();

            if($goods->update($data)){

                session()->flash("success","编辑成功");
                return redirect("goods/index");

            }

        }

        $rows=Fenlei::all();
        return view("goods/edit",compact("goods","rows"));

    }

    public function del($id)
    {
        $goods=Goods::find($id);

        if($goods->delete()){
            session()->flash("success","删除成功");
            return view("goods/index");
        }

    }


    public function ck(Request $request,$id)
    {
        $goods=Goods::find($id);
        DB::table("goods")->where('id',$id)->increment("llq",1);

        return view("goods/ck",compact("goods"));

    }




}
