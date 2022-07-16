<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addEmployes"><i class="fas fa-fw fa-plus-square"></i> Employes</button>
<div class="modal fade" id="addEmployes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Add Employes</h6>
            </div>
            <form method="POST" action="">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Full Name</label>
                            <input type="text" class="form-control" id="inputName" name="fullName" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAlamat">Address</label>
                            <input type="text" class="form-control" id="inputAlamat" name="address" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputJk">Gender</label>
                            <select name="gender" class="form-control" id="inputJk">
                                <option value="L" selected>Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="level">Level</label>
                            <select name="level" class="form-control" id="level">
                                <option value="admin" selected>Admin</option>
                                <option value="kasir">Kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputUsername">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="password" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i id="togglePassword" class="bi bi-eye-slash-fill" style="cursor: pointer;"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-success" type="submit" name="employes-add">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>