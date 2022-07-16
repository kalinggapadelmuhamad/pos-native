<button class="btn btn-sm btn-info mb-1" data-toggle="modal" data-target="#editEmployes<?= $selEmployesd->idUser ?>"><i class="fas fa-fw fa-pen-square"></i></button>
<div class="modal fade" id="editEmployes<?= $selEmployesd->idUser ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Edit Employes</h6>
            </div>
            <form method="POST" action="">
                <?php require 'app/models/employes/selEmployesId.php'; ?>
                <div class="modal-body text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Full Name</label>
                            <input type="hidden" value="<?= $selEmployesIdd->idUser; ?>" name="idUser">
                            <input type="text" class="form-control" id="inputName" name="fullName" required value="<?= $selEmployesIdd->fullName; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required value="<?= $selEmployesIdd->email; ?>">
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" required value="<?= $selEmployesIdd->phone; ?>">
                        </div>
                        <div class=" form-group col-md-6">
                            <label for="inputAlamat">Address</label>
                            <input type="text" class="form-control" id="inputAlamat" name="address" required value="<?= $selEmployesIdd->address; ?>">
                        </div>
                    </div>
                    <div class=" form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk">Gender</label>
                            <select name="gender" class="form-control" id="inputJk">
                                <?php
                                if ($selEmployesIdd->gender == "L") { ?>
                                    <option value="L" selected>Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                <?php } else { ?>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P" selected>Perempuan</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="levelUser">Level</label>
                            <select name="level" class="form-control" id="levelUser">
                                <?php
                                if ($selEmployesIdd->level == "admin") { ?>
                                    <option value="admin" selected>Admin</option>
                                    <option value="kasir">Kasir</option>
                                <?php } else { ?>
                                    <option value="admin">Admin</option>
                                    <option value="kasir" selected>Kasir</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>New Password</label>
                            <div class="input-group">
                                <input type="hidden" name="passwordUserOld" value="<?= $selEmployesIdd->passwordPlain; ?>">
                                <input type="password" class="form-control" name="passwordUserNew" id="password1" onclick="hideShowPassword1()">
                                <div class="input-group-append">
                                    <span class="input-group-text" onclick="hideShowPassword1()"><i id="togglePassword1" class="bi bi-eye-slash-fill" style="cursor: pointer;"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="employes-update">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    //collect data by id
    var password1 = document.getElementById("password1");
    var toggler1 = document.getElementById("togglePassword1");

    //set event listener

    //hideShowPassword main
    function hideShowPassword1() {

        //chech password type
        if (password1.type == "password") {

            password1.setAttribute("type", "text");
            toggler.classList.remove("bi-eye-slash-fill");
            toggler.classList.add("bi-eye-fill");

        } else {

            password1.setAttribute("type", "password");
            toggler.classList.remove("bi-eye-fill");
            toggler.classList.add("bi-eye-slash-fill");

        }
    }
</script>