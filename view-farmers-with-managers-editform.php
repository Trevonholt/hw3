<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAnimalModal<?php echo $manager['animal_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editAnimalModal<?php echo $manager['animal_id']; ?>" tabindex="-1" aria-labelledby="editAnimalModalLabel<?php echo $manager['animal_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editAnimalModalLabel<?php echo $manager['animal_id']; ?>">Edit Animal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
            <div class="mb-3">
              <label for="iid<?php echo $manager['animal_id']; ?>" class="form-label">Farmer</label>
<?php
$farmerList=selectFarmerForInput();
$selectedFarmer=$manager['farmer_id'];
include "view-farmer-input-list.php";
?>
            </div>
            <div class="mb-3">
              <label for="bid<?php echo $manager['animal_id']; ?>" class="form-label">Breed</label>
              <input type="text" class="form-control" id="bid<?php echo $manager['animal_id']; ?>" name="bid<?php echo $manager['breed_id']; ?>">
            </div>
            <div class="mb-3">
              <label for="mid<?php echo $manager['animal_id']; ?>" class="form-label">Manager ID</label>
              <input type="text" class="form-control" id="mid<?php echo $manager['animal_id']; ?>" name="mid<?php echo $manager['manager_id']; ?>">
            </div>
            <div class="mb-3">
                <label for="type<?php echo $manager['animal_id']; ?>" class="form-label">Animal Type</label>
                <input type="text" class="form-control" id="type<?php echo $manager['animal_id']; ?>" name="type<?php echo $manager['type']; ?>">
             </div>
            <div class="mb-3">
              <label for="count<?php echo $manager['animal_id']; ?>" class="form-label">Animal Count</label>
              <input type="text" class="form-control" id="count<?php echo $manager['animal_id']; ?>" name="count<?php echo $manager['count']; ?>">
            </div>
            <input type="hidden" name="aid" value="<?php echo $manager['animal_id']; ?>">  
            <input type="hidden" name="actionType" value="edit">
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
