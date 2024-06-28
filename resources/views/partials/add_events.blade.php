<!-- ADD events Modal -->
<div class="modal fade" id="eventsModal" tabindex="-1" aria-labelledby="eventsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventsModalLabel">Add New Schedule </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Event Title</label>
                        <input type="text" class="form-control text-start" id="name" name="name"  placeholder="Enter Event Title" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="venue" class="form-label">Venue</label>
                        <input type="text" class="form-control text-start" id="venue" name="venue"  placeholder="Enter Venue " required>
                    </div>
                
                    <div class="mb-3">
                        <label for="address" class="form-label">Location</label>
                        <input type="text" class="form-control text-start" id="address" name="address"  placeholder="Enter Location" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Telephone Number</label>
                        <input type="tel" id="telephone" name="telephone" placeholder="Enter number"  required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter @email.com"  required>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="time" id="start_time" name="start_time" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="end_time" class="form-label">End Time</label>
                        <input type="time" id="end_time" name="end_time" required>
                    </div>

                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start date</label>
                        <input type="date" id="start_date" name="start_date" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End date</label>
                        <input type="date" id="end_date" name="end_date" required>
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
