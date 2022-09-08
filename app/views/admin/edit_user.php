<?php require_once(APPROOT . "/includes/header.php");?>
<div class="edit_user d-flex bg-light" style="height:100vh;">
    <?php include_once(APPROOT . "/includes/sidebar.php");?>
    <div class="w-100 p-3">
        <div class="d-flex justify-content-between">
            <h1>Edit user test</h1>
            <div class="d-flex align-items-center">
                <button id="backBtn" style="outline: none; border:none; background: none;">
                    <img src="<?php echo URLROOT?> /images/arrow-left-square-fill.svg" height="28"
                        style="opacity: 70%;">
                </button>
                <?php include_once(APPROOT . "/includes/logout_button.php");?>
            </div>
        </div>
        <form action="<?php echo URLROOT?>/admin/update_user" method="post" class="col-4 border p-3 rounded">
            <input type="text" name="user_id" id="user_id" value="<?php echo $data->user_id?>" hidden>
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $data->firstname?>"
                    class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $data->lastname?>"
                    class="form-control form-control-sm">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $data->email?>"
                    class="form-control form-control-sm">
            </div>
            <button type="submit" class="btn btn-sm btn-primary mt-3 col-12">Update</button>
        </form>
    </div>
</div>


<?php require_once(APPROOT . "/includes/footer.php");?>