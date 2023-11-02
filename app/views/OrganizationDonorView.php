<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css"></head>
<main>
<div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Profile
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active"
                            onclick="showTab('account-general')">General</a>
                        <a class="list-group-item list-group-item-action"
                            onclick="showTab('account-change-password')">Change password</a>
                        <a class="list-group-item list-group-item-action"
                            onclick="showTab('account-info')">Info</a>
                        <a class="list-group-item list-group-item-action"
                            onclick="showTab('donations-made')">Donations Made</a>
                        <a class="list-group-item list-group-item-action"
                            onclick="showTab('Buy-Merchandise')">Bought Merchandise</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control mb-1" value="nmaxwell">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="Nelle Maxwell">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="nmaxwell@mail.com">
                                    <div class="alert alert-warning mt-3">
                                        Your email is not confirmed. Please check your inbox.<br>
                                        <a href="javascript:void(0)">Resend confirmation</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                       <div class="tab-pane fade" id="account-change-password">
    <div class="card-body pb-2">
        <div class="form-group">
            <label class="form-label">Current password</label>
            <input type="password" class="form-control" id="current-password">
        </div>
        <button class="btn btn-primary" onclick="showCurrentPassword()">Show Current Info</button>
        <button class="btn btn-success" onclick="changePassword()">Change Password</button>
    </div>
</div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" id="user-address"
                                        rows="5">123 Main St, City, Country</textarea>
                                    <button onclick="removeAddress()" class="btn btn-primary">Delete Address</button>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                </div>
                                <script>
                                    function removeAddress() {
                                        var addressElement = document.getElementById("user-address");
                                        addressElement.value = "";
                                        var deleteButton = document.querySelector(".btn.btn-primary");
                                        deleteButton.style.display = "none";
                                    }
                                </script>   
                            </div>
                        </div>
                 <div class="tab-pane fade" id="donations-made">
    <div class="card-body pb-2">
        <div class="form-group">
            <label class="form-label">Make a Donation</label>
            <select class="form-control" id="donation-type">
                <option value="money">Money</option>
                <option value="material">Material</option>
            </select>
            <input type="text" id="donation-amount" class="form-control mt-2" placeholder="Enter the donation amount or item">
            <button onclick="makeDonation()" class="btn btn-primary mt-2">Submit Donation</button>
        </div>
        <div class="form-group mt-4">
            <label class="form-label">Donations Made</label>
            <div id="donations-list">
                <!-- This will be populated dynamically with JavaScript -->
            </div>
        </div>
    </div>
</div>
                      <div class="tab-pane fade" id="Buy-Merchandise">
    <div class="card-body pb-2">
        <div class="form-group">
            <label class="form-label">Purchased Merchandise</label>
            <div id="purchased-merchandise">
                <!-- This will be populated dynamically with JavaScript -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
    <script type="text/javascript">
function showTab(tabId) {
            var tabs = document.querySelectorAll('.tab-pane');
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove('show', 'active');
            }
            var activeTab = document.getElementById(tabId);
            activeTab.classList.add('show', 'active');
        }

        // Function to add purchased merchandise
        function addPurchasedMerchandise(merchandiseName) {
            var purchasedMerchandiseList = document.getElementById("purchased-merchandise");
            var merchandiseElement = document.createElement("div");
            merchandiseElement.className = "merchandise-box";
            merchandiseElement.innerHTML = "<p>Purchased: " + merchandiseName + "</p>";
            purchasedMerchandiseList.appendChild(merchandiseElement);
        }

        // Check if there are any purchased merchandise and show a blank page if not
        window.addEventListener('DOMContentLoaded', function() {
            var purchasedMerchandiseList = document.getElementById("purchased-merchandise");
            if (purchasedMerchandiseList.innerHTML === "") {
                purchasedMerchandiseList.innerHTML = "No purchased merchandise.";
            }
        });

        function makeDonation() {
        var donationType = document.getElementById("donation-type").value;
        var donationAmount = document.getElementById("donation-amount").value;
        var donationsList = document.getElementById("donations-list");

        var donationMessage = "Donated $" + donationAmount;

        if (donationType === "material") {
            donationMessage = "Donated " + donationAmount;
        }

        var donationElement = document.createElement("div");
        donationElement.className = "donation-message";
        donationElement.innerHTML = donationMessage;
        donationsList.appendChild(donationElement);

        document.getElementById("donation-amount").value = "";
    }

    function showCurrentPassword() {
            var currentPasswordInput = document.getElementById("current-password");
            var currentPassword = "********"; // Replace with the actual current password
            currentPasswordInput.value = currentPassword;
        }

        function changePassword() {
            var newPassword = prompt("Please enter the new password:");
            if (newPassword !== null) {
                // You can add code here to handle changing the password
                alert("Password changed successfully!");
            }
        }
            </main>
<?php require APPROOT . '/views/includes/footer.php' ?>