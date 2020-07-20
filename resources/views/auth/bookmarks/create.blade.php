@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク登録</div>

                <div class="card-body">
                    @include('auth.compornents.alert')
                    <form method="POST" action="{{ route('bookmarks.store') }}">
                        @csrf
                        @include('auth.bookmarks.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
