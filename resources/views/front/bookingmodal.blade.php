<div class="modal fade" id="booknow" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #003049">
                <h5 class="modal-title" style="color: #f6f9ff">Book Now</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('booknow') }}" id="booknowfrom"
                    novalidate>
                    @csrf
                    <input type="hidden" name="eventid" id="id">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="eventname" class="form-label">event name <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="eventname" id="eventname"
                                placeholder="event name" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label">name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="name"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="email" class="form-label">email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">phone <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="phone" id="phone" maxlength="10"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="num_people" class="form-label">number of people <span
                                    class="text-danger">*</span></label>
                            <input type="num_people" class="form-control" name="num_people" id="num_people"
                                max="10" required>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="massage" class="form-label">massage <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="massage" id="massage"
                                placeholder="massage" required>
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
