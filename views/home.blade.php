@extends('layouts.base')

@section('title', $documentObject['longtitle'] ?? $documentObject['pagetitle'] ?? evo()->getConfig('site_name'))

@section('content')
  <article class="content">
    @if(!empty($documentObject['content']))
      {!! $documentObject['content'] !!}
    @else
      <h1>{{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}</h1>
    @endif
  </article>
@endsection
