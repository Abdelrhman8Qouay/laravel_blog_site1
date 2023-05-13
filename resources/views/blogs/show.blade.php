



{{-- app Layout  --}}
@extends('layouts.app')

@section('titlePage', 'Show page')

@section('content')
    <div class="show_blog_page">

        <div class="container">
            <div class="bg-dark p-4 mb-3">
                {{-- header Layout  --}}
                @include('layouts.header')


                <hr class="my-2">
                <h1 class="text-white">{{ $blog->TITLE_BLOG }}</h1>
                <hr class="my-2">

                <div class="owner_up d-flex gap-5 bg-microsoft p-3">
                    <div class="image">
                        <img src="/images/avatars/{{ $blog->user->avatar }}" class="rounded-circle" width="50" height="50" alt="user avatar">
                    </div>
                    <div class="info flex-fill">
                        <h2 class="text-white">{{ $blog->user->name }} .@if(Auth::user()) <a href="#" class="followBtn">follow</a>@else <a href="{{ route('register') }}" class="followBtn">follow</a>@endif</h2>
                    </div>
                </div>
                {{-- for Date of post --}}
                <div class="row my-2 text-secondary fst-italic fw-light">
                    <div class="col-md-6">Created at: {{ date('d m Y h:i:s', strtotime($blog->created_at)) }}</div>
                    <div class="col-md-6">Updated at: {{ date('d m Y h:i:s', strtotime($blog->updated_at)) }}</div>
                </div>
                {{-- for the settings of post --}}
                @if(Auth::user() && Auth::user()->id == $blog->USER_ID)
                <div class="d-flex justify-content-between my-2 text-white fs-3">
                    <div class="col-left d-flex">
                        <div><ion-icon name="chatbubbles-outline"></ion-icon></div>
                        <div><ion-icon name="share-outline"></ion-icon></div>
                    </div>
                    <div class="col-right fs-3">
                        <div class="dropdown">
                            <button style="background: transparent;border:none;" class="px-3 text-white fs-3" type="button" id="postSettings" data-bs-toggle="dropdown" aria-expanded="false">
                                <ion-icon name="ellipsis-horizontal-outline"></ion-icon>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="postSettings">
                                <li><a class="dropdown-item fw-light" href="/blogs/{{ $blog->SLUG_BLOG }}/edit">Edit Post</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item fw-light" href="#">Hide Responses</a></li>
                                <li>
                                    <form action="/blogs/{{ $blog->SLUG_BLOG }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="dropdown-item text-danger fw-light">Delete Post</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

                <hr class="my-2">
                <h3 class="text-secondary" style="font-weight: 300">{{ $blog->DESC_BLOG }}</h3>
                <hr class="my-2">

                <div class="main_image w-100 my-4 text-center overflow-hidden">
                    <img src="/images/postImgs/{{ $blog->MAIN_IMG_BLOG }}" alt="main post image" style="max-height: 100%;max-width: 100%;object-fit:cover;">
                </div>

                <div class="post_content text-white" style="font-size: 15px;font-weight:300">
                    {{ $blog->POST_CONTENT_BLOG }}
                </div>
            </div>
        </div>

    </div>

@endsection
