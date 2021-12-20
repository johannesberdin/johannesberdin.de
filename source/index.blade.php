---
pagination:
  collection: posts
  perPage: 5
---

@extends('_layouts.master')

@section('body')
<div class="container">
  <div class="row">
    <div class="col-md-4">

      <h1>Hi</h1>
      <p>I'm Johannes Berdin, an entrepreneur, digital native and software engineer from <a href="https://www.saarlouis.de">Saarlouis</a>, Germany.</p>

      <h3>Get in touch</h3>

      <ul class="list-inline social-list">
        <li><a href="https://www.linkedin.com/in/johannesberdin/"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://github.com/johannesberdin"><i class="fa fa-github"></i></a></li>
        <li><a href="https://www.xing.com/profile/Johannes_Berdin"><i class="fa fa-xing"></i></a></li>
        <li><a href="https://www.instagram.com/johannesberdin/"><i class="fa fa-instagram"></i></a></li>
      </ul>

      <h3>Recent posts</h3>

      <ul class="article-list">
        @foreach ($posts as $post)
        <li><span class="article-date article-date-sm">{{ date('F j, Y', $post->date) }}</span><br/>
          <a href="{{ $post->getUrl() }}" class="article-link">{{ $post->title }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
