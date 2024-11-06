@extends('layouts.create-edit')


@section('page-title','Edit')

@section('nav-title', 'Edit')


@section('form-route')

@endsection

@section('form-method')

{{method_field('PUT')}}

@endsection

@section('submit-btn-text', 'send')

@section('reset-btn-text','reset')
