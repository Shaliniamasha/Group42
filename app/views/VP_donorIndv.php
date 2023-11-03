<?php require APPROOT . '/views/includes/header.php' ?>

<head>
    <title>Super User Profile</title>
    <!-- <link rel="stylesheet" type="text/css" href="donee-profile.css"> -->
    <style>
        /* Unique CSS for Donee Profile */
        .profile-container {
            background-color: #f5f5f5;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 80%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            margin-top: 90px;
            margin-bottom: 90px;

        }

        .bio-data {
            margin-bottom: 20px;
            /* Style Bio Data */
        }

        .fundraisers-launched {
            margin-bottom: 20px;
            /* Style Fundraisers Launched */
        }

        .merchandise-sold {
            margin-bottom: 20px;
            /* Style Merchandise Sold */
        }

        .material-collection-locations {
            margin-bottom: 20px;
            /* Style Material Collection Locations */
        }

        .donations-made {
            /* Style Donations Made */
        }

        .profile ul {
    list-style: none;
    padding: 0;
}

.profile ul li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0; /* Add padding as needed */
    border-bottom: 1px solid #ddd; /* Add separation between items */
}

.delete-button {
    background: none;
    border: none;
    cursor: pointer;
    color: #f00; /* Change color as needed */
}

.profile h2 {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.profile h2 i {
    margin-right: 10px; /* Adjust as needed */
    font-size: 1.5em; /* Larger icon size */
    color: rgb(33, 228, 186); /* Change the color to highlight */
}
.profile{
    border: 1px solid rgb(33, 228, 186); /* Add a thin border */
    border-radius: 5px; /* Optional: Add rounded corners */
    margin-bottom: 20px;
    padding: 10px; /* Add padding to provide space between border and content */

}

    </style>
</head>

<body>
    <div class="profile-container">
    <div class="profile">
    <h2>
    <a href="<?php echo URLROOT ?>/Stories/addStory"><i class="fas fa-plus-circle"></i> </a>Bio Data
    </h2>
            <p>Username: JohnDoe</p>
            <p>Email: johndoe@example.com</p>
            <form action="/edit-bio" method="post">
                <label for="username">Edit Username:</label>
                <input type="text" id="username" name="username" value="JohnDoe">
                <label for="email">Edit Email:</label>
                <input type="text" id="email" name="email" value="johndoe@example.com">
                <button type="submit">Save</button>
            </form>
        </div>
        <div class="profile">
        <h2>
        <a href=><i class="fas fa-plus-circle"></i></a> Uploaded Stories
    </h2>
            <ul>
            <li><a href="<?php echo URLROOT ?>/Stories/StoryView/1">
            Story 1: </a>
            <a href="<?php echo URLROOT ?>/Stories/remove/1">
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button></a>
        </li>
        <li>
           Story2: O- Blood donation
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>
            </ul>
            <form action="/edit-fundraisers" method="post">
                <label for="fundraiser1">Edit Fundraiser 1:</label>
                <input type="text" id="fundraiser1" name="fundraiser1" value="Education for All">
                <label for="fundraiser2">Edit Fundraiser 2:</label>
                <input type="text" id="fundraiser2" name="fundraiser2" value="Sports Equipment Drive">
                <button type="submit">Save</button>
            </form>
        </div>
        
       
    </div>
</body>
<?php require APPROOT . '/views/includes/footer.php' ?>