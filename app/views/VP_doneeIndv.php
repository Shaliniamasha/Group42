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
        <i class="fas fa-plus-circle"></i> Bio Data
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
        <h2><a href="<?php echo URLROOT ?>/stories/create">
        <a href=><i class="fas fa-plus-circle"></i></a> Uploaded Stories</a>
    </h2>
            <ul>
            <li>
            Story 1: Education for All
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button>
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
        <div class="profile">
        <h2>
        <i class="fas fa-plus-circle"></i> Launched Fundraisers
    </h2>
            <ul>
            <li>
            Fundraiser 1: Education for All
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>
        <li>
            LFundraiser 2: Sports Equipment Drive
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
        <div class="profile">
    <h2>
        <i class="fas fa-plus-circle"></i> Locations to collect Materials
    </h2>
            <ul>
            <li>
            Location1: : 123 Main Street, City A
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>
        <li>
            Location 2:: 456 Elm Street, City B
            <button class="delete-button">
                <i class="fas fa-trash-alt"></i>
            </button>
        </li>
            </ul>
            <form action="/edit-material-locations" method="post">
                <label for="location1">Edit Location 1:</label>
                <input type="text" id="location1" name="location1" value="123 Main Street, City A">
                <label for="location2">Edit Location 2:</label>
                <input type="text" id="location2" name="location2" value="456 Elm Street, City B">
                <button type="submit">Save</button>
            </form>
        </div>
         
    </div>
</body>
<?php require APPROOT . '/views/includes/footer.php' ?>