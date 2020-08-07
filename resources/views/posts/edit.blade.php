@extends('adminlte.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">edit post {{$post->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/posts/ {{$post->id}}" method="POST">

              @method('put')
              
                <div class="card-body">
                  <div class="form-group">
                    <label for="title"> title </label>
                    <input class="form-control" id="title" name="title" placeholder="Enter email" type="email">
                  </div>
                  <div class="form-group">
                    <label for="body">body</label>
                    <input type="text" class="form-control" id="body" name="body" placeholder="boody" type="body">
                  </div>
                  
                  <div class="form-check">
                    <input class="form-check-input" id="exampleCheck1" type="checkbox">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">create</button>
                </div>
              </form>
            </div>