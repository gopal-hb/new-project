<div class="modal fade" id="addevent" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #003049">
                <h5 class="modal-title" style="color: #f6f9ff">Add New location</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('eventop') }}" id="eventadd" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="event name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Description" class="form-label">Description <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="Description" id="Description"
                                placeholder="Description" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="Category" class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="Category" id="Category" class="form-select">
                                <option value="">Select Category</option>
                                @foreach ($category as $cate)
                                <option value="{{ $cate->id }}">{{ $cate->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Location" class="form-label">Location <span class="text-danger">*</span></label>
                            <select name="Location" id="Location" class="form-select">
                                <option value="">Select Location</option>
                                @foreach ($location as $loc)
                                <option value="{{ $loc->id }}">{{ $loc->location }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="Address" class="form-label">Address <span class="text-danger">*</span></label>
                            <select name="Address" id="Address" class="form-select">
                                <option value="">Select Address</option>
                                @foreach ($address as $add)
                                <option value="{{ $add->id }}">{{ $add->address }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="date" class="form-label">date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" name="date" id="date"
                                placeholder="date" required>
                        </div>
                        <div class="col-md-4">
                            <label for="time" class="form-label">time <span class="text-danger">*</span></label>
                            <input type="time" class="form-control" name="time" id="time"
                                placeholder="time" required>
                        </div>
                        <div class="col-md-4">
                            <label for="status" class="form-label">status <span class="text-danger">*</span></label><br>
                            <input type="radio" name="status" id="active" value="0" required> active
                            <input type="radio" name="status" id="Not_active" value="1" checked required> Not active
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="background-color: #003049"></div>
        </div>
    </div>
</div>

