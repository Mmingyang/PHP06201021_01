@extends("layouts.main")
@section("title","商品列表")
@section("content")

    <div class="row">
        <div class="col-md-4">
            <a href="/goods/add" class="btn btn-info">添加</a>
        </div>
    <div class="col-md-8">
        <form class="form-inline pull-right" method="get">
            <div class="form-group">
                <select name="categy_id" class="form-control">
                    <option value="">请选择分类</option>
                    @foreach($rows as $row)
                        <option value="{{$row->id}}">{{$row->fenleiN}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">搜索</button>
        </form>
    </div>



    <table class="table">
        <tr>
            <th>ID</th>
            <th>商品名称</th>
            <th>商品头像</th>
            <th>分类</th>
            <th>价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
            <th>操作</th>
        </tr>
        @foreach($goods as $good)
        <tr>
            <td>{{$good->id}}</td>
            <td>{{$good->name}}</td>
            <td><img src="/{{$good->imgs}}" width="50"></td>
            <td>{{$good->fenleiN}}</td>
            <td>{{$good->money}}</td>
            <td>{{$good->xq}}</td>
            <td><?php if($good->is_on_sale==1){ echo "上架";}else{ echo "未上架";}?></td>
            <td>{{$good->llq}}</td>
            <td>
                <a href="ck/{{$good->id}}" class="btn btn-info">查看</a>
                <a href="edit/{{$good->id}}" class="btn btn-info">编辑</a>
                <a href="del/{{$good->id}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{--<div class="pull-right">--}}
        {{--{{$articles->links()}}--}}
    {{--</div>--}}
    {{$goods->links()}}

@endsection