<div style="margin: 20px;">
    <h1> Update Poll </h1>
    <div>
        <a href="{{route('admin.dashboard')}}" class="btn btn-info pull-right">All Polls</a>
        <a href="{{route('admin.add.poll')}}" class="btn btn-info pull-right">Add Polls</a>
    </div>

    @if(Session::has('message'))
        <div class="alert alert-success" role="alert"> {{Session::get('message')}} </div>
    @endif

    <form class="form-horizontal" wire:submit.prevent="updatePoll">
        @csrf
        <div class="form-group">
            <label for="title"> Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="title for poll" wire:model="title">
        </div>

        <div class="form-group">
            <label for="date"> Start Date: </label>
            <input type="date" class="form-control" id="start date" name="start date" wire:model="start_date">
        </div>

        <div class="form-group">
            <label for="title"> End Date </label>
            <input type="date" class="form-control" id="end date" name="end date" wire:model="end_date">
        </div>

        <div class="form-group">
            <label for="title"> Description poll </label>
            <textarea class="form-control" name="description poll" id="description poll" cols="20" rows="10" wire:model="poll_description"></textarea>
        </div>

        <div class="form-group">
            <label for="title"> New Image poll </label>
            <input type="file" class="form-control-file" name="new image" wire:model="newimage">
            @error('newimage') <p class="text-danger">{{$message}}</p> @enderror
            @if($newimage)
                <img src="{{$newimage->temporaryUrl()}}" width="60" alt="">
            @else
                <img src="{{asset('img')}}/{{$image}}" width="60" alt="">
            @endif
        </div>

        <input type="submit" class="btn btn-primary" value="Update Poll">
    </form>                         
</div>