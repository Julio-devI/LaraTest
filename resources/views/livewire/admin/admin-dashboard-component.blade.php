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
                                @foreach ($npolls as $npoll)
                                    <tr>
                                        <td>{{$npoll->id}}</td> 
                                        <td><img src="{{asset('images/polls')}}/{{$npoll->image}}" width="60" alt=""></td>
                                        <td>{{$npoll->title}}</td>
                                        <td>{{$npoll->poll_description}}</td>
                                        <td>{{$npoll->start_date}}</td>
                                        <td>{{$npoll->end_date}}</td>
                                        <td>thor, loki, america</td>
                                        <td>
                                            <a href="{{route('admin.edit.poll',['poll_id'=>$npoll->id])}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                            <a href="#" style="margin-left:10px;" 
                                            wire:click.prevent="deletePoll({{$npoll->id}})"
                                            onclick="confirm('Are you sure, you want to delete this product ?') || event.stopImmediatePropagation()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        @if (strtotime(date('Y/m/d')) < strtotime($npoll->end_date) and strtotime(date('Y/m/d')) > strtotime($npoll->start_date))
                                            <td>in progress</td>
                                        @elseif(strtotime(date('Y/m/d')) < strtotime($npoll->end_date) and strtotime(date('Y/m/d')) < strtotime($npoll->start_date))
                                            <td>not started</td>
                                        @else
                                            <td>finished</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('admin.add.poll')}}" class="btn btn-success pull-right">Add New Poll</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
