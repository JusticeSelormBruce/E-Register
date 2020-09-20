

<!-- Button trigger modal -->
<button type="button" class="btn text-primary  w-100" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small mx-3"> Add Polling Station List</span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle "></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron">
                    <form action="/datasheet" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group input-group-sm">
                        <label for="name">Polling Station*</label>
                    <select name="ps_id" id="" class="form-control" required>
                        <option value="">Select Polling Station</option>
                        @foreach ($ps as $item)
                        <option value="{{$item->id}}">{{$item->name}} <span class="mx-2">({{$item->code}})</span></option>

                        @endforeach
                    </select>

                    </div>
                     <div class="form-group input-group-sm">
                        <label for="name">Member List (.xcel)</label>
                        <br>
                     <label for=""> <input type="file" name="file">Upload File</label>
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

