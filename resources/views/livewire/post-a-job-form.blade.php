<section class="container pb-5">
    <form class="card" wire:submit.prevent="save">
        <div class="card-body p-lg-5">
            <div class="mb-3">
                @if (session()->has('newsletter-message'))
                    <div class="alert alert-success rounded-0 alert-dismissible fade show mt-3" role="alert">
                        {{ session('newsletter-message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="row align-items-center mb-4">
                <div class="col-lg-7">
                    <h3 class="h3 text-danger fw-700">First, tell us about the position</h3>
                </div>
                <div class="col-lg-5">
                    <p class="d-flex align-items-center m-0 w-100 justify-content-end">
                        <span class="me-2 fw-500">REQUIRED FIELDS</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </p>
                </div>
            </div>
            <div class="mb-3">
                <label for="job-title" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Job Title</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="text" wire:model="title"
                    class="form-control form-control-lg rounded-0 @error('title') is-invalid @enderror" id="job-title"
                    placeholder="Example: 'Senior Designer'. Titles must describe one position.">
                @error('title')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="job_category" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Category</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <select id="job_category" wire:model="category"
                        class="form-control form-control-lg rounded-0 @error('category') is-invalid @enderror">
                        <option value="design">Design</option>
                        <option value="full-stack-programmin">Full Stack Programming</option>
                        <option value="front-end-programming">Front End Programming</option>
                        <option value="back-end-programming">Back End Programming</option>
                        <option value="game-dev">Game Dev</option>
                        <option value="app-dev">App Dev</option>
                        <option value="customer-support">Customer Support</option>
                        <option value="devops-and-sysadmin">Devops and Sysadmin</option>
                        <option value="sales-and-marketing">Sales and Marketing</option>
                        <option value="management-and-finance">Management and Finance</option>
                        <option value="product">Product</option>
                        <option value="others">Others</option>
                    </select>
                    @error('category')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="job_types" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Job Types</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <select id="job_types" wire:model="type"
                        class="form-control form-control-lg rounded-0 @error('type') is-invalid @enderror">
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                        <option value="others">Others</option>
                    </select>
                    @error('type')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Is This Role Full Remote ?</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </div>
                <p class="m-0 text-muted mb-3 fs-15">
                    Fully remote means your future hire can work anywhere in the world without any location or time zone
                    restrictions!
                </p>
                <select id="fully_remote" wire:model="type"
                    class="form-control form-control-lg rounded-0 @error('fully_remote') is-invalid @enderror">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                @error('fully_remote')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="job_region" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Region( if not remote )</span>
                </label>
                <select id="job_region" wire:model="work_region"
                    class="form-control form-control-lg rounded-0 @error('work_region') is-invalid @enderror">
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Birgunj">Birgunj</option>
                    <option value="Bharatpur">Bharatpur</option>
                    <option value="Hetauda">Hetauda</option>
                    <option value="Dharan">Dharan</option>
                    <option value="Butwal">Butwal</option>
                    <option value="Dhangadi">Dhangadi</option>
                    <option value="Nepalgunj">Nepalgunj</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Kirtipur">Kirtipur</option>
                    <option value="Tulsipur">Tulsipur</option>
                    <option value="Bhimdatta">Bhimdatta</option>
                    <option value="Siddharthanagar">Siddharthanagar</option>
                    <option value="Birendranagar">Birendranagar</option>
                    <option value="Madhyapur Thimi">Madhyapur Thimi</option>
                    <option value="Dhankuta">Dhankuta</option>
                    <option value="Banepa">Banepa</option>
                    <option value="Rajbiraj">Rajbiraj</option>
                    <option value="Lahan">Lahan</option>
                    <option value="Inaruwa">Inaruwa</option>
                    <option value="Tansen">Tansen</option>
                    <option value="Damak">Damak</option>
                    <option value="Bhadrapur">Bhadrapur</option>
                    <option value="Other">Other ( Do not specify )</option>
                </select>
                @error('work_region')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="how_to_apply" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">How to Apply</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="text" wire:model="form_url"
                    class="form-control form-control-lg rounded-0 @error('form_url') is-invalid @enderror"
                    id="how_to_apply" placeholder="Application Form Url">
                @error('form_url')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div wire:ignore class="mb-3">
                <label for="job_description" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Job Description</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <textarea type="text" wire:model="job_description"
                    class="form-control form-control-lg rounded-0 @error('job_description') is-invalid @enderror"
                    id="job_description"></textarea>
                @error('job_description')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="row align-items-center my-5">
                <div class="col-12">
                    <h3 class="h3 text-danger fw-700">Tell Us More About Your Company</h3>
                    <p class="m-0 fs-20 fw-500"><strong>Have Job4u Account?</strong> Just Login, all other info will be
                        pulled in from your <strong>Profile</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label for="company_name" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Company Name</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <input type="text" wire:model="name" value="{{ $name }}"
                        class="form-control form-control-lg rounded-0 @error('name') is-invalid @enderror"
                        id="company_name" placeholder="Enter your company or organization's name.">
                    @error('name')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="company_hq" class="form-label d-flex align-items-center">
                        <span class="me-2 fs-20 fw-600">Company HQ</span>
                        <span class="badge bg-danger rounded-circle py-2"> </span>
                    </label>
                    <input type="text" wire:model="hq" value="{{ $hq }}" class="form-control form-control-lg rounded-0 @error('hq') is-invalid @enderror"
                        id="company_hq" placeholder="Where your company is officially headquartered.">
                    @error('hq')
                        <div class="text-danger fs-15">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="company_logo" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Logo</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="file" wire:model="logo" class="form-control form-control-lg rounded-0 @error('logo') is-invalid @enderror"
                    id="company_logo" placeholder="Your company logo will appear at the top of your listing.">
                @error('logo')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="company_website" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Company's Website URL</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <input type="text" wire:model="company_url"
                    class="form-control form-control-lg rounded-0 @error('company_url') is-invalid @enderror"
                    id="company_website" placeholder="Example: https://kitwosd.com/">
                @error('company_url')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div wire:ignore class="mb-3">
                <label for="company_description" class="form-label d-flex align-items-center">
                    <span class="me-2 fs-20 fw-600">Company Description</span>
                    <span class="badge bg-danger rounded-circle py-2"> </span>
                </label>
                <textarea type="text" wire:model="company_description"
                    class="form-control form-control-lg rounded-0 @error('company_description') is-invalid @enderror"
                    id="company_description">
                    {{ $company_description }}
                </textarea>
                @error('company_description')
                    <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-danger btn-lg rounded-0">Post Job</button>
            </div>
        </div>
    </form>
</section>

@section('scripts')
    <script>
        function forJobDescription() {
            ClassicEditor
                .create(document.querySelector('#job_description'), {
                    toolbar: {
                        items: [
                            'alignment',
                            'bold',
                            'fontBackgroundColor',
                            'fontFamily',
                            'fontSize',
                            'fontColor',
                            'italic',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'specialCharacters',
                            'strikethrough',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo',
                            'imageUpload',
                            'imageInsert',
                            'link'
                        ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side',
                            'linkImage'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableCellProperties',
                            'tableProperties'
                        ]
                    },
                    licenseKey: '',
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('job_description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forJobDescription();

        function forPageDescription() {
            ClassicEditor
                .create(document.querySelector('#company_description'), {
                    toolbar: {
                        items: [
                            'alignment',
                            'bold',
                            'fontBackgroundColor',
                            'fontFamily',
                            'fontSize',
                            'fontColor',
                            'italic',
                            'bulletedList',
                            'numberedList',
                            '|',
                            'outdent',
                            'indent',
                            '|',
                            'specialCharacters',
                            'strikethrough',
                            'blockQuote',
                            'insertTable',
                            'mediaEmbed',
                            'undo',
                            'redo',
                            'imageUpload',
                            'imageInsert',
                            'link'
                        ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side',
                            'linkImage'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells',
                            'tableCellProperties',
                            'tableProperties'
                        ]
                    },
                    licenseKey: '',
                })
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('company_description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
                });
        }
        forPageDescription();
    </script>
@stop
