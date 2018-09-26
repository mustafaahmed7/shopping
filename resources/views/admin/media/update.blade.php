@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Media
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                @foreach($medias as $media)
                                <form method="POST"
                                      action="/admin/media/update"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Media Title</label>
                                        <input class="form-control" name="Title"
                                               placeholder="Media Title"
                                        value="{{$media->Title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Media Alt</label>
                                        <textarea class="form-control"
                                                  name="Alt"
                                                  rows="3">{{$media->Alt}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Current Image</label>
                                        @if($media->Path != null)
                                            <img class="img-thumbnail"
                                                 style="width:250px"
                                                 src="{{asset('uploads/medias/'
                                                 .$media->Path)}}">
                                        @else
                                            <p>Not Found Image</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="Images[]" >
                                    </div>
                                    <input type="hidden" name="OldImage"
                                           value="{{'uploads/medias/'.$media->Path}}">
                                    <input type="hidden" name="id" value="{{$media->id}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-default">Save</button>
                                </form>
                             @endforeach
                            </div>

                            <div class="col-lg-6">

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#wrapper -->
</div>
@include('admin.layouts.footer')