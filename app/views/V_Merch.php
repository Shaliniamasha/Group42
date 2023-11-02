<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fundraiser.css"></head>
<!-- <div class="form_container">
        <div>
            <form action="index.html" method="post" enctype="multipart/form-data">
                <h1> Start Fundraiser </h1> -->
<body>
    <h1>Merchandise Store</h1>
    <div id="merchandise-container">
        <div id="merchandise-form">
            <h2>Add New Merchandise</h2>
            <form id="merchandise-form">


                <fieldset>

                    <legend><span class="number">1</span> Merchandise Information</legend>

                    <label for="topic">Topic:</label>
                    <input type="text" id="topic" name="p_title" required>

                    <label for="description">Description:</label>
                    <textarea id="description" required></textarea>

                    <!-- Add an input field for uploading an image -->
                    <label for="image">Upload Image:</label>
                    <input type="file" id="image" accept="image/*" required>


<!-- 
                    <label for="material">Type of Material:</label>
                    <textarea id="material" name="material"></textarea>

                    <label for="amount">Amount you need:</label>
                    <textarea id="amount" name="amount" placeholder= "No of items/Weight"></textarea> -->
                </fieldset>

                <fieldset>

                <label for="stock">Stock Available:</label>
                <input type="number" id="stock" required>

                <label for="colors">Colors (up to 4):</label>
                <input type="text" id="colors" placeholder="Color 1, Color 2, Color 3, Color 4">

                <label for="price">Price:</label>
                <input type="number" id="price" required>

                <button class="form" type="submit">Add Merchandise</button>

                <!-- <button type="button" onclick="addMerchandise()">Add Merchandise</button> -->
            </form>
        </div>

                    <!-- <label for="image">Upload an Image for cover photo:</label>
                    <input class="form" type="file" id="image" name="image">

                    <label for="topic">Enter topic for fundraiser:</label>
                    <textarea id="topic" name="topic"></textarea>

                    <label for="discpription">Enter your story for donors:</label>
                    <textarea id="discpription" name="disc"></textarea>

                    <label for="date">Select a target Date:</label>
                    <input class="form" type="date" id="date" name="selected_date">

                    <label for="addresses">Addresses for sending materials (comma-separated):</label>
                    <input type="text" id="addresses" name="addresses"> -->

            
                    <div id="map" style="height: 300px; width: 100%;"></div>

                </fieldset>
<!-- 
                <fieldset>
                    <legend><span class="number">2</span> Documents required to verify fundraiser.</legend>

                    <p>Provide Documents to verify the fundraiser</p>
                    <p>Ex -: If it is bulding Material proof that you are building or renovating a house.(Plans/Police report/Utility Bills)</p>

                    <label for="docs">Relavant documents:</label>
                    <input required class="form" type="file" id="docs" name="docs[]" multiple> -->

                    <!-- <p>2. Approval by Gramaniladhari or a person of higher status in administration stating that you are eligable for the Fundraiser.</p>

                    <label for="doc2">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc2" name="fr_doc2">

                    <p>3. Approval by residential policestation confirming you reside in the given address of the above letter.</p>

                    <label for="doc3">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc3" name="fr_doc3"> -->
                
                <!-- </fieldset> -->

                <!-- <fieldset>

                    <legend><span class="number">2</span> Documents to verify fundraiser</legend>

                    <label for="docs">Upload all Documents Required:</label>
                    <input class="form" type="file" id="docs" name="fr_docs[]" multiple>

                </fieldset> -->

                <!-- <button class="form" type="submit">Submit</button> -->
<!-- 
            </form>
        </div> -->
    </div>

    <?php require APPROOT . '/views/includes/footer.php' ?>

<!-- 
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchandise Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Merchandise Store</h1>
    <div id="merchandise-container">
        <div id="merchandise-form">
            <h2>Add New Merchandise</h2>
            <form id="merchandise-form">
                <label for="topic">Topic:</label>
                <input type="text" id="topic" required>

                <label for="description">Description:</label>
                <textarea id="description" required></textarea>

                <label for="stock">Stock Available:</label>
                <input type="number" id="stock" required>

                <label for="colors">Colors (up to 4):</label>
                <input type="text" id="colors" placeholder="Color 1, Color 2, Color 3, Color 4">

                <label for="price">Price:</label>
                <input type="number" id="price" required>

                <button type="button" onclick="addMerchandise()">Add Merchandise</button>
            </form>
        </div>
        <div id="merchandise-list">
            <h2>Merchandise List</h2>
            <ul id="merchandise-items"></ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html> -->
