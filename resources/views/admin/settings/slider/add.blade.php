@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slider Add</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Slider
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST"
                                      action="/admin/settings/slider/add"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Slider Name</label>
                                        <input class="form-control" name="sliderName"
                                               placeholder="Slider Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Slider Content</label>
                                        {{--<textarea class="form-control" name="sliderContent"--}}
                                                  {{--placeholder="Slider Content"></textarea>
                                        <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>--}}
                                        <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                                        <link href="{{asset('summernote/summernote-lite.css')}}" rel="stylesheet">
                                        <script src="{{asset('summernote/summernote-lite.js')}}"></script>
                                        <textarea id="summernote" name="sliderContent"></textarea>
                                        <script>
                                            $('#summernote').summernote({
                                                height: 300
                                            });

                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumbotron</label>
                                        <input type="color" name="color"
                                               value="#e66465" />
                                    </div>
                                    <div class="form-group">
                                        <label>Product Url</label>
                                        <input class="form-control" name="ProductUrl"
                                               placeholder="/product/{?}">
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" name="Show" id="inlineCheckbox2" value="true" checked>
                                            <label for="inlineCheckbox2">Show Slider </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Images</label>
                                        @foreach($medias as $media)
                                            <div class="searchable-container">
                                                <div class="items col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                                    <div class="info-block block-info clearfix">
                                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                            <label class="btn btn-default" >
                                                                <div class="bizcontent">
                                                                    <input type="checkbox" name="Images[]"
                                                                           autocomplete="off"
                                                                           value="{{$media->id}}">
                                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                                    <img class="img-thumbnail"
                                                                         style="width:250px" src="{{asset('uploads/medias/'
                                                                .$media->Path)}}">
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-default">Save</button>
                                    </div>
                                </form>
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