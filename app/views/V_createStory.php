<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/fundraiser.css"></head>
<div class="form_container">
        <div>
            <form action="Stories/create" method="post" enctype="multipart/form-data">
                <h1> Begin a story  </h1>

                <fieldset>

                    <legend>Let us help you spread the word!</legend>

                    <label for="target">Title of your Story<span class="required">*</span>: </label>
                    <input required id="target" name="title"></input>

                    <label for="image">Upload an Image related to the story (if any)<span class="required">*</span>: </label>
                    <input class="image" type="file" id="image" name="image">

                    <label for="descpription">Enter your story for viewers<span class="required">*</span>:</label>
                    <textarea id="descpription" name="description"></textarea>

                    <label for="contact">Contact<span class="required">*</span>: </label>
                    <input class="contact" type="text" name="contact">

                    
                </fieldset>

               
            

                <button class="form blue-button" type="submit">Create</button>

            </form>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php' ?>