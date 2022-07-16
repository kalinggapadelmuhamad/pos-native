<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addCategories"><i class="fas fa-fw fa-plus-square"></i> Categories</button>
<div class="modal fade" id="addCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Add Categories</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="CategoriesName">Categories Name</label>
                        <input type="text" name="categoriesName" class="form-control" id="CategoriesName" required>
                    </div>
                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="description" class="form-control" id="Description" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="categories-add">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>