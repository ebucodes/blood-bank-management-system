<script type="text/javascript" src="lga.min.js"></script>
<!-- Add -->
<div class="modal fade text-white" id="add" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Add</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add.php" method="POST">
                    <!-- Name -->
                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label> Address </label>
                        <textarea name="address" class="form-control" placeholder="Enter address"></textarea>
                    </div>
                    <!-- State -->
                    <div class="form-group">
                        <label class="control-label">State</label>
                        <select onchange="toggleLGA(this);" name="state" id="state" class="form-control" required>
                            <option value="" selected="selected" disabled>Select state</option>
                            <option value="Abia">Abia</option>
                            <option value="Abuja">Abuja</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="AkwaIbom">AkwaIbom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>
                    </div>
                    <!-- Local Government -->
                    <div class="form-group">
                        <label class="control-label">LGA</label>
                        <select name="lga" id="lga" class="form-control select-lga" required>
                        </select>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label> Email Address </label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <!-- Phone Number -->
                    <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" name="phone" class="form-control" required>
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
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white" id="exampleModalCenteredScrollableTitle">View</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
                <?php
                $view = mysqli_query($conn, "SELECT * FROM banks WHERE id='" . $row['id'] . "'");
                $viewRow = mysqli_fetch_array($view);
                $dateCreated = $viewRow["created_at"];
                $created_at = date('F j, Y, g:i a', strtotime($dateCreated));
                ?>
                <form action="#" method="POST">
                    <!-- Name-->
                    <div class="form-group">
                        <label> Blood Bank Name </label>
                        <input type="text" value="<?php echo $viewRow['name']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Address-->
                    <div class="form-group">
                        <label> Address </label>
                        <input type="text" value="<?php echo $viewRow['address']; ?>" class="form-control" readonly>
                    </div>
                    <!-- State -->
                    <div class="form-group">
                        <label> State </label>
                        <input type="text" value="<?php echo $viewRow['state']; ?>" class="form-control" readonly>
                    </div>
                    <!-- LGA-->
                    <div class="form-group">
                        <label> Local Government Area </label>
                        <input type="text" value="<?php echo $viewRow['lga']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label> Email Address </label>
                        <input type="text" name="" value="<?php echo $viewRow['email']; ?>" class="form-control" readonly>
                    </div>
                    <!-- Name-->
                    <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" name="" value="<?php echo $viewRow['phone']; ?>" class="form-control" readonly>
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
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalCenteredScrollableTitle">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white">
                <?php
                $edit = mysqli_query($conn, "SELECT * FROM banks WHERE id='" . $row['id'] . "'");
                $editRow = mysqli_fetch_array($edit);
                $dateCreated = $editRow["created_at"];
                $created_at = date('F j, Y, g:i a', strtotime($dateCreated));
                ?>
                <form action="edit.php?id=<?php echo $editRow['id']; ?>" method="POST">
                    <!-- Name-->
                    <div class="form-group">
                        <label> Blood Bank Name </label>
                        <input type="text" name="name" value="<?php echo $editRow['name']; ?>" class="form-control" required>
                    </div>
                    <!-- Address-->
                    <div class="form-group">
                        <label> Address </label>
                        <input type="text" name="address" value="<?php echo $editRow['address']; ?>" class="form-control" required>
                    </div>
                    <!-- State -->
                    <div class="form-group">
                        <label> State </label>
                        <input type="text" name="state" value="<?php echo $editRow['state']; ?>" class="form-control" required>
                    </div>
                    <!-- LGA-->
                    <div class="form-group">
                        <label> Local Government Area </label>
                        <input type="text" name="lga" value="<?php echo $editRow['lga']; ?>" class="form-control" required>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label> Email Address </label>
                        <input type="text" name="email" value="<?php echo $editRow['email']; ?>" class="form-control" required>
                    </div>
                    <!-- Name-->
                    <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" name="phone" value="<?php echo $editRow['phone']; ?>" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.Edit -->

<!-- Delete -->
<div class="modal fade text-white" id="del<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                $del = mysqli_query($conn, "SELECT * FROM banks where id='" . $row['id'] . "'");
                $deleteRow = mysqli_fetch_array($del);
                ?>
                <div class="container-fluid">
                    <h4>
                        Are you sure to delete <strong><?php echo ucwords($deleteRow['name']); ?></strong> from the List.
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