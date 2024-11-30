<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasedit" aria-labelledby="offcanvasEndLabel">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-6">
    <h5 id="offcanvasEndLabel" class="offcanvas-title">Update City</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
        <form id="city-edit-form" method="post" data-table="city" action="" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-1">
                <label class="form-label" for="name">City Name</label>
                <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter city title"/>
                <span id="error_edit-name" class="text-danger input-error"></span>
            </div>


            <div class="mb-1">
                <label class="form-label" for="state_id">State</label>
                <select class="form-select " id="edit_state_id" name="state_id">
                <option value="">Select state</option>
                @if (isset($states))
                    @foreach ($states as $state)
                        <option value="{{$state->id}}">{{ ucfirst($state->name)}}</option>
                    @endforeach
                @endif

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <span class="spinner-border spinner-border text-success d-none" role="status" aria-hidden="true" style="vertical-align: middle"></span>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="offcanvas" style="float: right; vertical-align: middle">Discard</button>
        </form>


        <span class="text-success text-success d-none fs-5 fw-bold" id="edit_success-msg"></span>
    </div>
</div>
