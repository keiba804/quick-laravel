@extends('layouts.base')
@section('title','共通レイアウトの基本')
@section('main')
@component('components.alert',['type' => 'success'])
@slot('alert_title')
@endslot
コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
@endcomponent
@endsection