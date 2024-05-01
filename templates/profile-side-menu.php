<div class="w-407 sticky top-5">
                    <div class="profile_card mb-40 rounded-3 d-flex flex-column align-items-center">
                        <div class="wh-80 rounded-circle overflow-hidden mb-2">
                            <img id="profilePicLabel" src="./assets/img/user.webp" width="" height="" alt="profile-photo">
                        </div>
                        <h3 class="font-16 m-bd text-green" id="profileUserNameLabel"></h3>
                        <p class="text-grey font-14 m-reg mb-0" id="profileEmailLabel"></p>

                    </div>

                    <div class="gap-2 d-flex flex-column">
                        <a href="./orders.php"
                            class="rounded-2 bg-<?= $_PAGE_NAME == "My Orders" ? 'greenvish' : 'light'; ?> d-flex justify-content-between align-items-center py-px h-58">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="card_icon_img">
                                    <img src="./assets/img/emptybox.webp" width="" height="" alt="profile-icon">
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-16 m-med" style="color: #1F1D1D;">My Orders</p>
                                </div>
                            </div>
                            <span>
                                <i class="font-14 fa fa-angle-right text-dark"></i>
                            </span>
                        </a>
                        <a href="./profile.php"
                            class="rounded-2 bg-<?= $_PAGE_NAME == "My Profile" ? 'greenvish' : 'light'; ?> d-flex justify-content-between align-items-center py-px h-58">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="card_icon_img">
                                    <img src="./assets/img/user.webp" width="" height="" alt="profile-icon">
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-16 m-med" style="color: #1F1D1D;">My Profile</p>
                                </div>
                            </div>
                            <span>
                                <i class="font-14 fa fa-angle-right text-dark"></i>
                            </span>

                        </a>
                        <a href="./my-address.php"
                            class="rounded-2 bg-<?= $_PAGE_NAME == "My Addresses" ? 'greenvish' : 'light'; ?> d-flex justify-content-between align-items-center py-px h-58">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="card_icon_img">
                                    <img src="./assets/img/aims.webp" width="" height="" alt="profile-icon">
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-16 m-med" style="color: #1F1D1D;">My Addresses</p>
                                </div>
                            </div>
                            <span>
                                <i class="font-14 fa fa-angle-right text-dark"></i>
                            </span>
                        </a>
                        <a href="javascript:logout()" class="rounded-2 bg-light d-flex justify-content-between align-items-center py-px h-58">
                            <div class="d-flex flex-row gap-3 align-items-center">
                                <div class="card_icon_img">
                                    <img src="./assets/img/logout.webp" width="" height="" alt="profile-icon">
                                </div>
                                <div class="col">
                                    <p class="mb-0 font-16 m-med" style="color: #1F1D1D;">Logout</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>