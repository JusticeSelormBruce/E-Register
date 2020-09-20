
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
                  <h5 class="modal-title" id="exampleModalLongTitle {{$guid}}">Add New Polling Station</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="jumbotron bg-secondary  text-white">

                        <form action="{{route('p.s.d.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="ea"></label>
                                <select name="ea_id"  required class="form-control py-2">
                                        <option value="">Select Electoral Area</option>
                                        @foreach ($ea as $item)
                                        <option value="{{$item->id}}">{{$item->ea_name}} <span class="mx-2">({{$item->ps_code}})</span></option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group input-group-sm py-2">
                                <label for="code">Polling Station Code*</label>
                                <input type="text" class="form-control" required name="code" value="{{old('code' ?? '')}}">
                                <div class="text-danger">
                                    {{$errors->first('code')}}
                                </div>
                            </div>
                            <div class="form-group input-group-sm">
                                <label for="Name">Polling Station Name*</label>
                                <input type="text" class="form-control" required name="name" value="{{old('name' ?? '')}}">

                                <div class="text-danger">
                                    {{$errors->first('ea_name')}}
                                </div>
                            </div>

                            <div class="form-group input-group-sm">
                                <label for="no_voters">No of Voters*</label>
                                <input type="number" class="form-control" required name="no_voters" value="{{old('no_voters' ?? '')}}">

                                <div class="text-danger">
                                    {{$errors->first('no_voters')}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="mx-auto">
                                    <button class="btn btn-secondary" type="submit"><span class="mx-5">Save</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <a href="{{route('polling.station.list')}}" class="text-white">View All Polling Stations </a>
                        </div>
                  </div>
              </div>

          </div>
      </div>
  </div>

