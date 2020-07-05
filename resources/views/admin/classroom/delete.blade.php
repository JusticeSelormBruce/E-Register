

<!-- Button trigger modal -->
<button type="button" class="btn text-danger  btn-sm " data-toggle="modal" data-target="#exampleModalLong{{$item->id}}d">
    <span class="small mx-3"> Delete</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$item->id}}d" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}d" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}d "></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
<div class="row">
    <div class="mx-auto">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
        <a href="{{route('classroom.delete',['id'=>$item->id])}}" class="btn btn-danger btn-sm">Delete</a>

    </div>
</div>

                  </div>
              </div>

          </div>
      </div>
  </div>

