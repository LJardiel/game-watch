@extends('errors::minimal')

@section('title', __('Demasiadas solicitudes'))
@section('code', '429')
@section('carita', ':3')
@section('message', __('El servidor esta lleno de solicitudes, Kirby no te lo comas'))
@section('image', '/errors/429.png')
