<!-- EDIt Accreditation Modal -->
<div class="modal fade" id="acrreditationEditModal" tabindex="-1" aria-labelledby="#acrreditationModalEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="acrreditationModalEditLabel">Upadate Accreditation Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('accreditations.update', ['accreditation' => $accreditation->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="item_id" name="item_id" value="{{ $accreditation->id }}">
                    <div class="mb-3">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" class="form-control text-start" id="qualification" name="qualification"  required>
                    </div>
                
                    <div class="mb-3">
                        <label for="accreditation_number" class="form-label">Accreditation Number</label>
                        <input type="text" class="form-control text-start" id="accreditation_number" name="accreditation_number"  required>
                    </div>
                
                    <div class="mb-3">
                        <label for="validity" class="form-label">Validity</label>

                        <input type="date" class="form-control text-start" id="validity" name="validity"  required>

                       
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
