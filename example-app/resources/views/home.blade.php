@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<!-- general form elements -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Forms</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="email" class="form-control" id="firstName" placeholder="Enter First Name">
                  </div>

                  <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="email" class="form-control" id="lastName" placeholder="Enter Last Name">
                  </div>

                  <div class="form-group">
                    <label for="Gender">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1">
                        <label class="form-check-label">Male</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Female</label>
                    </div>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Your Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                        <label>Favorite Color</label>
                        <select class="form-control">
                          <option>Red</option>
                          <option>Green</option>
                          <option>Blue</option>
                          <option>Black</option>
                          <option>White</option>
                        </select>
                      </div>

                  <div class="form-group">
                  <label for="address">address</label>
                  <input type="email" class="form-control" id="address" placeholder="Enter your address">
                  </div>
                  
                  <label for="music">What kind of music do you like?</label>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Rock</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Pop</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Jazz</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Blue</label>
                  </div>
                </div>


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection