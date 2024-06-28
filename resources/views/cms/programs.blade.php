@include('cms')
<link href="{{ asset('css/tesda_acc.css') }}" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">

<div class="container main-content">
    <div class="container ms-5">
        <div class="container main-content mt-5">
            <div class="container-inside ms-5 justify-content-center">

                <h1 class="text-center text-success mb-3 fw-bold">TESDA Accredited Competency Assessment Center</h1>
                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#acrreditationModal"> <i class="fas fa-plus add-icon"></i></button>

                <!-- Accreditation Table -->
                <table id="accreditationTable" class="table table-striped table-bordered mb-5">
                    <thead>
                        <tr>
                            <th>Qualification</th>
                            <th>Accreditation Number</th>
                            <th>Validity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($accreditations as $accreditation)
                        <tr>
                            <td>{{ $accreditation->qualification }}</td>
                            <td>{{ $accreditation->accreditation_number }}</td>
                            <td>{{ date('M d, Y', strtotime($accreditation->validity)) }}</td>
                            <td>
                                <!-- Edit Button -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#acrreditationEditModal"
                                    data-bs-accreditation-id="{{ $accreditation->id }}"
                                    data-bs-qualification="{{ $accreditation->qualification }}"
                                    data-bs-accreditation-number="{{ $accreditation->accreditation_number }}"
                                    data-bs-validity="{{ date('Y-m-d', strtotime($accreditation->validity)) }}">
                                    <i class="fas fa-pencil-alt edit-icon"></i>
                                </button>

                                <form action="{{ route('accreditations.destroy', ['accreditation' => $accreditation->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this accreditation?')">
                                        <i class="fas fa-trash delete-icon"></i>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Assessment Table -->
                <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#assessmentModal"> <i class="fas fa-plus add-icon"></i></button>
                <table id="assessmentTable" class="table table-striped table-bordered mb-5">
                    <thead>
                        <tr>
                            <th>Qualification</th>
                            <th>Assessment Fee</th>
                            <th>No. of Assessment Hours</th>
                            <th>Total No. of Candidates per Assessment/Batch</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessments as $assessment)
                        <tr>
                            <td>{{ $assessment->qualification }}</td>
                            <td>Php {{ number_format($assessment->assessment_fee, 2) }}</td>
                            <td>{{ $assessment->number_hours }}</td>
                            <td>{{ $assessment->number_candidates }}</td>
                            <td>
                                <!-- Edit Button -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#assessmentEditModal"
                                    data-bs-data-id="{{ $assessment->id }}"
                                    data-bs-qualification="{{ $assessment->qualification }}"
                                    data-bs-assessment-fee="{{ $assessment->assessment_fee }}"
                                    data-bs-number-hours="{{ $assessment->number_hours }}"
                                    data-bs-number-candidates="{{ $assessment->number_candidates }}">
                                    <i class="fas fa-pencil-alt edit-icon"></i>
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('assessments.destroy', ['assessment' => $assessment->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this assessment?')">
                                        <i class="fas fa-trash delete-icon"></i>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

              
                <!-- Upcoming Schedule Section -->
                <h1 class="text-center text-success mt-5 fw-bold">UPCOMING SCHEDULE</h1>
                <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#eventsModal">
                    <i class="fas fa-plus add-icon"></i>
                </button>
                <div id="schedule-container" class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                    @foreach ($events as $event)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h3 class="card-title mb-0">{{ \Carbon\Carbon::parse($event->start_date)->format('F j') }}-{{ \Carbon\Carbon::parse($event->end_date)->format('j, Y') }}</h3>
                                        <p class="card-text"><strong>{{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }} - {{ \Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</strong></p>
                                    </div>
                                    <div class="text-end">
                                        <!-- Edit Button -->
                                        <button type="button" class="btn btn-warning edit-event" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#eventsEditModal"
                                            data-bs-event-id="{{ $event->id }}"
                                            data-bs-event-name="{{ $event->name }}"
                                            data-bs-event-venue="{{ $event->venue }}"
                                            data-bs-event-address="{{ $event->address }}"
                                            data-bs-event-telephone="{{ $event->telephone }}"
                                            data-bs-event-email="{{ $event->email }}"
                                            data-bs-event-start-date="{{ $event->start_date }}"
                                            data-bs-event-end-date="{{ $event->end_date }}"
                                            data-bs-event-start-time="{{ $event->start_time }}"
                                            data-bs-event-end-time="{{ $event->end_time }}">
                                            <i class="fas fa-pencil-alt edit-icon"></i>
                                        </button>
                                        
                                        
                                        <!-- Delete Form -->
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline" id="deleteEventForm">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete();">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        
                                    </div>
                                </div>
                                <p class="card-text fw-bold">{{ $event->name }}</p>
                                <p class="card-text">{{ $event->venue }}<br>{{ $event->address }}</p>
                                <p class="card-text">Telephone: {{ $event->telephone }}<br>Email: {{ $event->email }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                


                {{-- 3rd card --}}
                <h1 class="text-center text-success mt-5 fw-bold">SPECIAL PROGRAMS</h1>
                <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#specialProgramModal"> <i class="fas fa-plus add-icon"></i></button>
  
                <div id="schedule-container" class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                    @foreach ($special_programs as $program)
                    <div class="card">
                        <img src="{{ asset('programs/special/' . $program->program_image) }}" class="card-img-top" alt="{{ $program->program_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $program->program_name }}</h5>
                            <p class="card-text">{{ $program->description }}</p>
                            <div id="cardContent" class="additional-content d-none">
                                <p>Additional content that is initially hidden.</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn btn-primary read-more">Read More</a>
                                <div>
                                    <button type="button" class="btn btn-warning me-2 edit-button" data-program="{{ json_encode($program) }}"><i class="fas fa-pencil-alt"></i></button>
                                    <form action="{{ route('special-programs.destroy', $program->id) }}" method="POST" class="delete-form d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-button"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                

                
                
                {{-- modals --}}
                @include('partials.add_accreditation')
                @include('partials.add_special_program')
                @include('partials.add_assessment')
                @include('partials.add_events')
                @include('partials.edit_events')
                @include('partials.edit_accreditation')
                @include('partials.edit_assessment')
                @include('partials.edit_special_programs')

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
