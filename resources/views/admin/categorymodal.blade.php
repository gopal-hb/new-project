<div class="modal fade" id="addcategory" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #003049">
                <h5 class="modal-title" style="color: #f6f9ff">Add New Category</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="{{ route('category.store') }}" id="categoryadd" novalidate>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="Category" class="form-label">Category <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="Category" id="Category"
                                placeholder="Category" required>
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

<div class="modal fade" id="editcategory" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #003049">
                <h5 class="modal-title" style="color: #f6f9ff">edit Category</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="" id="categoryedit" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="eCategory" class="form-label">Category <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="eCategory" id="eCategory"
                                placeholder="Category" required>
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
