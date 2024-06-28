<!-- Example Modal Structure -->
<div class="modal fade" id="eventsEditModal" tabindex="-1" aria-labelledby="eventsEditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventsEditModalLabel">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="eventsEditForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="event_id" id="event_id">

                    <div class="mb-3">
                        <label for="name" class="form-label">Event Title</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Event Title" required>
                    </div>

                    <div class="mb-3">
                        <label for="venue" class="form-label">Venue</label>
                        <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter Venue" required>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Location</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Location" required>
                    </div>

                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone Number</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter Telephone Number" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="start_time" class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time" required>
                    </div>

                    <div class="mb-3">
                        <label for="end_time" class="form-label">End Time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time" required>
                    </div>

                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>

                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editModal = document.getElementById('eventsEditModal');
        
        editModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            
            // Extract data attributes from the button
            var eventId = button.getAttribute('data-bs-event-id');
            var name = button.getAttribute('data-bs-name');
            var venue = button.getAttribute('data-bs-venue');
            var address = button.getAttribute('data-bs-address');
            var telephone = button.getAttribute('data-bs-telephone');
            var email = button.getAttribute('data-bs-email');
            var startTime = button.getAttribute('data-bs-start-time');
            var endTime = button.getAttribute('data-bs-end-time');
            var startDate = button.getAttribute('data-bs-start-date');
            var endDate = button.getAttribute('data-bs-end-date');
            
            // Populate modal form fields with the extracted data
            var modal = editModal;
            modal.querySelector('#event_id').value = eventId;
            modal.querySelector('#name').value = name;
            modal.querySelector('#venue').value = venue;
            modal.querySelector('#address').value = address;
            modal.querySelector('#telephone').value = telephone;
            modal.querySelector('#email').value = email;
            modal.querySelector('#start_time').value = startTime;
            modal.querySelector('#end_time').value = endTime;
            modal.querySelector('#start_date').value = startDate;
            modal.querySelector('#end_date').value = endDate;

            // Set form action dynamically
            var form = modal.querySelector('#eventsEditForm'); // Select the form element
            form.action = "/events/update/" + eventId; // Adjust the route as per your application's routes
        });
    });
</script>
