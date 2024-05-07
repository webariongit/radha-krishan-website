<div class="modal fade" id="editAdress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog chart-modal modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="address-form">
                    <form id="user-address-edit-form">
                        <div class=" address-success-msg"></div>
                        <div class="row">
                            <input type="hidden" class="form-control" name="address_id" id="address_id" required>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="firstname">First Name <span class="danger">*</span></label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="lastname">Last Name <span class="danger">*</span></label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4 form-group">
                                    <label for="line_1">Flat /  House No. / Building <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_1" id="line_1" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4 form-group">
                                    <label for="line_2">Street Address / Colony <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_2" id="line_2" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="landmark">Landmark</label>
                                    <input type="text"  class="form-control" name="landmark" id="landmark">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="pincode">Pin Code <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="pincode" id="pincode" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="city">City <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="city" id="city" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="state">State <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="state" id="state" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="country">Country <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="country" id="country" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="phone_no">Phone Number <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="phone_no" id="phone_no" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="alternate_phone_no">Alternative Phone Number</label>
                                    <input type="text"  class="form-control" name="alternate_phone_no" id="alternate_phone_no">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-4 form-group">
                                    <label for="" class="mb-2">Address Type</label>
                                    <div class="d-flex">
                                        <label class="address-type">
                                            <input type="radio" name="type" checked value="Home">
                                            <span>Home</span>
                                        </label>
                                        <label class="address-type">
                                            <input type="radio" name="type" value="Work">
                                            <span>Work</span>
                                        </label>
                                        <label class="address-type">
                                            <input type="radio" name="type" value="Other">
                                            <span>Other</span>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" value="1" name="shipping_address">

                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn main-btn">Edit Address</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>