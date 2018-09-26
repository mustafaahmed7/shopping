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
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST"
                                      action="/admin/product/update"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="RoleId">
                                            <option value="{{$user->roles->id}}">
                                                {{$user->roles->roleName}}
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input class="form-control" name="UserName"
                                               placeholder="User Name"
                                                value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>User Email</label>
                                        <input class="form-control" name="UserName"
                                               placeholder="User Name"
                                               value="{{$user->email}}">
                                    </div>
                                    <input type="hidden" name="Id" value="{{ $user->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-default">Save</button>

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