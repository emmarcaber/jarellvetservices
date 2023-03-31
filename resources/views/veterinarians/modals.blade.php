<!-- Add Veterinarian Modal -->
<div class="modal fade" id="addVeterinarianModal" tabindex="-1" role="dialog" aria-labelledby="addVeterinarianModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVeterinarianModalLabel">Add Veterinarian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('veterinarians.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_info">Contact Info</label>
                        <input type="text" class="form-control" id="contact_info" name="contact_info" required>
                    </div>
                    <div class="form-group">
                        <label for="professional_qualifications">Professional Qualifications</label>
                        <input type="text" class="form-control" id="professional_qualifications" name="professional_qualifications" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Veterinarian Modal -->
<div class="modal fade" id="editVeterinarianModal" tabindex="-1" role="dialog" aria-labelledby="editVeterinarianModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editVeterinarianModalLabel">Edit Veterinarian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('veterinarians.update', $veterinarian->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="edit_name">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_contact_info">Contact Info</label>
                        <input type="text" class="form-control" id="edit_contact_info" name="contact_info" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_professional_qualifications">Professional Qualifications</label>
                        <input type="text" class="form-control" id="edit_professional_qualifications" name="professional_qualifications" required>
                    </div>
                    <input type="hidden" id="edit_id" name="id">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Veterinarian Modal -->
<div class="modal fade" id="deleteVeterinarianModal" tabindex="-1" role="dialog" aria-labelledby="deleteVeterinarianModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteVeterinarianModalLabel">Delete Veterinarian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this veterinarian?</p>
                <form action="{{ route('veterinarians.destroy', $veterinarian->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" id="delete_id" name="id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

