<div style="margin: 20px;">
    <h1> Update Poll </h1>
    <div>
        <a href="{{route('admin.dashboard')}}" class="btn btn-info pull-right">All Polls</a>
        <a href="{{route('admin.add.poll')}}" class="btn btn-info pull-right">Add Polls</a>
    </div>

    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title"> Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title for poll">
        </div>

        <div class="form-group">
            <label for="date"> Start Date: </label>
            <input type="date" class="form-control" id="start date" name="start date">
        </div>

        <div class="form-group">
            <label for="title"> End Date </label>
            <input type="date" class="form-control" id="end date" name="end date">
        </div>

        <div class="form-group">
            <label for="title"> Description poll </label>
            <textarea class="form-control" name="description poll" id="description poll" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="title"> Image poll </label>
            <input type="file" class="form-control">
        </div>

        <input type="submit" class="btn btn-primary" value="Update Poll">
    </form>                         
</div>