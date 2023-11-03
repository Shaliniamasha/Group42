
<?php require APPROOT . '/views/includes/header.php' ?>

<head><style>.split-container {
    display: flex;
    justify-content: space-between;
    width: 80%; 
}


.textbox {
    flex: 1;
    padding: 20px;
    text-align: center;
    width:50%;
    margin-left:30px;
    margin-right:30px;
    background-color:rgb(179, 247, 179);
}

.left_box {
    margin-top: 80px;
    margin-bottom: 80px;
    border-right: 1px solid #ddd;
}

.right_box {
    margin-top: 80px;
    margin-bottom: 80px;
    border-left: 1px solid #ddd;
}</style></head>
<div class="split-container">
        <div class="textbox left_box">
            <img src="user_avatar.png" alt="Image 1">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/Individualusers"><h1> Sign up as an Individual</h1></a></button>
            </div>
            <h4>Will be able to publish stories</h4>
            <h4>Will be able to Raise monetary Funds</h4>
            <h4>Will be able to Raise Material Funds</h4>
        </div>
        <div class="textbox right_box">
            <img src="user_avatar.png" alt="Image 2">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/OrgUsers"><h1>Sign Up as an Organisation</h1></a></button>
            </div>
            <h3>Should be a governmant registered and approved Organization</h3>
            <h4>Will be able to Raise monetary Funds</h4>
            <h4>Will be able to Raise Material Funds</h4>
            <h4>Will be able to Sell Merchandise</h4>
            <h4>Will be able to View and Manage Profile</h4>                                                                
            
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
