@if(session()->has('status'))
    <div class="alert alert-success" role="alert">{{session('status')}}</div>
@endif