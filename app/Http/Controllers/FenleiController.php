<?php

namespace App\Http\Controllers;

use App\Models\Fenlei;
use Illuminate\Http\Request;

class FenleiController extends Controller
{
    //
    public function index()
    {
        $fenleis=Fenlei::all();

        return view("fenlei/index",compact("fenleis"));

    }

    public function add(Request $request)
    {
        if ($request->isMethod("post")) {

            $data=$request->post();

            if (Fenlei::create($data)){

                session()->flash("success","添加成功");
                return redirect("fenlei/index");
            }

        }

        return view("fenlei.add");

    }

    public function edit(Request $request,$id)
    {

        $fenlei=Fenlei::find($id);

        if($request->isMethod("post")){

            $data=$request->post();

            if($fenlei->update($data)){
                session()->flash("success","编辑成功");
                return redirect("fenlei/index");

            }

        }

        return view("fenlei.edit",compact("fenlei"));

    }

    public function del(Request $request,$id)
    {

        $fenlei=Fenlei::find($id);

        if($fenlei->delete()){

            session()->flash("success","删除成功");
            return redirect("fenlei/index");
        }

    }



}
