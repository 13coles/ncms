<!-- ADD Assessment Modal -->
<div class="modal fade" id="assessmentModal" tabindex="-1" aria-labelledby="assessmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assessmentModalLabel">Add Assessment Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('assessment.add') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" class="form-control text-start" id="qualification" name="qualification"  placeholder="Enter Qualification" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="assessment_fee" class="form-label">Assessment Fee</label>
                        <input type="number" class="form-control text-start" id="assessment_fee" name="assessment_fee"  placeholder="Enter How muvh is the Assessment Fee" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="number_hours" class="form-label">Assessment Hours</label>
                        <input type="text" class="form-control text-start" id="number_hours" name="number_hours"  placeholder="Enter Total Hours of Assessment" required>
                    </div>

                    <div class="mb-3">
                        <label for=">number_candidates" class="form-label">Total Candidates Per Batch</label>
                        <input type="text" class="form-control text-start" id="number_candidates" name="number_candidates"  placeholder="Enter Total Number of Candidates Per Batch" required>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Save Changes</i></button>
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
