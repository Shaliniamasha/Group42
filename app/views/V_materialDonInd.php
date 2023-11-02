<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fundraiser.css"></head>
<div class="form_container">
        <div>
            <form action="index.html" method="post" enctype="multipart/form-data">
                <h1> Start Fundraiser </h1>

                <fieldset>

                    <legend><span class="number">1</span> Basic Information on Fundraiser</legend>

                    <label for="material">Type of Material<span class="required">*</span>:</label>
                    <textarea id="material" name="material"></textarea>

                    <label for="amount">Amount you need<span class="required">*</span>:</label>
                    <textarea id="amount" name="amount" placeholder= "No of items/Weight"></textarea>
                </fieldset>

                <fieldset>

                    <label for="image">Upload an Image for cover photo<span class="required">*</span>:</label>
                    <input class="form" type="file" id="image" name="image">

                    <label for="topic">Enter topic for fundraiser<span class="required">*</span>:</label>
                    <textarea id="topic" name="topic"></textarea>

                    <label for="discpription">Enter your story for donors<span class="required">*</span>:</label>
                    <textarea id="discpription" name="disc"></textarea>

                    <label for="date">Select a target Date<span class="required">*</span>:</label>
                    <input class="form" type="date" id="date" name="selected_date">

                    <label for="addresses">Addresses for sending materials (comma-separated)<span class="required">*</span>:</label>
                    <input type="text" id="addresses" name="addresses">

            
                    <div id="map" style="height: 300px; width: 100%;"></div>

                </fieldset>

                <fieldset>
                    <legend><span class="number">2</span> Documents required to verify fundraiser.</legend>

                    <p>Provide Documents to verify the fundraiser</p>
                    <p>Ex -: If it is bulding Material proof that you are building or renovating a house.(Plans/Police report/Utility Bills)</p>

                    <label for="docs">Relavant documents<span class="required">*</span>:</label>
                    <input required class="form" type="file" id="docs" name="docs[]" multiple>

                    <!-- <p>2. Approval by Gramaniladhari or a person of higher status in administration stating that you are eligable for the Fundraiser.</p>

                    <label for="doc2">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc2" name="fr_doc2">

                    <p>3. Approval by residential policestation confirming you reside in the given address of the above letter.</p>

                    <label for="doc3">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc3" name="fr_doc3"> -->
                
                </fieldset>

                <!-- <fieldset>

                    <legend><span class="number">2</span> Documents to verify fundraiser</legend>

                    <label for="docs">Upload all Documents Required:</label>
                    <input class="form" type="file" id="docs" name="fr_docs[]" multiple>

                </fieldset> -->

                <button class="form" type="submit">Submit</button>

            </form>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php' ?>