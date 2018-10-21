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
    public function index(Request $request)
    {

        $rows=Fenlei::all();

        //接收
        $categyId=$request->get("categy_id");

        $query=Goods::orderBy("id");

        if ($categyId!==null){
            $query->where("categy_id",$categyId);
        }

        $goods=$query->paginate(2);

        return view("goods/index",compact("rows","goods"));

    }


    public function add(Request $request)
    {
        if($request->isMethod("post")){


            $this->validate($request,[
                "name"=>"required",
                "categy_id"=>"required",
                "imgs"=>"required",
                "money"=>"required",
                "xq"=>"required",
                "is_on_sale"=>"required",
                "captcha"=>"required|captcha",
            ]);

            $data=$request->post();

            $file = $request->file("imgs");


            $data['imgs']=$file->store("images","image");

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

            $file=$request->file("imgs");

            $data['imgs']=$file->store("images","image");

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
