

{{-- app Layout  --}}
@extends('layouts.app')

@section('titlePage', 'A Blogs')

@section('content')
    <div class="blog_page">

        <div class="container">
            {{-- header Layout  --}}
            @include('layouts.header')


            <hr class="my-3">
            <h1 style="color: darkgrey">BLOG PAGE</h1>
            <hr class="my-3">

            <div class="contentShow text-white mb-5">

                @foreach ($blogs as $blog)
                    <a href="/blogs/{{ $blog->SLUG_BLOG }}">
                        <div class="bigCard">
                            <div class="image">
                                <img src="/images/postImgs/{{ $blog->MAIN_IMG_BLOG }}" class="card-img-top" alt="image post">
                            </div>
                            <div class="body">
                                <div class="author"><img src="/images/avatars/{{ $blog->user->avatar }}" alt="pers"> {{ $blog->user->name }}</div>
                                <div class="date">{{ date('d m Y h:i:s', $blog->upadated_at) }}</div>
                                <div class="title">{{ $blog->TITLE_BLOG }}</div>
                                <div class="desc">
                                    {{ $blog->DESC_BLOG }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
