<?php
/** 
 * Template Name: Factory Example
 */

get_header(); ?>
<div class="row">
<div class="col-md-4"> 
   <form action="" id="factory_example"> 	
   	 <!-----   Display All address List  --------->
	   	  <div>
			 <h4> factory example </h4>
			 </br>
			 <h5> Material quantity (In Kilogram ) </h5>
		
			<input type="number" class="btn btn-lg btn-success" id="quantity" name="quantity" value ="" min="0"/>

			   <select class="js-example-basic-single form-control" name="factory_type" id="factory_type">
			      <option value = "1" id="by_road">Delivery By Road
			      </option><option value = "2" id="by_sea">Delivery By Sea 
			      </option>
		      </select>
		</div>
     
		<div>
			<br>
			<input type="submit" class="btn btn-lg btn-success" id="factory_data" value ="SEND Material">
		</div>

   </form>
   </div>

   <div class="containerData"></div>
<?php
get_footer();