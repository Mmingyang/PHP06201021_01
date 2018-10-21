@extends("layouts.main")

@section("title","商品编辑")
@section("content")
    <form class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="form-group">
            {{csrf_field()}}
            <label for="inputEmail3" class="col-sm-2 control-label">商品名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{$goods->name}}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">商品头像</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="imgs">
                <img src="/{{$goods->imgs}}" alt="" width="50">
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">分类名称</label>
            <div class="col-sm-10">
                <select name="categy_id" id="">
                    <option value="">请选择分类</option>
                    @foreach($rows as $row)
                        <option value="{{$row->id}}" <?php if($row["id"]===$goods["categy_id"]) echo "selected"?>>{{$row->fenleiN}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">商品价格</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="money" placeholder="" name="money" value="{{$goods->money}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">商品详情</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="xq" placeholder="" name="xq" value="{{$goods->xq}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">是否上架</label>
            <div class="col-sm-10">
                <input type="radio" class="" id="is_on_sale" placeholder="" name="is_on_sale" value="1" <?php if($goods["is_on_sale"]==1) echo "checked"?>>上架
                <input type="radio" class="" id="is_on_sale" placeholder="" name="is_on_sale" value="0" <?php if($goods["is_on_sale"]==0) echo "checked"?>>不上架
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">编辑</button>
            </div>
        </div>
    </form>
@endsection

