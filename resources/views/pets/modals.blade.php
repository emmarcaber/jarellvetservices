<!-- Add Pet Modal -->
<div class="modal fade" id="addPetModal" tabindex="-1" role="dialog" aria-labelledby="addPetModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPetModalLabel">Add Pet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pets.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="owner_id" class="form-label">Owner</label>
                        <select class="form-control" id="owner_id" name="owner_id" required>
                            @foreach ($pet_owners as $pet_owner)
                                <option value="{{ $pet_owner->id }}">{{ $pet_owner->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="species">Species</label>
                        <input type="text" class="form-control" id="species" name="species" required>
                    </div>
                    <div class="form-group">
                        <label for="breed">Breed</label>
                        <input type="text" class="form-control" id="breed" name="breed" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>


