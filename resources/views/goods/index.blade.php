@extends("layouts.main")
@section("title","商品列表")
@section("content")
    <a href="/goods/add" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>商品名称</th>
            <th>分类</th>
            <th>价格</th>
            <th>商品详情</th>
            <th>是否上架</th>
            <th>浏览次数</th>
            <th>操作</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->fenleiN}}</td>
            <td>{{$row->money}}</td>
            <td>{{$row->xq}}</td>
            <td><?php if($row->is_on_sale==1){ echo "上架";}else{ echo "未上架";}?></td>
            <td>{{$row->llq}}</td>
            <td>
                <a href="ck/{{$row->id}}" class="btn btn-info">查看</a>
                <a href="edit/{{$row->id}}" class="btn btn-info">编辑</a>
                <a href="del/{{$row->id}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{--<div class="pull-right">--}}
        {{--{{$articles->links()}}--}}
    {{--</div>--}}

@endsection