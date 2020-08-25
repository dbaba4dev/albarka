
<!-- Modal-->
<div class="modal fade" id="modal_station" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" id="stationForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-fill-drip text-success mr-5"></i>New Filling Station</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter filling Station name" required/>
                    </div>
                    <div class="form-group ">
                        <label>Address:</label>
                        <input type="text" name="address" class="form-control form-control-solid" placeholder="Enter filling Station address" required/>
                    </div>
                    <div class="form-group row">
                       <div class="col-sm-8">
                           <label>Fuel:</label>
                           <select name="fuel_id" id="fuel" class="form-control form-control-solid" required>
                               <option value="" disabled selected>Select</option>
                               @foreach($fuels as $fuel)
                                <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                               @endforeach
                           </select>
                           <span class="form-text text-muted">Please Select Fuel from the list</span>
                       </div>
                        <div class="col-sm-4">
                            <label>Unit Price:</label>
                            <input type="text" name="price" class="form-control form-control-solid" placeholder="Enter Fuel price" required/>
                       </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" id="add_fillingStn" class="btn btn-primary font-weight-bold">Save</button>
                </div>
        </form>
        </div>
    </div>
</div>
