@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn-primary" href="{{ route('contact.create') }}">新規登録</a>
                    index!
                    @foreach($contacts as $c)
                    {{ $c->id }}
                    {{ $c->name }}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
