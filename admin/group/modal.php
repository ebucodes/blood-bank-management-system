<!-- Add -->
<div class="modal fade text-white" id="add" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add New Laundry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="POST">
                    <!-- Blood group -->
                    <div class="form-group">
                        <label> Blood Group </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.Add -->

<!-- View -->
<div class="modal fade" id="view<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="exampleModalCenteredScrollableTitle">View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
                <?php
                $view = mysqli_query($conn, "SELECT * FROM blood_groups WHERE id='" . $row['id'] . "'");
                $viewRow = mysqli_fetch_array($view);
                $dateCreated = $viewRow["created_at"];
                $created_at = date('F j, Y, g:i a', strtotime($dateCreated));
                ?>
                <form action="#" method="POST">
                    <!-- Category Name-->
                    <div class="form-group">
                        <label> Blood Groups </label>
                        <input type="text" name="" value="<?php echo $viewRow['name']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Created At -->
                    <div class="form-group">
                        <label> Created At </label>
                        <input type="text" name="" class="form-control" value="<?php echo $created_at; ?>" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.View -->

<!-- Edit -->
<div class="modal fade text-white" id="edit<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM blood_groups WHERE id='" . $row['id'] . "'");
                $editRow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="update.php?id=<?php echo $editRow['id']; ?>" method="POST">
                        <!-- Category Name -->
                        <div class="form-group">
                            <label> Blood Group</label>
                            <input type="text" name="name" value="<?php echo $editRow['name']; ?>" class="form-control" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.Edit -->

<!-- Delete -->
<div class="modal fade text-white" id="del<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "SELECT * FROM blood_groups WHERE id='" . $row['id'] . "'");
                $deleteRow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h4>
                        Are you sure to delete <strong><?php echo ucwords($deleteRow['name']); ?></strong>.
                    </h4>
                    <h5>
                        This method cannot be undone.
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /.Delete -->