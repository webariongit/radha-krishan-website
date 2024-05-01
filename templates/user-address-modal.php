<div class="modal fade" id="addAdress" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog chart-modal modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="address-form">
                    <form id="user-address-form">
                        <div class=" address-success-msg"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="name">Full Name <span class="danger">*</span></label>
                                    <input type="text" class="form-control" name="name" id="name" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="line_1">Flat /  House No. / Building <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_1" id="line_1" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="line_2">Street Address / Colony <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="line_2" id="line_2" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="landmark">Landmark</label>
                                    <input type="text"  class="form-control" name="landmark" id="landmark">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="pincode">Pin Code <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="pincode" id="pincode" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="city">City <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="city" id="city" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="state">State <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="state" id="state" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="country">Country <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="country" id="country" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="phone_no">Phone Number <span class="danger">*</span></label>
                                    <input type="text"  class="form-control" name="phone_no" id="phone_no" required>
                                    <div class="invalid-feedback">This field is required.</div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-4 form-group">
                                    <label for="alternate_phone_no">Alternative Phone Number</label>
                                    <input type="text"  class="form-control" name="alternate_phone_no" id="alternate_phone_no">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4 form-group">
                                    <label for="">Address Type</label>
                                    <div class="d-flex">
                                        <label class="address-type">
                                            <input type="radio" name="type" checked value="Home">
                                            <span>Home <sup>(7AM - 10PM delivery)</sup></span>
                                        </label>
                                        <label class="address-type">
                                            <input type="radio" name="type" value="Work">
                                            <span>Work <sup>(10PM - 6PM delivery)</sup></span>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" value="1" name="shipping_address">

                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn main-btn">Add Address</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>