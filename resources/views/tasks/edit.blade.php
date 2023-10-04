@extends('inc.tasks')
@section('content')
<section class="section">
  <div class="row justify-content-center mt-2">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Update Task
            <a href="index.php" class="btn btn-danger float-end">Back</a>
          </h5><br>
          <form class="row g-3" action="{{route('tasks.update',$tasks->id)}}" method="POST" enctype="multipart/form-data">
            <div class="col-md-12">
              @method('PUT')
              @csrf
              <label for="inputTitle" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" value="{{$tasks->title}}" id="inputTitle">
            </div>
            <div class="col-md-12">
              <label for="inputDescription" class="form-label">Description</label>
              <textarea type="text" name="description" class="form-control" value="" id="inputDescription">{{$tasks->description}}</textarea>
            </div>
            <div class="text-start">
              <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection