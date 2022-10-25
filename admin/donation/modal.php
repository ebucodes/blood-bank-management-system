<script type="text/javascript" src="lga.min.js"></script>
<!-- View -->
<div class="modal fade" id="view<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body text-white">
                    <?php
                    $view = mysqli_query($conn, "SELECT * FROM donors WHERE id='" . $row['id'] . "'");
                    $viewRow = mysqli_fetch_array($view);
                    $dateCreated = $viewRow["created_at"];
                    //$dateDonated = $viewRow["donated_at"];
                    $created_at = date('F j, Y, g:i a', strtotime($dateCreated));
                    //$donation_date = date('F j, Y, g:i a', strtotime($dateDonated));
                    ?>
                    <form action="#" method="POST">
                        <!-- Name-->
                        <div class="form-group">
                            <label> Donor's Name </label>
                            <input type="text" value="<?php echo $viewRow['firstname'] . '&nbsp;' . $viewRow['lastname']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Age-->
                        <div class="form-group">
                            <label> Age </label>
                            <input type="text" value="<?php echo $viewRow['age']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Blood group-->
                        <div class="form-group">
                            <label> Weight </label>
                            <input type="text" value="<?php echo $viewRow['weight']; ?> kg" class="form-control" readonly>
                        </div>
                        <!-- Address-->
                        <div class="form-group">
                            <label> Address </label>
                            <input type="text" value="<?php echo $viewRow['address'] . ',&nbsp;' . $viewRow['state'] . ',&nbsp;' . $viewRow['lga']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Email Address-->
                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" value="<?php echo $viewRow['email']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Phone-->
                        <div class="form-group">
                            <label> Phone </label>
                            <input type="text" value="<?php echo $viewRow['phone']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Phone-->
                        <div class="form-group">
                            <label> Method of Identification </label>
                            <input type="text" value="<?php echo $viewRow['identification_type']; ?>" class="form-control" readonly>
                        </div>
                        <!-- Created At -->
                        <div class="form-group">
                            <label> Created At </label>
                            <input type="text" name="" class="form-control" value="<?php echo $created_at; ?>" readonly>
                        </div>
                    </form>
                </div>
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
                <h5 class="modal-title" id="exampleModalLabel"> Edit </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM donors WHERE id='" . $row['id'] . "'");
                $editRow = mysqli_fetch_array($edit);
                ?>
                <div class="container-fluid">
                    <form action="edit.php?id=<?php echo $editRow['id']; ?>" method="POST">
                        <!-- Role -->
                        <div class="form-group">
                            <label> Change volume (ml)</label>
                            <input type="text" name="volume" value="<?php echo $editRow['volume']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Change donation date</label>
                            <input type="date" name="donation_date" value="<?php echo $editRow['donation_date']; ?>" class="form-control" required>
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
                $del = mysqli_query($conn, "SELECT * FROM donors where id='" . $row['id'] . "'");
                $deleteRow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h4>
                        Are you sure to delete entry?
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