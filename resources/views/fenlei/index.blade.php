@extends("layouts.main")
@section("title","分类列表")
@section("content")
    <a href="/fenlei/add" class="btn btn-info">添加</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>分类名称</th>
            <th>操作</th>
        </tr>
        @foreach($fenleis as $fenlei)
        <tr>
            <td>{{$fenlei->id}}</td>
            <td>{{$fenlei->fenleiN}}</td>
            <td>
                <a href="edit/{{$fenlei->id}}" class="btn btn-info">编辑</a>
                <a href="del/{{$fenlei->id}}" class="btn btn-info">删除</a>
            </td>
        </tr>
        @endforeach

    </table>

    {{--<div class="pull-right">--}}
        {{--{{$articles->links()}}--}}
    {{--</div>--}}

@endsection
