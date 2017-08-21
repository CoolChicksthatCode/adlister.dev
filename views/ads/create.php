<!--Page for creating new advertisement listings-->

<form>
	<br>
	<div class="col-md-6 col-md-offset-3">
		<h2>Add a new item here!</h2>
		<!-- Name -->
	  	<div class="form-group">
	    	<label for="name">Name</label>
	    	<input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name of the Item">
	  	</div>
	  	<!-- Price -->
	  	<div class="form-group">
	    	<label for="price">Price</label>
	   		<input type="price" class="form-control" id="exampleFormControlInput2" placeholder="Price of the Item ($)">
	  	</div>
	  	<!-- Seller Info -->
	  	<div class="form-group">
	    	<label for="sellerinfo">Seller Info</label>
	   		<input type="sellerinfo" class="form-control" id="exampleFormControlInput3" placeholder="Seller Info">
	  	</div>
	  	<!-- Description -->
		<div class="form-group">
	   		<label for="description">Item Description</label>
	    	<br>
	    	<textarea class="form-control col-md-6-offset-3" id="description" placeholder="Descibe the item you are listing for sale" rows="3"></textarea>
	  	</div>
	  	<!-- Photo File Input -->
		<div class="form-group">
	    	<label for="fileinput">Example file input</label>
	    	<input type="file" class="form-control-file" id="fileinput">
	  	</div>
	  	<!-- Submit Button -->
		<button type="button" class="btn btn-default" >Post Item</button>
	</div>
</form>
