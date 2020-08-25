
<!-- Modal-->
<div class="modal fade" id="modal_ticket" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="" id="ticketForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-fill-drip text-success mr-5"></i>New Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group ">
                            <label>Collector:</label>
                            <select name="employee_id" id="employee_id" class="form-control form-control-solid" required>
                                <option value="" disabled selected>Select</option>
                                @foreach($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->first_name .' '. $employee->surname}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Plate No:</label>
                            <input type="text" name="plate_no" class="form-control form-control-solid" placeholder="Enter the plate no of the vehicle" required/>
                        </div>
                        <div class="col-sm-6 mt-10">
                            <input type="hidden" id="store" name="store">
                            <label class="checkbox">
                                <input type="checkbox" id="chkstore" class="form-control form-control-solid"/>
                                <span class="mr-5"></span>
                                Store
                            </label>
                        </div>
                    </div>
                    <div class="form-group row">
                       <div class="col-sm-6">
                           <label>Filling Station:</label>
                           <select name="station_id" id="station_id" class="form-control form-control-solid" required>
                               <option value="" disabled selected>Select</option>
                               @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                               @endforeach
                           </select>
                           <span class="form-text text-muted">Please Select filling station from the list</span>
                       </div>
                        <div class="col-sm-6">
                            <label>Fuel:</label>
                            <select name="fuel_id" id="fuel" class="form-control form-control-solid" required>
                                <option value="" disabled selected>Select</option>
                                @foreach($fuels as $fuel)
                                    <option value="{{$fuel->id}}">{{$fuel->name}}</option>
                                @endforeach
                            </select>
                            <span class="form-text text-muted">Please Select Fuel from the list</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" id="add_ticket" class="btn btn-primary font-weight-bold">Save</button>
                </div>
        </form>
        </div>
    </div>
</div>
