<div class="adduserform_wrapper modal d-none" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
      </div>
      <div class="modal-body">
        <form class="user_form col-8 m-auto" method="post" action="config.php"> 
			<div class="form-group ">
				<input type="text" name="username" id="username" class="form-control" placeholder="Name">
			</div>
			<div class="form-group">
				<input type="email" name="email"  id="email" class="form-control" placeholder="Enter Email Id">
			</div>
			<div class="form-group">
				<input type="password" name="password"  id="password" class="form-control" placeholder="password">
			</div>
			<div class="form-group">
				<input type="text" name="country" class="form-control" id="country" placeholder="Enter Country Name">
			</div>
			<div class="form-group">
				<!-- <select name="state">
					<option>Assam</option>
					<option>Andhra Pradhesh</option>
					<option>Karnataka</option>
					<option>Telanagana</option>
					<option>Delhi</option>
					<option>Gujarat</option>
					<option>Madhya Pradhesh</option>
					<option>Maharastra</option>
					<option>TamilNadu</option>
				</select> -->
				<input type="text" name="state" id="state" class="form-control" placeholder="Enter state Name">
			</div>
			<div class="form-group">
				<input type="text" name="district" id="district" class="form-control" placeholder="Enter your district Name">
			</div>
			<div class="form-group">
				<input type="number" name="contact_number" id="contact_number" class="form-control" placeholder="Enter your Contact number">
			</div>

			<div class="submit_form">
				<button type="submit" class="btn btn-success">Save</button>
				<button class="btn btn-secondary dismiss-modal" name="dismiss-modal">Cancel</button>
			</div>
		</form>
      </div>
    </div>
  </div>
</div>