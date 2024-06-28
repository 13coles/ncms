
// accredition function to update
document.addEventListener('DOMContentLoaded', function() {
    var editModal = document.getElementById('acrreditationEditModal');
    editModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var itemId = button.getAttribute('data-bs-item-id');
        var qualification = button.getAttribute('data-bs-qualification');
        var accreditationNumber = button.getAttribute('data-bs-accreditation-number');
        var validity = button.getAttribute('data-bs-validity');
       

        var modal = editModal;
        modal.querySelector('#item_id').value = itemId;
        modal.querySelector('#qualification').value = qualification;
        modal.querySelector('#accreditation_number').value = accreditationNumber;
        modal.querySelector('#validity').value = validity;
      

        var form = document.getElementById('editForm');
        form.action = "/accreditation/" + itemId;
    });
});

// assessment function to update
document.addEventListener('DOMContentLoaded', function() {
    var editModal = document.getElementById('assessmentEditModal');
    editModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var itemId = button.getAttribute('data-bs-item-id');
        var qualification = button.getAttribute('data-bs-qualification');
        var assessmentFee = button.getAttribute('data-bs-assessment-fee');
        var numberHours = button.getAttribute('data-bs-number-hours');
        var numberCandidates= button.getAttribute('data-bs-number-candidates');
        

        var modal = editModal;
        modal.querySelector('#item_id').value = itemId;
        modal.querySelector('#qualification').value = qualification;
        modal.querySelector('#assessment_fee').value = assessmentFee;
        modal.querySelector('#number_hours').value = numberHours;
        modal.querySelector('#number_candidates').value = numberCandidates;
      

        var form = document.getElementById('editForm');
        form.action = "/assessment/" + itemId;
    });
});

// special program updates
document.addEventListener('DOMContentLoaded', function() {
    let editDropArea = document.getElementById('edit-drop-area');
    let editLogoInput = document.getElementById('edit_program_image');
    let editPreview = document.getElementById('edit_preview');
    let editSpecialProgramModal = document.getElementById('editSpecialProgramModal');

    // Event listener for opening edit modal
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', function() {
            let program = JSON.parse(this.dataset.program);

            // Populate the form with existing data
            document.getElementById('edit_program_name').value = program.program_name;
            document.getElementById('edit_description').value = program.description;
            editPreview.src = `/programs/special/${program.program_image}`;
            editPreview.classList.remove('d-none');

            // Set the form action to update the specific program
            let form = document.getElementById('editSpecialProgramForm');
            form.action = `/special-program/${program.id}`;

            // Show the modal
            let modal = new bootstrap.Modal(editSpecialProgramModal);
            modal.show();
        });
    });

    // Handle image preview
    editDropArea.addEventListener('click', () => {
        editLogoInput.click();
    });

    editLogoInput.addEventListener('change', handleFiles);

    editDropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        editDropArea.classList.add('bg-light');
    });

    editDropArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        editDropArea.classList.remove('bg-light');
    });

    editDropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        editDropArea.classList.remove('bg-light');
        let dt = e.dataTransfer;
        let files = dt.files;
        handleFiles({ target: { files: files } });
    });

    function handleFiles(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                editPreview.src = e.target.result;
                editPreview.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    }

    // Event listener for modal hide event
    editSpecialProgramModal.addEventListener('hidden.bs.modal', function () {
        // Reset form fields and image preview
        document.getElementById('editSpecialProgramForm').reset();
        editPreview.src = '#'; // Reset image preview
        editPreview.classList.add('d-none'); // Hide image preview
        editDropArea.classList.remove('bg-light'); // Reset drop area style
    });

    // Special program function to delete
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            
            if (confirm('Are you sure you want to delete this program?')) {
                this.closest('form').submit();
            }
        });
    });
});

function confirmDelete() {
    return confirm('Are you sure you want to delete this event?'); // This shows a browser-based confirmation dialog
}