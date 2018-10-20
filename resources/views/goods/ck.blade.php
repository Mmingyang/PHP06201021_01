@extends("layouts.main")
@section("title","商品列表")
@section("content")
    {{--<a href="" class="btn btn-info">返回</a>--}}

    <input type="button" class="btn btn-info" value="返回" onclick="history.go(-1)">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>商品名称</th>
            <th>分类</th>
            <th>价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
        </tr>

            <tr>
                <td>{{$goods->id}}</td>
                <td>{{$goods->name}}</td>
                <td>{{$goods->fenleiN}}</td>
                <td>{{$goods->money}}</td>
                <td>{{$goods->xq}}</td>
                <td><?php if($goods->is_on_sale==1){ echo "上架";}else{ echo "未上架";}?></td>
                <td>{{$goods->llq}}</td>
            </tr>

    </table>

    {{--<div class="pull-right">--}}
    {{--{{$articles->links()}}--}}
    {{--</div>--}}

@endsection

