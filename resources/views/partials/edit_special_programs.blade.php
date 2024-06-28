<!-- EDIT Special Program Modal -->
<div class="modal fade" id="editSpecialProgramModal" tabindex="-1" aria-labelledby="editSpecialProgramModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSpecialProgramModalLabel">Edit Special Program</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editSpecialProgramForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="edit_program_image" class="form-label">Program Image</label>
                        <div id="edit-drop-area" class="border border-dashed border-3 rounded p-3 text-center">
                            <p>Drag & Drop your image here or click to select</p>
                            <input type="file" id="edit_program_image" name="program_image" class="form-control" accept="image/*" style="display: none;">
                        </div>
                        <img id="edit_preview" src="#" alt="Image Preview" class="img-fluid mt-3" />
                    </div>

                    <div class="mb-3">
                        <label for="edit_program_name" class="form-label">Program Name</label>
                        <input type="text" class="form-control text-start" id="edit_program_name" name="program_name" placeholder="Enter program name" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Description</label>
                        <input type="text" class="form-control text-start" id="edit_description" name="description" placeholder="Enter description" required>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Save </i></button>
                    </div>
                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

