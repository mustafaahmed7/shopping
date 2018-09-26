@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>

                <a href="/admin/media/add" type="button" class="btn btn-success">Add Media</a>
                <h5></h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Medias
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Alt</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medias as $media)
                                <tr>
                                    <td>{{$media->id}}</td>
                                    <td>{{$media->Title}}</td>
                                    <td>{{$media->Alt}}</td>
                                    <td>
                                        <img class="img-thumbnail"
                                             style="width:30%;"
                                             src="{{asset('uploads/medias/'.$media->Path)}}">
                                    </td>
                                    <td>
                                        <a href="/admin/media/update/{{$media->id}}"
                                           type="button" class="btn btn-info">Update</a>
                                        <a href="/admin/media/delete/{{$media->id}}"
                                           type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@include('admin.layouts.footer')