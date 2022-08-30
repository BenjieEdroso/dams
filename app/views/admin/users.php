<?php require_once(APPROOT . "/includes/header.php");?>
<div class="p-3">
    <h1>Users</h1>
    <div class="d-flex">
        <button class="btn btn-sm btn-primary" id="createUserBtn" data-bs-toggle="modal"
            data-bs-target="#createUserModal">Create user</button>
        <form id="searchUserForm" method="post" class="col-3 mx-3">
            <input type="text" name="keyword" id="keyword" class="form-control form-control-sm"
                placeholder="Search user">
        </form>
    </div>
    <div class="users">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col"># Of Request</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $user) {?>
                <tr>
                    <td scope="row"><?php echo $user->user_id?></td>
                    <td><?php if(isset($user->request_count)) {echo $user->request_count;} else { echo "0"; };?></td>
                    <td><?php echo $user->firstname?></td>
                    <td><?php echo $user->lastname?></td>
                    <td><?php echo $user->email?></td>
                    <td>
                        <!-- <button data-bs-target="#editUserModal" data-bs-toggle="modal"
                            class="btn btn-sm btn-primary">Edit</button> -->
                        <a href="<?php echo URLROOT?>/admin/edit_user?user_id=<?php echo $user->user_id?>"
                            class="btn btn-sm btn-primary">Edit</a>
                        <button id="deleteBtn" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#confirmDeleteModal">Delete</button>
                        <!-- <a href="<?php echo URLROOT?>/admin/delete_user?user_id=<?php echo $user->user_id?>"
                            class="btn btn-sm btn-danger">Delete</a> -->
                        <div class="modal fade" id="confirmDeleteModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Are you sure to delete this user?</h5>
                                        <button data-bs-dismiss="modal" class="btn btn-sm btn-danger">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="<?php echo URLROOT?>/admin/delete_user?user_id=<?php echo $user->user_id?>">
                                            <button type="submit" class="btn btn-sm btn-primary">Yes</button>
                                            <button data-bs-dismiss="modal"
                                                class="btn btn-sm btn-secondary">Cancel</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="createUserModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-3">
                <div class="modal-header">
                    <h5>Insert new user</h5>
                    <button type="button" class="close btn btn-danger btn-sm" data-bs-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="<?php echo URLROOT?>/admin/create_user" method="post">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control form-control-sm ">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" name="birthdate" id="birthdate" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="usertype" hidden>User Type</label>
                            <input type="text" name="type" id="type" class="form-control form-control-sm" value="user"
                                hidden>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-sm btn-secondary col-12">Submit</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- <div class="modal fade" id="editUserModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Update user</h5>
                    <button class="btn btn-sm btn-danger" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control form-control-sm"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary col-12 mt-3">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div> -->

</div>

<?php require_once(APPROOT . "/includes/footer.php");?>