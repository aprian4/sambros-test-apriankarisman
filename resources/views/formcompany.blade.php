@extends('master')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Company's Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div>
                    <div class="panel panel-default">
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div>
                                <div> <a href="{{ URL::to('/company' ) }}" class="btn btn-primary">Back</a>
                                       </div>
                                       <br>
                                       <br>
                                <div>
                                    @if(count($errors) > 0)
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }} <br/>
                                            @endforeach
                                        </div>
                                        @endif
                         
                                        <form action="{{URL('/company/proses')}}" method="POST" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                         
                                            <div class="form-group">
                                                <b>Name</b>
                                                <input class="form-control" name="name"></input>
                                            </div>
                         
                                            <div class="form-group">
                                                <b>Phone</b>
                                                <input class="form-control" name="phone"></input>
                                            </div>
                         
                                            <div class="form-group">
                                                <b>Address</b>
                                                <input class="form-control" name="address"></input>
                                            </div>
                         
                         
                                            <div class="form-group">
                                                <b>Logo</b><br/>
                                                <input type="file" name="logo">
                                            </div>
                         
                                            <div class="form-group">
                                                <b>PICS</b>
                                                <input class="form-control" name="pics"></input>
                                            </div>
                         
                                            <input type="submit" value="Simpan" class="btn btn-primary">
                                        </form>

                                </div>
                                
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
@endsection