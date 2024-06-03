


    
            
    <div class="tab-pane fade" id="v-pills-courses" role="tabpanel" aria-labelledby="v-pills-courses-tab" tabindex="0">
        <div class="container mt-4">
            <h1>Courses</h1>
            <button type="button" class="btn btn-success mb-3">Add</button>
            <!-- Add this at the top of resources/views/users/course.blade.php -->
            @if(isset($courses))
            <p>Courses data is available.</p>
            @else
            <p>No data found.</p>
            @endif

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
                    @foreach($courses as $course)
                    <tr>
                        <td scope="row">{{ $course->id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->num_hours }}</td>
                        <td>{{ $course->description }}</td>
                        <td>
                            <!-- Edit Button -->
                            <button type="button" class="btn btn-sm btn-primary me-2">Edit</button>
                            <!-- Delete Button -->
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            @include('staff.add')
            @include('staff.update')
          
        </div>
    </div>


   
        
 
