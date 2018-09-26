@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">

            <div class="page-header">
                <div class="container-fluid">
                    <div class="pull-right">

                        <a href="/admin" data-toggle="tooltip" title="" class="btn btn-default"
                           data-original-title="Cancel"><i class="fa fa-reply"></i></a></div>
                    <h1>Mail</h1>

                </div>
            </div>
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-envelope"></i> Mail</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-store">From</label>
                                <div class="col-sm-10">
                                    <select name="From" id="input-store" class="form-control">
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-to">To</label>
                                <div class="col-sm-10">
                                    <select name="To" id="input-to" class="form-control">
                                        <option value="customer_all">All Customers</option>
                                        <option value="customer">Customers</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group to" id="to-customer" style="display: none;">
                                <label class="col-sm-2 control-label" for="input-customer"><span data-toggle="tooltip" title="" data-original-title="Autocomplete">Customer</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="customers" value="" placeholder="Customer" id="input-customer" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                                    <div id="customer" class="well well-sm" style="height: 150px; overflow: auto;"></div>
                                </div>
                            </div>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-subject">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Subject" value="" placeholder="Subject" id="input-subject" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-message">Message</label>
                                <div class="col-sm-10">
                                    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
                                    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
                                    <link href="{{asset('summernote/summernote-lite.css')}}" rel="stylesheet">
                                    <script src="{{asset('summernote/summernote-lite.js')}}"></script>
                                    <textarea id="summernote" name="Mail"></textarea>
                                </div>
                            </div>
                            <meta name="_token" content="{{ csrf_token() }}">
                        {{--<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->--}}

                        </form>
                        <button id="button-send" data-loading-text="Loading..." data-toggle="tooltip"
                                title="" class="btn btn-primary send-mail"
                                data-original-title="Send">
                            <i class="fa fa-envelope"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<script>
    //CKEDITOR.replace( 'editor' );
    ///$('#summernote').summernote();
    $("#input-to").change(function ()
    {
        var q = $("#input-to").val();
        if(q == 'customer'){
            $("#to-customer").toggle();
        }else{
            $("#to-customer").toggle();
        }
    });
</script>
<script>
    $('#summernote').summernote({
        height: 300
    });

</script>

<!-- /#wrapper -->
@include('admin.layouts.footer')