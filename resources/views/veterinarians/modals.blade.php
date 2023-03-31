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
