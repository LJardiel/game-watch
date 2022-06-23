@extends('errors::minimal')

@section('title', __('Sin autorización'))
@section('code', '401')
@section('carita', ':0')
@section('message', __('¡Mario espera no lo arrojes!'))
@section('image', __('/errors/401.png'))