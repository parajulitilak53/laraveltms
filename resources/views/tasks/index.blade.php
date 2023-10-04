<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
    @notifyCss
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <section class="section">
        <div class="row align-items-center justify-content-center mt-5">
          <div class="col-lg-6 justify-content-between">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">
                  Manage tasks
                  <a href="{{route('tasks.create')}}" class="btn btn-primary float-end">Add Tasks</a>
                </h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  @include('notify::components.notify')
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$task->title}}</td>
                      <td>{{$task->description}}</td>
                      <td><img src="{{asset('frontend-assets/img/pokhara.png')}}" alt=""></td>
                      <td>
                        <a class="btn-sm btn btn-primary" href="{{route('tasks.edit', $task->id)}}" role="button">Edit </a>
                        <a class=" btn-sm btn btn-info" href="{{route('tasks.show', $task->id)}}" role="button">View</a>
                        <!-- Modal trigger button -->
                        <button type="button" class="btn text-white btn-sm" data-bs-toggle="modal" data-bs-target="#modalId" style="background-color:red !important;">
                          delete
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Do you want to delete data??</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" name="submit" class="btn text-dark btn-sm">delete</button>
                                  <button type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        <!-- Optional: Place to the bottom of scripts -->
                        <script>
                          const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                        
                        </script>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div>
                  {{$tasks->links()}}
                </div>
                <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    
      @notifyJs
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>