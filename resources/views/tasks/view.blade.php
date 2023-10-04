<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>

    <section class="section">
        <div class="row justify-content-center mt-2">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Update Task
                  <a href="{{route('tasks.index')}}" class="btn btn-danger float-end">Back</a>
                </h5><br>
                <form class="row g-3" action="{{route('tasks.update',$tasks->id)}}" method="POST" enctype="multipart/form-data">
                  <div class="col-md-12">
                    @method('PUT')
                    @csrf
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" name="title" readonly class="form-control" value="{{$tasks->title}}" id="inputTitle">
                  </div>
                  <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Description</label>
                    <textarea type="text" readonly name="description" class="form-control" value="" id="inputDescription">{{$tasks->description}}</textarea>
                  </div>
                  <div class="text-start">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>