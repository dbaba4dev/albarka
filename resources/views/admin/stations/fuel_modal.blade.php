
<!-- Modal-->
<div class="modal fade" id="modal_fuel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="" id="fuelForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="la la-oil-can text-success mr-5"></i>New Fuel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter Fuel name" required/>
                        <span class="form-text text-muted">Please enter the fuel name</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" id="add_fuel" class="btn btn-primary font-weight-bold">Save</button>
                </div>
        </form>
        </div>
    </div>
</div>
