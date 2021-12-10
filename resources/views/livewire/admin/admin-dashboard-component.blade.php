<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Polls
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                    {{-- @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>title</th>
                                    <th>description poll</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>answer</th>
                                    <th>Action</th>
                                    <th>status</th>
                                </tr>
                            <thead>
                            <tbody>
                                    <tr>
                                        <td>1</td> 
                                        <td>aaaa</td>
                                        <td>marvel</td>
                                        <td>alguma coisa</td>
                                        <td>14/10/2003</td>
                                        <td>15/10/2003</td>
                                        <td>thor, loki, america</td>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        <td>em andamento</td>
                                    </tr>
                            </tbody>
                        </table>
                        <a href="{{route('admin.add.poll')}}" class="btn btn-success pull-right">Add New Poll</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
