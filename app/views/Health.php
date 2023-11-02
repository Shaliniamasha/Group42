<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fundraiser.css"></head>
<div class="form_container">
        <div>
            <form action="index.html" method="post" enctype="multipart/form-data">
                <h1> Start Fundraiser </h1>

                <fieldset>

                    <legend><span class="number">1</span> Basic Information on Fundraiser</legend>

                    <label for="target">Your Goal for the fundraiser:</label>
                    <textarea id="target" name="fr_target"></textarea>

                    <label for="image">Upload an Image for cover photo:</label>
                    <input class="form" type="file" id="image" name="fr_image">

                    <label for="topic">Enter topic for fundraiser:</label>
                    <textarea id="topic" name="fr_topic"></textarea>

                    <label for="discpription">Enter your story for donors:</label>
                    <textarea id="discpription" name="fr_disc"></textarea>

                    <label for="date">Select a target Date:</label>
                    <input class="form" type="date" id="date" name="selected_date">

                </fieldset>

               
                <fieldset>
                    <legend><span class="number">2</span> Documents required to verify fundraiser.</legend>

                    <p>1. Approval by doctor. (Confirming you have the desease that you are fundraising for)</p>

                    <label for="doc1">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc1" name="fr_doc1">

                    
                    <p>2. Approval by Gramaniladhari or a person of higher status in administration stating that you are eligable for the Fundraiser.</p>

                    <label for="doc2">Relevant reports to collaborate Story:</label>
                    <input required class="form" type="file" id="doc2" name="fr_doc2[]" multiple>

                    <p>2. Approval by Gramaniladhari or a person of higher status in administration stating that you are eligable for the Fundraiser.</p>

                    <label for="doc3">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc3" name="fr_doc3">

                    <p>3. Approval by residential policestation confirming you reside in the given address of the above letter.</p>

                    <label for="doc4">Upload an Image of the letter:</label>
                    <input required class="form" type="file" id="doc4" name="fr_doc4">
                
                </fieldset>

                <fieldset>

                    <!-- <legend><span class="number">2</span> Documents to verify fundraiser</legend>

                    <label for="docs">Upload all Documents Required:</label>
                    <input class="form" type="file" id="docs" name="fr_docs[]" multiple> -->

                </fieldset>

                <button class="form" type="submit">Submit</button>

            </form>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php' ?>