<!-- Edit/Create Course Modal -->
<div class="modal fade" id="updatecourseModal" tabindex="-1" aria-labelledby="updatecourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="courseModalLabel">Update Course Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('courses.update', ['id' => $course->id ?? '']) }}"id="updateCorseForm" method="POST">
                    @csrf
                    @method('POST') <!-- This will be dynamically changed to PUT for updates -->
                    <input type="hidden" id="course_id" name="course_id">

                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter course name" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="num_hours" class="form-label">Number of Hours</label>
                        <input type="number" class="form-control" id="num_hours" name="num_hours" placeholder="Enter number of hours" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter course description" required></textarea>
                    </div>
                
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save Course</button>
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
