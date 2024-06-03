<div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab" tabindex="0">
    <div class="container mt-4">
        <h1>Courses</h1>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCourseModal">Add New Course</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Number of Hours</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <th scope="row">{{ $course->id }}</th>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->num_hours }} Hours</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-sm btn-primary me-2">Edit</button>
                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        

        @include('staff.add')
    </div>
</div>
