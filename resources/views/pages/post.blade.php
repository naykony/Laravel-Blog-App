@extends('app.index')

@section('content')
    <div class="container mt-5">
        <h2>{{ $post->title }}</h2>  <!-- نمایش عنوان پست -->
        <p>{{ $post->content }}</p>  <!-- نمایش محتوای پست -->
        <a href="{{ route('blog') }}" class="btn btn-secondary">بازگشت به لیست پست‌ها</a>  <!-- لینک بازگشت -->
    </div>
@endsection
