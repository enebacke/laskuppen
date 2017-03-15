<?php include("start.php"); ?>

<div>
<form class="cf" mehtod="POST" action="addBook.php">
    
	<input type="text" id="input-name" placeholder="Boktitel" name ="title">
    <input type="email" id="input-email" placeholder="Författare" name = "author">
    <input type="text" id="input-subject" placeholder="Genre" name = "genre">
    <input type="text" id="input-subject" placeholder="Bokens språk" name = "language">
    <input type="text" id="input-subject" placeholder="Antal sidor" name = "pages">
    <input type="text" id="input-subject" placeholder="Betyg" name = "grade">

    <textarea type="text" id="input-message" placeholder="Recension" name = "review"> </textarea>

	<input type="submit" value="Skicka in" id="input-submit">

</form>
</div>

<?php include("end.php"); ?>
