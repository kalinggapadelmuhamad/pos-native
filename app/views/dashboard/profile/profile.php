<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../" class="text-success">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>

    <div class="row mb-3">
        <div class="col-xl-4 col-lg-5">
            <div class="card mb-4">
                <div class="card-body px-5 py-5">
                    <?php

                    //check gender for profile pict
                    if ($selProfiled->gender == "L") { ?>
                        <img class="mx-auto d-block img-profile rounded-circle border-bottom-success border-left-success" src="../assets/img/boy.png" style="max-width: 180px">
                    <?php } else { ?>
                        <img class="mx-auto d-block img-profile rounded-circle border-bottom-success border-left-success" src="../assets/img/girl.png" style="max-width: 180px">
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Profile Settings</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row">
                            <input type="hidden" name="idUser" value="<?= $selProfiled->idUser ?>">
                            <div class="form-group col-md-6">
                                <label for="inputFullname">Full Name</label>
                                <input type="text" name="fullName" class="form-control" id="inputFullname" value="<?= $selProfiled->fullName ?>"" required>
                            </div>
                            <div class=" form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail" value="<?= $selProfiled->email ?>"" required>
                            </div>
                        </div>
                        <div class=" form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputPhone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="inputPhone" value="<?= $selProfiled->phone ?>"">
                                </div>
                                <div class=" form-group col-md-3">
                                    <label for="inputUsername">Username</label>
                                    <input type="text" name="username" class="form-control" id="inputUsername" value="<?= $selProfiled->username ?>"" readonly>
                                </div>
                                <div class=" form-group col-md-3">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" value="<?= $selProfiled->passwordPlain ?>" id="password" required>
                                        <div class="input-group-append bg-success">
                                            <span class="input-group-text"><i id="togglePassword" class="bi bi-eye-slash-fill" style="cursor: pointer;"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="addressr">Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3" id="address" required><?= $selProfiled->address ?></textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputGender">Gender</label>
                                    <select name="gender" class="form-control" id="inputGender" required>
                                        <?php

                                        if ($selProfiled->gender == "L") { ?>
                                            <option value="L" selected>Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        <?php } else { ?>
                                            <option value="L">Laki - Laki</option>
                                            <option value="P" selected>Perempuan</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputLevel">Level</label>
                                    <input type="text" class="form-control" id="inputLevel" value="<?= $selProfiled->level ?>" readonly>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-md btn-success" name="profile-settings">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->



    <!-- Modal Logout -->

</div>