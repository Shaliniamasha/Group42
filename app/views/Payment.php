<?php require APPROOT . '/views/includes/header.php' ?>

<head> <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

body {
  font-family: 'Poppins', Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.box {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  border: 2px solid black;
  border-radius: 5px;
  padding: 10px;
  margin-bottom: 20px;
}

.box.profile {
  max-width: 300px;
}

.box.progress {
  max-width: 500px;
}

.box h1, .box h3 {
  margin: 0;
}

.box.profile img {
  max-width: 100%;
  border-radius: 50%;
}

.heading {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
  text-align: left;
}

.progress-bar {
  background-color: #f1f1f1;
  border-radius: 10px;
  height: 20px;
  margin-bottom: 5px;
  overflow: hidden;
}

.progress-bar-fill {
  background-color: #4caf50;
  height: 100%;
}

.donate-button {
  padding: 10px;
  background-color: #4caf50;
  color: white;
  text-decoration: none;
  transition: background-color 0.3s;
  border-radius: 5px;
}

.donate-button:hover {
  background-color: #45a049;
}

h2 {
  text-align: center;
}


html{    background:url(http://thekitemap.com/images/feedback-img.jpg) no-repeat;
background-size: cover;
height:100%;
}

#feedback-page{
text-align:center;
}

#form-main{
width:100%;
float:left;
padding-top:0px;
}

#form-div {
background-color:rgba(72,72,72,0.4);
padding-left:35px;
padding-right:35px;
padding-top:35px;
padding-bottom:50px;
width: 450px;
float: left;
left: 50%;
position: absolute;
margin-top:30px;
margin-left: -260px;
-moz-border-radius: 7px;
-webkit-border-radius: 7px;
}

.feedback-input {
color:#3c3c3c;
font-family: Helvetica, Arial, sans-serif;
font-weight:500;
font-size: 18px;
border-radius: 0;
line-height: 22px;
background-color: #fbfbfb;
padding: 13px 13px 13px 54px;
margin-bottom: 10px;
width:100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-ms-box-sizing: border-box;
box-sizing: border-box;
border: 3px solid rgba(0,0,0,0);
}

.feedback-input:focus{
background: #fff;
box-shadow: 0;
border: 3px solid #3498db;
color: #3498db;
outline: none;
padding: 13px 13px 13px 54px;
}

.focused{
color:#30aed6;
border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}

#name:focus{
background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
background-size: 30px 30px;
background-position: 8px 5px;
background-position: 11px 8px;
background-repeat: no-repeat;
}

#email{
background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}

#email:focus{
background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}

#comment{
background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
background-size: 30px 30px;
background-position: 11px 8px;
background-repeat: no-repeat;
}

textarea {
width: 100%;
height: 150px;
line-height: 150%;
resize:vertical;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
background-color:white;
}

#button-blue{
font-family: 'Montserrat', Arial, Helvetica, sans-serif;
float:left;
width: 100%;
border: #fbfbfb solid 4px;
cursor:pointer;
background-color: #3498db;
color:white;
font-size:24px;
padding-top:22px;
padding-bottom:22px;
-webkit-transition: all 0.3s;
-moz-transition: all 0.3s;
transition: all 0.3s;
margin-top:-4px;
font-weight:700;
}

#button-blue:hover{
background-color: rgba(0,0,0,0);
color: #0493bd;
}

.submit:hover {
color: #3498db;
}

.ease {
width: 0px;
height: 74px;
background-color: #fbfbfb;
-webkit-transition: .3s ease;
-moz-transition: .3s ease;
-o-transition: .3s ease;
-ms-transition: .3s ease;
transition: .3s ease;
}

.submit:hover .ease{
width:100%;
background-color:white;
}

@media only screen and (max-width: 580px) {
#form-div{
left: 3%;
margin-right: 3%;
width: 88%;
margin-left: 0;
padding-left: 3%;
padding-right: 3%;
}
}

body{
background-color: rgb(255, 255, 255);
height: 2000px;
overflow-x:;


}


#mymsg {
background-color: #ffffff;
height: 120px;
padding-top: 0px;
width: 30%;
border: 25px solid #eb3535;
border-radius: 10px;
box-shadow: 0px 5px 10px rgb(7, 7, 7);
position: fixed;
margin-left: 31%;
margin-right: 35%;
margin-top: 20%;
display:none;
opacity: 1;
-webkit-user-select: none;
z-index:1;
transition: 1s;


}

img{
width: 25px;
height: 25px;
float: right;
margin-top: -20px;
margin-right: -22px;
cursor: pointer;
}

p{

font-family: sans-serif;
font-size: 20px;
text-align: center;
cursor:default;

}

.content{
opacity:1;
}

.content2{
-webkit-user-select: none;

}

.button{
position: fixed;
}







</style></head>
<main>
<div id="form-main">
    <div id="form-div">
      <form class="form" id="form1" onsubmit="redirectToSuccessfulPage(event)">
        
        <p class="name">
          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        </p>
        
        <p class="email">
          <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
        </p>
        
        <p class="text">
          <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
        </p>
        
        
        <div class="submit">
          <input type="submit" value="SEND" id="button-blue"/>
          <div class="ease"></div>
        </div>
      </form>
    </div>
</div>

<script>
  function redirectToSuccessfulPage(event) {
    event.preventDefault(); // Prevent the default form submission

    // Add your logic to handle form submission here (e.g., send data to server, validate form fields)

    // Redirect to the Successful page
    window.location.href = "<?php echo URLROOT ?>/profile/success"; // Replace "successful.html" with the actual URL of your Successful page
  }
</script>
            </main>
<?php require APPROOT . '/views/includes/footer.php' ?>