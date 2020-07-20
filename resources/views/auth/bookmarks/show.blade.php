@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ブックマーク詳細</div>

                <div class="card-body">
                   <table class='table'>
                       <thead>
                           <tr>
                               <th class="w-25">タイトル</th>
                               <td>{{ $bookmark->title }}</td>
                           </tr>
                           <tr>
                               <th>URL</th>
                               <td><a href="{{ $bookmark->url }}">{{ $bookmark->url }}</a></td>
                           </tr>
                           <tr>
                               <th>概要</th>
                               <td>{{ $bookmark->description }}</td>
                           </tr>
                           <tr>
                               <th>作成日</th>
                               <td>{{ $bookmark->created_at->format('Y年m月y日') }}</td>
                           </tr>
                       </thead>
                   </table>
                   <a href="{{ route('bookmarks.index') }}" class="btn btn-secondary">一覧へ戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
