<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<!--Let browser know website is optimizedfor mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Portalas</title>
		<style>
		#uno{background-color: lightblue;}
		# #dos{background-color: lightgreen;} 
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div id="uno" class="col s3">
					<h2> Portalas </h2>
				</div>
				<div class="col s7"></div>
				<div id="dos" class="col s2">
					<form method="POST">
						<label>El.paštas</label>
						<input type="text" name="email"/>
						<label>Slaptažodis</label>
						<input type="text" name="password"/>
					</form>
				</div>
			</div>
			<div class="row">
				 <div class="col s2"></div>
				 <div class="col s5">
				 	<h5>Prisijunk prie draugų</h5>
				 </div>
				 <div class="col s5"></div>
	      	</div>
	      	<form>
		      	<div class="row">
		      		<div class="col s3"></div>
		      		<div class="col s2">
		      			<label>Vardas</label>
		      			<input type="text" name="name"/>
		      		</div>
		      		<div class="col s2">
		      			<label>Pavarde</label>
		      			<input type="text" name="surname"/>
		      		</div>
		 			<div class="col s5"></div>
		      	</div>
		      	<div class="row">
		      		<div class="col s3"></div>
		      		<div class="col s2">
			      		<label>El.paštas</label>
			      		<input type="text" name="newEmail"/>
			      	</div>
			      	<div class="col s2">
			      		<label>Lytis</label>
			      		<p>
			      			<label>
			      				<input class="with-gap" name="group1" type="radio" />
			      				<span>Moteris</span>
			      			</label>
			      			<label>
			      				<input class="with-gap" name="group1" type="radio" />
			      				<span>Vyras</span>
			      			</label>	
			      		</p>
			      	</div>
		      	</div>
		      	<div class="row">
		      		<div class="col s3"></div>
		      		<div class="col s2">
			      		<label>Password:</label>
			      		<input type="text" name="password">
			      	</div>
			      	<div class="col s2">
			      		<label> Gimimo data </label>
			      		<div class="input-field">
			      			<input type="text" class="datepicker">
			      		</div>
			      	</div>	
		      	</div>
		     </form> 	
		</div>
		<!--JavaScript at end of body for optimized loading-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script>
			const Calendar = document.querySelector('.datepicker');
			M.Datepicker.init(Calendar,{
				format:'yyyy-mm-dd'
			});
		</script>
	</body>
</html>