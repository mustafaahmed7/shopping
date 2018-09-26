@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>

                <a href="/admin/category/add" title="Add New"
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
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th>Category Url</th>

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->categoryTitle}}</td>
                                    <td>{{$category->categoryUrl}}</td>
                                    <td>
                                        <a href="/admin/category/update/{{$category->id}}"
                                           title="Edit" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i></a>
                                        <a href="/admin/category/delete/{{$category->id}}" type="button"
                                           title="Delete" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                @foreach($category->subCategory as $subCategory)
                                    <tr>
                                        <td>{{$subCategory->id}}</td>
                                        <td>{{$category->categoryTitle .">".$subCategory->categoryTitle}}</td>
                                        <td>{{$subCategory->categoryUrl}}</td>
                                        <td>
                                            <a href="/admin/category/update/{{$subCategory->id}}"
                                               title="Edit" class="btn btn-primary">
                                                <i class="fa fa-pencil"></i></a>
                                            <a href="/admin/category/delete/{{$subCategory->id}}"
                                               type="button"
                                               title="Delete" class="btn btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @foreach($subCategory->subCategory as $subSubCategory)
                                        <tr>
                                            <td>{{$subSubCategory->id}}</td>
                                            <td>{{$category->categoryTitle .">".
                                            $subCategory->categoryTitle.">".
                                            $subSubCategory->categoryTitle}}</td>
                                            <td>{{$subSubCategory->categoryUrl}}</td>
                                            <td>
                                                <a href="/admin/category/update/{{$subSubCategory->id}}"
                                                   title="Edit" class="btn btn-primary">
                                                    <i class="fa fa-pencil"></i></a>
                                                <a href="/admin/category/delete/{{$subSubCategory->id}}"
                                                   type="button"
                                                   title="Delete" class="btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach

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