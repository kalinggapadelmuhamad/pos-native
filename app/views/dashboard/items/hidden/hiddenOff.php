<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#hidden">Off</button>
<div class="modal fade" id="hidden" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content text-left">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Stock In</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="number" class="form-control" id="stockIn" name="stockHidden" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="items-hidden">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>