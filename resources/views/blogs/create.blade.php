


{{-- app Layout  --}}
@extends('layouts.app')

@section('titlePage', 'Create blog')

@section('content')
    <div class="create_blog_page">

        <div class="container">
            <div class="head_create bg-dark p-4">
                {{-- header Layout  --}}
                @include('layouts.header')


                <hr class="my-3">
                <h1 class="text-white">CREATE YOUR POST</h1>
                <hr class="my-3">
            </div>

            <form class="my-5" method="POST" action="/blogs" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                    <label for="titleInput" class="form-label h2" style="font-size: 2rem">Title</label>
                    <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" style="font-size: 2rem" name="title" value="{{ old('title') }}" id="titleInput" placeholder="Title" >
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="descInput" class="form-label h4">Description (optional)</label>
                    <input type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') }}" id="descInput" placeholder="Description">
                    @error('desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="imageInput" class="form-label h4">Image Post (optional)</label>
                    <input type="file" class="form-control" name="image" id="imageInput" hidden>
                    <canvas id="imgCanva" style="display: none"></canvas>
                    <label for="imageInput" class="imgLabel form-control @error('image') is-invalid @enderror"><img src="/images/assets/empty-image.png" class="img-fluid" alt="image placeholder"></label>
                    @error('image')
                        <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row form-group mb-3">
                    <textarea class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" name="content" id="textArea" ></textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" value="Create Your Post" name="submit" class="btn btn-dark w-100 d-block mb-3">
            </form>
        </div>

    </div>

@endsection
