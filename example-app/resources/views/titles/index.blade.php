@extends('layouts.default')

@section('title', 'Titles')

@section('content')

  <div class="card-header">
    <h1 class="card-title">SE CAMP</h1>
  </div>
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Forms</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">คำนำหน้าชื่อ</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="เช่น นาย นาง นางสาว อื่นๆ">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" checked class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">ใช้งาน</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



              <div class="card-header">
                <h3 class="card-title">ผลลัพธ์</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>คำนำหน้าชื่อ</th>
                      <th>สถานะการใช้งาน</th>
                      <th style="width: 40px">เครื่องมือ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Clean database</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Cron job running</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Fix and squish bugs</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
@endsection