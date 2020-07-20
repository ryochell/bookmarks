@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク編集</div>

                <div class="card-body">
                    @include('auth.compornents.alert')
                    <form method="POST" action="{{ route('bookmarks.update', $bookmark) }}">
                        @method('PUT')
                        @csrf
                        @include('auth.bookmarks.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
