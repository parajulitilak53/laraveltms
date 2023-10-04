@extends('inc.tasks')
@section('content')
<section class="section">
  <div class="row justify-content-center mt-2">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Task
            <a href="index.php" class="btn btn-danger float-end">Back</a>
          </h5><br>
          <form class="row g-3" action="{{route('tasks.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
              <label for="inputTitle" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="inputTitle">
              <p>@error('title')
                {{ $message}}
              @enderror</p>
            </div>
            <div class="col-md-12">
              <label for="inputDescription" class="form-label">Description</label>
              <textarea type="text" name="description" class="form-control" id="textareaDescription"></textarea>
              <p>@error('description')
                {{ $message}}
              @enderror</p>
            </div>
            <div class="text-start">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection