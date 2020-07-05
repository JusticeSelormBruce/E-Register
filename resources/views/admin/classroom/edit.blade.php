

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  btn-sm " data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small mx-3"> Edits</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}} "></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                    <form action="/edit-classroom" method="POST">
                    @csrf
                    <div>
                        <input type="hidden" name="id" value="{{$item->id}}">
                    </div>
                    <div class="form-group input-group-sm">
                        <label for="name">Class Name*</label>
                        <input type="text" class="form-control" required name="name" value="{{$item->name}}">
                    </div>
                     <div class="form-group input-group-sm">
                        <label for="name">Class Description*</label>
                       <textarea name="description" id="" cols="30" rows="10" class="form-control" required>
                           {{$item->description}}
                       </textarea>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                          <button class="btn btn-dark btn-sm" type="submit">  <span class="mx-5">Save</span></button>
                        </div>
                    </div>
                </form>
                  </div>
              </div>

          </div>
      </div>
  </div>

