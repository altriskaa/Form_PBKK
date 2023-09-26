@extends('index')
@section('content')
<h1>Your submitted response</h1> 
@foreach ($results as $key => $result)
@if ($key === 'upload')
<div class="">
    <img src="{{ asset('storage/images/'.$result) }}" class="mx-auto" style="max-width: 500px; height: auto;">
</div>
@else
<div class="mt-3">
    <p class="text-muted">
        {{ $key }} : {{ $result }}
    </p>
</div>
@endif
@endforeach
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@endsection