<!-- ADD Special Program Modal -->
<div class="modal fade" id="specialProgramModal" tabindex="-1" aria-labelledby="#specialProgramModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="specialProgramModalLabel">Add New Special Program Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('special_program.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="program_image" class="form-label">Program Image</label>
                        <div id="drop-area" class="border border-dashed border-3 rounded p-3 text-center">
                            <p>Drag & Drop your image here or click to select</p>
                            <input type="file" id="program_image" name="program_image" class="form-control" accept="image/*" style="display: none;">
                        </div>
                        <img id="preview" src="#" alt="Image Preview" class="img-fluid mt-3 d-none" />
                    </div>

                    <div class="mb-3">
                        <label for="program_name" class="form-label">Program Name</label>
                        <input type="text" class="form-control text-start" id="program_name" name="program_name" placeholder="Enter new program_name" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control text-start" id="description" name="description" placeholder="Enter new accreditation_number" required>
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
<!-- JavaScript for Drag-and-Drop Functionality -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dropArea = document.getElementById('drop-area');
        let logoInput = document.getElementById('program_image');
        let preview = document.getElementById('preview');
    
        dropArea.addEventListener('click', () => {
            logoInput.click();
        });
    
        logoInput.addEventListener('change', handleFiles);
    
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('bg-light');
        });
    
        dropArea.addEventListener('dragleave', (e) => {
            e.preventDefault();
            dropArea.classList.remove('bg-light');
        });
    
        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('bg-light');
            let dt = e.dataTransfer;
            let files = dt.files;
            handleFiles({ target: { files: files } });
        });
    
        function handleFiles(event) {
            let file = event.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        }
    });
    </script>
    