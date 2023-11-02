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
                            onclick="showTab('donations-received')">Received Funds</a>
                        <a class="list-group-item list-group-item-action"
                            onclick="showTab('raised-funds')">Raised Funds</a>
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
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
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
                        <div class="tab-pane fade" id="donations-received">
                            <div class="card-body pb-2">
                              <div class="form-group">
                                <label class="form-label">Donations Received - Money</label>
                                <input type="number" id="money-donation-input" class="form-control" placeholder="Enter the received money donation amount">
                                <button onclick="addMoneyDonation()" class="btn btn-primary">Add Donation</button>
                              </div>
                              <div class="form-group">
                                <label class="form-label">Received Donations - Money</label>
                                <div id="received-money-donations">
                                  <div class="donation-box">
                                    <p>Donor: John</p>
                                    <p>Amount: $50</p>
                                  </div>
                                  <div class="donation-box">
                                    <p>Donor: Sarah</p>
                                    <p>Amount: $100</p>
                                  </div>
                                  <div class="donation-box">
                                    <p>Donor: Michael</p>
                                    <p>Amount: $250</p>
                                  </div>
                                </div>
                              </div>
                              <script>
                                function addMoneyDonation() {
                                  var input = document.getElementById("money-donation-input");
                                  var amount = input.value;
                                  var receivedDonations = document.getElementById("received-money-donations");
                                  var donation = document.createElement("div");
                                  donation.className = "donation-box";
                                  donation.innerHTML = "<p>Donor: X</p><p>Amount: $" + amount + "</p>";
                                  receivedDonations.appendChild(donation);
                                  input.value = "";
                                }
                          
                                // Check if there are any received donations and show a blank page if not
                                window.addEventListener('DOMContentLoaded', function() {
                                  var receivedDonations = document.getElementById("received-money-donations");
                                  if (receivedDonations.innerHTML === "") {
                                    receivedDonations.innerHTML = "No money donations received.";
                                  }
                                });
                              </script>
                            </div>
                          </div>
                          
                          
                          <div class="tab-pane fade" id="raised-funds">
                            <div class="card-body">
                                <label class="form-label">Raised Funds - Money</label>
                                <input type="text" class="form-control" value>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <label class="form-label">Raised Funds - Materials</label>
                                <input type="text" class="form-control" value>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <label class="form-label">Raised Funds - Progress</label>
                                <div class="progress">
                                    <!-- Assuming you have access to the total needed amount and the current raised amount, you can calculate the progress percentage -->
                                    <div class="progress-bar" role="progressbar" style="width: XX%;" aria-valuenow="XX" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
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
    </script>
            </main>
<?php require APPROOT . '/views/includes/footer.php' ?>