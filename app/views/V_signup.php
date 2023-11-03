
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

.left {
    border-right: 1px solid #ddd;
}

.right {
    border-left: 1px solid #ddd;
}</style></head>
<div class="split-container">
        <div class="textbox left">
            <img src="user_avatar.png" alt="Image 1">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/Individualusers"> Sign up as an Individual</a></button>
            </div>
            <p>A system information for an approval workflow and assets management automated system within a company ref
                ers to a comprehensive database and infrastructure that tracks, organizes, and facilitates the approval 
                process and management of company assets. This system provides a centralized platform for employees to 
                submit requests, such as purchase requisitions or access permissions, and ensures that these requests 
                follow a predefined workflow, with appropriate authorizations and reviews at each stage. Simultaneously,
                 it maintains a detailed inventory of the company's assets, ranging from physical equipment to digital 
                 resources, helping to streamline asset allocation, maintenance, and tracking. This integration of approval
                  workflows and asset management not only enhances operational efficiency but also promotes transparency 
                and accountability, making it an invaluable tool for modern organizations seeking to optimize resource allocation and regulatory compliance.</p>
        </div>
        <div class="textbox right">
            <img src="user_avatar.png" alt="Image 2">
            <div> <button class="my-button"><a href="<?php echo URLROOT ?>/OrgUsers">Sign Up as an Organisation</a></button>
            </div>
            <p> A system information for an approval workflow and assets management automated system within a company 
                refers to a comprehensive database and infrastructure that tracks, organizes, and facilitates the approval 
                process and management of company assets. This system provides a centralized platform for employees to 
                submit requests, such as purchase requisitions or access permissions, and ensures that these requests follow
                 a predefined workflow, with appropriate authorizations and reviews at each stage. Simultaneously, it 
                 maintains a detailed inventory of the company's assets, ranging from physical equipment to digital resources,
                  helping to streamline asset allocation, maintenance, and tracking. This integration of approval workflows and 
                  asset management not only enhances operational efficiency but also promotes transparency and accountability, making 
                  it an invaluable tool for modern organizations seeking to optimize resource allocation and regulatory compliance.                                                                
            </p>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>
