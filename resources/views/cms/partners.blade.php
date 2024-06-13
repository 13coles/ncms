@include('cms')
<div class="container main-content">
    <div class="container ms-5">
        <div class="container ms-5 p-5">
            <div class="container">
                <h2 class="section-title text-center mb-2">OUR PARTNERS</h2>
                <form action="{{ route('partners.delete') }}" method="POST" id="deletePartnersForm">
                    @csrf
                    @method('DELETE')
                    <div id="partnersCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($partners->chunk(3) as $chunk)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <div class="row">
                                    @foreach($chunk as $partner)
                                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                        <div class="product-box border border-secondary p-3">
                                            <input class="form-check-input mt-0 float-end" type="checkbox" name="selected_partners[]" value="{{ $partner->id }}">
                                            <a href="{{ $partner->link }}" target="_blank">
                                                <img src="{{ asset('uploads/partner-logos/' . $partner->logo) }}" class="img-fluid mb-2 partner-logo" alt="Partner Logo">
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#partnerModal">Add</button>
                        <button type="submit" class="btn btn-danger me-2" onclick="return confirm('Are you sure you want to delete selected partners?')">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Update Modal -->
<div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="partnerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="partnerModalLabel">Add Partner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data" id="updatePartnersForm">
                    @csrf
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <div id="drop-area" class="border border-dashed border-3 rounded p-3 text-center">
                            <p>Drag & Drop your image here or click to select</p>
                            <input type="file" id="logo" name="logo" class="form-control" accept="image/*" style="display: none;">
                        </div>
                        <img id="preview" src="#" alt="Image Preview" class="img-fluid mt-3 d-none" />
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">URL Link</label>
                        <input type="text" class="form-control" id="link" name="link" placeholder="Enter URL Link" required>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Drag-and-Drop Functionality -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    let dropArea = document.getElementById('drop-area');
    let logoInput = document.getElementById('logo');
    let preview = document.getElementById('preview');

    dropArea.addEventListener('click', () => {
        logoInput.click();
    });

    logoInput.addEventListener('change', handleFiles);

    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('bg-light');
    });

    dropArea.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropArea.classList.remove('bg-light');
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('bg-light');
        let dt = e.dataTransfer;
        let files = dt.files;
        handleFiles({ target: { files: files } });
    });

    function handleFiles(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    }
});
</script>
