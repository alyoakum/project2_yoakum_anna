<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'anna-yoakum.info' // Put you mail domain here
	,
	'Anna Yoakum' // Put your site name / form name here
	,
	'hello@annayoakum.com' // Where will the form notification be sent?
	,
	'noreply@anna-yoakum.info' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
