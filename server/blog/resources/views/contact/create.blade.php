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

                    create!

                    <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                        <input type="text" name="title" placeholder="タイトル">
                        <br>
                        <input type="text" name="name" placeholder="氏名">
                        <br>
                        <input type="email" name="email" placeholder="メールアドレス">
                        <br>
                        <input type="tedt" name="url" placeholder="URL">
                        <br>
                        <input type="checkbox" name="gender" placeholder="男" value="0">男
                        <input type="checkbox" name="gender" placeholder="女" value="1">女
                        <br>
                        <select name="age">
                            <option value="20">20代</option>
                            <option value="30">30代</option>
                            <option value="40">40代</option>
                        </select>
                        <br>
                        <textarea name="contact">
                        </textarea>
                        <br>
                        <input type="submit" value="送信">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
