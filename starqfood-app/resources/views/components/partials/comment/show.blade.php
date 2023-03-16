@php
    $imageA = $comment->user->profile->image->url ?? URL::asset('image\anonimo.svg');
@endphp
<div class="card">
    <div class="card-header bg-dark text-light">
        <strong>{{ $comment->user->profile->name." ".$comment->user->profile->last_name}}</strong>
    </div>
    <div class="card-body">
        <div class="row d-flex flex-wrap align-items-center justify-content-start">
            <div class="col-auto">
                <img src="{{$imageA}}" class="rounded-circle" width="50" height="50"
                    alt="{{ $comment->user->username }}">
            </div>
            <div class="col-auto">
                <p>{{ $comment->commentary}}</p>
                <small>{{ $comment->created_at->format('d/m/Y H:i:s') }}</small>
            </div>
        </div>
    </div>
</div>
