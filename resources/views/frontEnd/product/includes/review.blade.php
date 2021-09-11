<div class="accordion productOverview">
    <div class="accordion-item bg-dark text-secondary">
        <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button bg-dark btn-sm btn-dark text-secondary shadow-none" type="button" data-bs-toggle="collapse" data-bs-target=".productDes" aria-expanded="true"><h4>Product's Description</h4></button>
        </h2>
        <div class="accordion-collapse collapse productDes show" data-bs-parent=".productOverview">
            <div class="accordion-body">
                <p>
                    @yield('frontEndDescription')
                </p>
            </div>
        </div>
    </div>
    <div class="accordion-item bg-dark text-secondary">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark btn-sm btn-dark text-secondary shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target=".review" aria-expanded="false"><h4>Review</h4></button>
        </h2>
        <div class="accordion-collapse review collapse" data-bs-parent=".productOverview">
            <div class="accordion-body">
                <form action="" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-md-8 my-3 my-md-0">
                        <h6>Product Review:</h6>
                        <textarea class="form-control bg-dark text-secondary border-secondary text-capitalize shadow-none"
                                    placeholder="Write your honest opinion and give a rating.."></textarea>
                        </div>
                        <div class="col-md-4 my-3 my-md-0">
                            <div class="row">
                                <div class="col-sm-6 d-grid">
                                    <h6>Rating (<code>Out of 5</code>) :</h6>
                                    <div class="input-group input-group-sm text-center flex-nowrap">
                                        <button class="btn btn-secondary shadow-none" type="button">-</button>
                                        <input type="text" class="form-control bg-dark text-center text-secondary border-secondary shadow-none" value="3">
                                        <button class="btn btn-secondary shadow-none" type="button">+</button>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-secondary mt-3 shadow-none">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item bg-dark text-secondary">
        <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-dark btn-sm btn-dark text-secondary shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target=".deliveryProcess" aria-expanded="false" aria-controls="collapseThree"><h4>Delivery Process</h4></button>
        </h2>
        <div class="accordion-collapse deliveryProcess collapse" data-bs-parent=".productOverview">
            <div class="accordion-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid aut cum cumque deleniti eaque exercitationem, fugiat incidunt ipsa magnam, minus odio perferendis reprehenderit rerum sint tempora totam. Aliquid blanditiis earum enim est impedit incidunt molestiae nemo provident repellendus sequi. Amet aperiam distinctio possimus quam quos reiciendis repellendus sed vel!</p>
            </div>
        </div>
    </div>
</div>
</div>
