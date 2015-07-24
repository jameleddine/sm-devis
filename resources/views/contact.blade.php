@extends('template')

@section('content')
	
		<div class="Contact_Form">
			<div class="description_Contact">

Société : SM Services 

Site : www.sm-devis.fr 
</div>
			<div class="container form">
				<div class="panel panel-default" style="margin:0 auto;width:500px">
					<div class="panel-heading">
						<h2 class="panel-title">Formulaire de contact</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="./contact" class="form-horizontal" role="form">
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
							<div class="form-group">
								<label for="name" class="col-lg-2 control-label">Nom</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="phone" class="col-lg-2 control-label">Téléphone</label>
								<div class="col-lg-10">
									<input type="number" class="form-control" id="phone" name="phone" placeholder="Votre Téléphone">
								</div>
							</div>
							<div class="form-group">
								<label for="message" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="message" name="message" placeholder="Votre message..." required></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" class="btn btn-default">Envoi message
										</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	

@stop