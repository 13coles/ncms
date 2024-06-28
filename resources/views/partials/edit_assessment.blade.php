<!-- EDIt Assessment Modal -->
<div class="modal fade" id="assessmentEditModal" tabindex="-1" aria-labelledby="assessmentModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assessmentModalEditLabel">Upadate Assessment Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('assessments.update', ['assessment' => $assessment->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="item_id" value="{{ $assessment->id }}">
                    <div class="mb-3">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="qualification" name="qualification" value="{{ $assessment->qualification }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="assessment_fee" class="form-label">Assessment Fee</label>
                        <input type="text" class="form-control" id="assessment_fee" name="assessment_fee" value="{{ $assessment->assessment_fee }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="number_hours" class="form-label">Assessment Hours</label>
                        <input type="text" class="form-control" id="number_hours" name="number_hours" value="{{ $assessment->number_hours }}" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="number_candidates" class="form-label">Total Candidates Per Batch</label>
                        <input type="text" class="form-control" id="number_candidates" name="number_candidates" value="{{ $assessment->number_candidates }}" required>
                    </div>
                
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
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
