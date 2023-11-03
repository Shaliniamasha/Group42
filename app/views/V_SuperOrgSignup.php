<?php require APPROOT . '/views/includes/header.php' ?>

<head> <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/form.css"></head>
<main>
      <div class="form_container">
   
    <form action="SuperIndividual " method="post" enctype="multipart/form-data">
        <div class="form_col">
        <h1> Super User Sign Up </h1>
        
        <fieldset>
          
          <legend><span class="number">1</span> Your Info</legend>
          <input type="hidden" name="type" value="signup">
          
          <label for="username">Full name:</label>
          <input required type="text" id="username" name="username">
        
          <label for="nic">NIC:</label>
          <input required type="text" id="nic" name="nic">
       
          <label for="nic_image">Upload NIC Image:</label>
                    <input required type="file" id="nic_image" name="nic_image">

        
             
        </fieldset>
</div>
<div class="form_col">
        <fieldset>  
        
        <legend><span class="number">2</span> Your Bank Details</legend>
        
        <label for="bank_code">Bank Code:</label>
          <input required type="text" id="bank_code" name="bank_code">

          <label for="bank_name">Bank Name:</label>
          <input required type="text" id="bank_name" name="bank_name">
     
          <label for="branch_code">Branch Code:</label>
          <input required type="text" id="branch_code" name="branch_code">
       
        
          <label for="branch_name">Branch Name:</label>
          <input required type="text" id="branch_name" name="branch_name">
    
       <label for="bank_pbook">Upload Bank Pass Book Image:</label>
                    <input required type="file" id="bank_pbook" name="bank_pbook">

                    </fieldset>
         <button class="blue-button" type="submit">Signup</button>
         </fieldset> 
    </div>
       </form>
        </div>
      
      
      </main>
<?php require APPROOT . '/views/includes/footer.php' ?>

