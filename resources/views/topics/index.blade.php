@extends('layouts.app')
@section('title', '话题列表')

@section('content')
<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#" class="nav-link active">最后回复</a></li>
          <li class="nav-item"><a href="#" class="nav-link">最新发布</a></li>
        </ul>
      </div>

      <div class="card-body">
        {{-- 话题列表 --}}
        @include('topics._topic_list', ['topics' => $topics])
        {{-- 分页 --}}
        <div class="mt-5">
          {!! $topics->appends(Request::except('page'))->render() !!}
          {{-- 可以使用 append 方法附加查询参数到分页链接中，使URI中的的请求参数得到继承 --}}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar">
    @include('topics._sidebar')
  </div>
</div>
@endsection
