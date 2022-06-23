@extends('errors::minimal')

@section('title', __('Prohibido'))
@section('code', '403')
@section('carita', ':s')
@section('message', __($exception->getMessage() ?: 'Cerrado por mantarrayas'))
@section('image', __('/errors/403.png'))