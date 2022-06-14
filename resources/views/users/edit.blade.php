<?php
/*
* edit.blade.php
* blog2.0
* Created: 06, 14 2022
*@author Glenn G. Rudge <glenn@hyperwebdev.com>
*@package
*/

@extends("layouts.app")
@section("content")
    <form class="form-horizontal" action="{{ route("users.update") }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="col-8">
                <div class="form-group">
                    <label for="user">First Name:</label>
                    <input type="text" class="form-control" value="{{ $user->first_name }}" type="text"/>
                </div>
                <div class="form-group">
                    <label for="user">Last Name:</label>
                    <input type="text" class="form-control" value="{{ $user->last_name }}" type="text"/>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection