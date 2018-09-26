@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header">Tables</h1>
            </div>
            <div class="col-lg-4">
                <h1>
                    <a href="/admin/category"
                       title="Cancel"
                       class="btn btn-default">
                       <i class="fa fa-reply"></i>
                    </a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="post" action="/admin/category/add">
                                    <div class="form-group">
                                        <label>Selects</label>
                                        <select class="form-control" name="Id">
                                            <option value="">Select</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->categoryTitle}}</option>

                                                @foreach($category->subCategory as $subCategory)
                                                    <option value="{{$subCategory->id}}">
                                                        {{$category->categoryTitle}}
                                                        ->
                                                        {{$subCategory->categoryTitle}}
                                                    </option>

                                                    @foreach($subCategory->subCategory as $subsubCategory)
                                                        <option value="#">
                                                            {{$category->categoryTitle}}
                                                            ->
                                                            {{$subCategory->categoryTitle}}
                                                            ->
                                                            {{$subsubCategory->categoryTitle}}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach

                                        </select>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input class="form-control" name="categoryTitle"
                                               placeholder="Category Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Url</label>
                                        <input class="form-control" name="categoryUrl"
                                               placeholder="Category Url">
                                    </div>
                                    <button type="submit" class="btn btn-primary"
                                            title="Save">
                                        <i class="fa fa-save"></i></button>

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