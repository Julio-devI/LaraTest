<div style="margin: 20px;">
        <h1> Create Poll </h1>
        <div>
            <a href="{{route('admin.dashboard')}}" class="btn btn-info pull-right">All Polls</a>
        </div>

        @if(Session::has('message'))
            <div class="alert alert-success" role="alert"> {{Session::get('message')}} </div>
        @endif

        <form class="form-horizontal" wire:submit.prevent="createNewPoll">
            @csrf
            <div class="form-group">
                <label for="title"> Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title for poll" wire:model="title">
                @error('title') <p class="text-danger">{{$message}}</p> @enderror
            </div>
    
            <div class="form-group">
                <label for="date"> Start Date: </label>
                <input type="date" class="form-control" id="start date" name="start date" wire:model="start_date">
                @error('start_date') <p class="text-danger">{{$message}}</p> @enderror
            </div>
    
            <div class="form-group">
                <label for="title"> End Date </label>
                <input type="date" class="form-control" id="end date" name="end date" wire:model="end_date">
                @error('end_date') <p class="text-danger">{{$message}}</p> @enderror
            </div>
    
            <div class="form-group">
                <label for="title"> Description poll </label>
                <textarea class="form-control" name="description poll" id="description poll" cols="20" rows="10" wire:model="poll_description"></textarea>
                @error('poll_description') <p class="text-danger">{{$message}}</p> @enderror
            </div>
    
            <div class="form-group">
                <label for="title"> Image poll </label>
                <input type="file" class="form-control-file" name="image" wire:model="image">
                @error('image') <p class="text-danger">{{$message}}</p> @enderror
                @if($image)
                    <img src="{{$image->temporaryUrl()}}" width="60" alt="">
                @endif
            </div>

            <button type="submit" class="btn btn-success">Create Poll</button>
        </form>                         
</div>