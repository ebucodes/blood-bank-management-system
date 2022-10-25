<!-- Add -->
<div class="modal fade text-white" id="add" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add New Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="POST">
                    <!-- First Name -->
                    <div class="form-group">
                        <label> First name </label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <!-- Last Name -->
                    <div class="form-group">
                        <label> Last name </label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <!-- Email address -->
                    <div class="form-group">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <!-- Role -->
                    <div class="form-group">
                        <label> Role </label>
                        <select class="form-select" name="role" required>
                            <option disabled>Select Laundry Category</option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                        </select>
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
                <h5 class="modal-title text-white" id="exampleModalCenteredScrollableTitle">View Laundry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
                <?php
                $view = mysqli_query($conn, "SELECT * FROM staff WHERE id='" . $row['id'] . "'");
                $viewRow = mysqli_fetch_array($view);
                $dateCreated = $viewRow["created_at"];
                $dateUpdated = $viewRow['updated_at'];
                $created_at = date('F j, Y, g:i a', strtotime($dateCreated));
                $updated_at = date('F j, Y, g:i a', strtotime($dateUpdated));
                ?>
                <form action="#" method="POST">
                    <!-- Name-->
                    <div class="form-group">
                        <label> Staff Name </label>
                        <input type="text" name="" value="<?php echo $viewRow['firstname'] . '&nbsp;' . $viewRow['lastname']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Name-->
                    <div class="form-group">
                        <label> Email Address </label>
                        <input type="text" name="" value="<?php echo $viewRow['email']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Name-->
                    <div class="form-group">
                        <label> Role </label>
                        <input type="text" name="" value="<?php echo $viewRow['role']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Created At -->
                    <div class="form-group">
                        <label> Created At </label>
                        <input type="text" name="" class="form-control" value="<?php echo $created_at; ?>" readonly>
                    </div>
                    <!-- Updated At -->
                    <div class="form-group">
                        <label> Updated At </label>
                        <input type="text" name="" class="form-control" value="<?php echo $updated_at; ?>" readonly>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Staff Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM staff WHERE id='" . $row['id'] . "'");
                $editRow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="edit.php?id=<?php echo $editRow['id']; ?>" method="POST">
                        <!-- Role -->
                        <div class="form-group">
                            <label> Old Role </label>
                            <input type="text" name="name" value="<?php echo $editRow['role']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> New Role </label>
                            <select class="form-select" name="role" required>
                                <option disabled>Select New Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Manager">Manager</option>
                                <option value="Staff">Staff</option>
                            </select>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Staff</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "SELECT * FROM staff where id='" . $row['id'] . "'");
                $deleteRow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h4>
                        Are you sure to delete <strong><?php echo ucwords($deleteRow['firstname'] . '&nbsp;' . $deleteRow['lastname']); ?></strong> as a Staff.
                    </h4>
                    <h4>
                        This method cannot be undone.
                    </h4>
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