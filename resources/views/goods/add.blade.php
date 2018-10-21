@extends("layouts.main")

@section("title","商品添加")
@section("content")
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            {{csrf_field()}}
            <label for="inputEmail3" class="col-sm-2 control-label">商品名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old("name")}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">商品头像</label>
            <div class="col-sm-10">
                <input type="file" class="form-control"  name="imgs">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">分类名称</label>
            <div class="col-sm-10">
                <select name="categy_id" id="">
                    <option value="">请选择分类</option>
                    @foreach($rows as $row)
                        <option value="{{$row->id}}">{{$row->fenleiN}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">商品价格</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="money" placeholder="" name="money" value="{{old("money")}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">商品详情</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="xq" placeholder="" name="xq" value="{{old("xq")}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">是否上架</label>
            <div class="col-sm-10">
                <input type="radio" class="" id="is_on_sale" placeholder="" name="is_on_sale" value="1">上架
                <input type="radio" class="" id="is_on_sale" placeholder="" name="is_on_sale" value="0">不上架
            </div>
        </div>


        <div class="form-group">
            <label  class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-10">
                <input id="captcha" class="form-control" name="captcha" >
                <img class="thumbnail captcha" src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">添加</button>
            </div>
        </div>
    </form>
@endsection

