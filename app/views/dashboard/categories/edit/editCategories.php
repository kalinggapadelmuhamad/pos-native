<button class="btn btn-sm btn-info mt-1" data-toggle="modal" data-target="#editCategories<?= $selCategoriesd->idCategories ?>"><i class="fas fa-fw fa-pen-square"></i></button>
<div class="modal fade" id="editCategories<?= $selCategoriesd->idCategories ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Categories</h6>
            </div>
            <form method="POST" action="">
                <?php require 'app/models/categories/selCategoriesbyId.php' ?>
                <div class="modal-body text-left">
                    <input type="hidden" value="<?= $selCategoriesIdd->idCategories ?>" name="idKategori">
                    <div class="form-group">
                        <label for="categoriesName">Categories Name</label>
                        <input type="hidden" name="categoriesNameOld" class="form-control" id="categoriesName" value="<?= $selCategoriesIdd->categoriesName ?>" required>
                        <input type="text" name="categoriesNameNew" class="form-control" id="categoriesName" value="<?= $selCategoriesIdd->categoriesName ?>" required>
                    </div>
                    <div class=" form-group">
                        <label for="formGroupExampleInput2">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="deskKat"><?= $selCategoriesIdd->description ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="categories-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>