<div class="w-100 bg-light " style="height: 100vh;">
    <nav class="navbar navbar-expand-md navbar-light bg-white  mb-3 h-2 ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex align-items-center" id="navbarCollapse">
                <?php if ($_SERVER["REDIRECT_QUERY_STRING"] === 'url=admin/documents') { ?>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <form action="<?php echo URLROOT; ?>/documents/upload_file" method="post"
                        enctype="multipart/form-data">
                        <div class="input-group">
                            <input type="file" class="form-control" name="file[]" id="file" multiple>
                            <input type="submit" class="btn btn-outline-primary" value="Upload" id="submit">
                        </div>
                    </form>

                    <a class="btn btn-primary mx-3" href="<?php echo URLROOT; ?>/documents/search">Search</a>
                </ul>
                <?php }; ?>




            </div>
        </div>
    </nav>