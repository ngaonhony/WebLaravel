@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý phim</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="aleart">
                       {{ session{'status'}}}
                    </div>
                @endif

                 