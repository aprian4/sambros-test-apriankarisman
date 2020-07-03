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
                                

                                    <div class="table-responsive">
                                       <div> <a href="{{ URL::to('/formcompany' ) }}" class="btn btn-primary">Tambah Data</a>
                                       </div>
                                       <br>
                                       <br>
                                       
 
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Logo</th>
                                                <th>PICs</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($company as $g)
                                            <tr>
                                                <td>{{$g->name}}</td>
                                                <td>{{$g->phone}}</td>
                                                <td>{{$g->address}}</td>
                                                <td><img width="150px" src="{{ url('/data_file/'.$g->logo) }}"></td>
                                                <td>{{$g->pics}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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