@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>

                <a href="/admin/settings/slider/add" title="Add New"
                   class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </a>
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
                                <th>Slider Name</th>
                                {{--<th>Slider Content</th>--}}
                                <th>Product Url</th>
                                <th>Show</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td>{{$slider->sliderName}}</td>
                                    {{--<td>{{$slider->sliderContent}}</td>--}}
                                    <td>{{$slider->productUrl}}</td>
                                    <td>@if($slider->show==true)
                                        Active
                                            @else
                                        Not Active
                                        @endif</td>
                                    <td>
                                        @foreach($slider->media as $media)
                                        <img class="img-thumbnail"
                                             style="width:30%;"
                                             src="{{asset('uploads/medias/'.$media->Path)}}">
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="/admin/settings/slider/update/{{$slider->id}}"
                                           title="Edit" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i></a>
                                        <a href="/admin/settings/slider/delete/{{$slider->id}}" type="button"
                                           title="Delete" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
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