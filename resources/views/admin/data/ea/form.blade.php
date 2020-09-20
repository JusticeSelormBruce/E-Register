
<?php
$guid = random_int(1234567890,9876543210);
?>
<!-- Button trigger modal -->
<button type="button" class="btn text-primary  " data-toggle="modal" data-target="#exampleModalLong{{$guid}}">
    <span class="small"> Add </span>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong{{$guid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$guid}}" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle {{$guid}}">Add New Electoral Area</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron bg-secondary  text-white">

                        <form action="{{route('e.a.d.store')}}" method="POST">
                            @csrf
                            <div class="form-group input-group-sm">
                                <label for="Name">Name*</label>
                                <input type="text" class="form-control" required name="ea_name" value="{{old('ea_name' ?? '')}}">

                                <div class="text-danger">
                                    {{$errors->first('ea_name')}}
                                </div>
                            </div>
                            <div class="form-group input-group-sm py-2">
                                <label for="code">Code*</label>
                                <input type="text" class="form-control" required name="ps_code" value="{{old('ps_code' ?? '')}}">
                                <div class="text-danger">
                                    {{$errors->first('ps_code')}}
                                </div>
                            </div>
                            <div class="form-group input-group-sm py-2">
                                <label for="description">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            <div class="text-danger">
                                {{$errors->first('description')}}
                            </div>
                        </div>
                            <div class="row">
                                <div class="mx-auto">
                                    <button class="btn btn-secondary" type="submit"><span class="mx-5">Save</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a href="{{route('electoral.area.list')}}" class="text-white">View All Electoral Areas</a>
                        </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

