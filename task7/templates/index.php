<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>%TITLE%</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
<h2>Contact Form:</h2>
<div class="container">
	<div class="row">

<form method="post" role="form" id="form" class="col-sm-6">

    <div class="form-group">
	<div style="color: #FF0000; font-size: 15px;"><strong>%ERROR_NAME%</strong></div>
    <input type="text" class="form-control" name="name" id="name" value="%NAME%" placeholder="Your Name" />
	</div>
	<div class="form-group">
	<div style="color: #FF0000; font-size: 15px;"><strong>%ERROR_EMAIL%</strong></div>
	<div style="color: #FF0000; font-size: 15px;"><strong>%WRONG_EMAIL%</strong></div>
    <input class="form-control" name="email" id="email" value="%EMAIL%" placeholder="Your Email"/>
    </div>
	<div class="form-group">
	<div style="color: #FF0000; font-size: 15px;"><strong>%ERROR_SUBJECT%</strong></div>
		 
		  <select class="custom-select mr-sm-2" name="subject" id="inlineFormCustomSelect">
			<option >Please select</option>
			<option %SELECTED_OPTION1% value="1">One</option>
			<option %SELECTED_OPTION2% value="2">Two</option>
			<option %SELECTED_OPTION3% value="3">Three</option>
		  </select>
    </div>
	<div class="form-group">
	<div style="color: #FF0000; font-size: 15px;"><strong>%ERROR_MESSAGE%</strong></div>
	<textarea name="message" class="form-control" id="message" placeholder="Your Text">%MESSAGE%</textarea>
	</div>
	<div class="form-group">
    <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" id="submit-btn" value="Send"/>
	</div>
</form>
</div>
</div>

</body>
</html>
