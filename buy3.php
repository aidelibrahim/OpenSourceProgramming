<!DOCTYPE html>
<html lang="en">
<head>
  <title>WAA Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  
  <style>
  
.logo-button {
  background: url('img/logo1.png')  center no-repeat;background-size: 200% 200%;
  border: none;
    color: white;
    padding: 14px 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
     float: left;
}

.button2 {
    background-color: #b30000; 
    color: white; 
    border: 2px solid #b1b1cd;
    padding: 14px 40px;
    font-size: 20px;
    float: left;
}

.button2:hover {
    background-color: #000000;
    color: #ff1a1a;
}

input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    background-color: white;
    background-image: url('img/se.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 14px 40px 14px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  </style>
  
</head>
<body>

<p>
<a href="https://www.google.com/">
<input type="button" class="logo-button" value="" />
</a>

<a href="https://www.google.com/">
<button class = "  button2">Login</button>
</a>

<a href="https://www.google.com/">
<button class = " button2">Cart</button>
</a>

<a href="https://www.google.com/">
<button class = " button2">About Us</button>
</a>

<a href="https://www.google.com/">
<button class = " button2">Profile</button>
</a>

<button class = " button">
<input type="text" name="search" placeholder="Search.."/>
</button>

</p>

<div class="container">
  <h2>Groceries</h2>
  <p>20 items found</p>
  
  <!--nescafe-->
  <!--choki2-->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a>
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal" src="img/nescafe.jpg" alt="Lights" style="width:100%" width="100" height="300">
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				  <!--popup content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4>NESCAFE Original 300g</h4>
					</div>
					<div class="modal-body">
					  <p>CHOKI CHOKI Chocolate Flavor</p>
					  <p>Choki Choki Spread it on bread spread or just eat the yummy paste without anything. Taste yummy & delicious for all ages.</p>
					  <h4>About the product:</h4>
					  <ul>
						<li>6packs with 5 sticks in it</li>
						<li>Chocolate-y taste</li>
						<li>Delicious</li>
						<li>Halal</li>
					  </ul>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
					  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					</div>
				  </div>
				  
				</div>
			  </div>
		  <div class="caption">
			<h4><b>NESCAFE Original 300g</b></h4>
            <p>&#9733;&#9733;&#9733;&#9733;&#9733;(4 reviews)</p>
			<h4>RM 5.90 &nbsp;<mark>-25%</mark></h4>
          </div>
        </a>
      </div>
    </div>
	<!--ovaltine-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a>
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModala" src="img/ovaltine.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModala" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4>OVALTINE Chocolate Flavor 1kg</h4>
						</div>
						<div class="modal-body">
						  <p>Enriched with creamy goodness, FN's range of Sweetened Condensed Milk represents the finest quality of condensed milk and creamer. </p>
						  <h4>About the product:</h4>
						  <ul>
							<li>6 tins</li>
							<li>Full carbohidrate for kids and adults</li>
							<li>Dont eat just like that</li>
							<li>Diabetes</li>
						  </ul>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				  </div>
			  <div class="caption">
				<h4><b>OVALTINE Chocolate Flavor 1kg</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;(30 reviews)</p>
				<h4>RM 13.90 &nbsp;<mark>-30%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
	<!--perencah-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalb" src="img/perencah.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModalb" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">ADABI Perencah Nasi Goreng 6x10g</h4>
						</div>
						<div class="modal-body">
						  <p>As with every culture, delicious food brings people together. Walking hand in hand with our consumers all these years, Kelloggs is the perfect embodiment of a culinary best friend that brings flavorsome variety in a smart convenient way through its range of products and inspiring recipes. Every meal together with family and friends is made extra special.</p>
						  <h4>About the product:</h4>
						  <ul>
							<li>1kg pack</li>
							<li>Cornflakes good for breakfast, lunch, dinner, supper, anytime</li>
							<li>Suitable for any kind of servings</li>
						  </ul>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				  </div>
			  <div class="caption">
				<h4><b>ADABI Perencah Nasi Goreng 6x10g</b></h4>
				<p>&#9733;&#9733;&#9733;&#9734;&#9734;(200 reviews)</p>
				<h4>RM 5.90 &nbsp;<mark>-20%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
  </div>
  
  <!--second row-->
  <!--ruski-->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a target="_blank">
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalc" src="img/ruski.jpg" alt="Lights" style="width:100%" width="100" height="300">
			  <div class="modal fade" id="myModalc" role="dialog">
				<div class="modal-dialog">
				  <!--popup content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">RUSKI Tomyam 6packs</h4>
					</div>
					<div class="modal-body">
					  <p>Jalen adalah jenama Masakan, Makanan, Minuman yang terdiri daripada Kicap Manis, Kicap Lemak, Kicap Masin, Kicap Pekat, Sos Cili.</p>
						  <p>a</p>
						  <h4>About the product:</h4>
						  <ul>
							<li>Botol besar 1kg</li>
							<li>Sesuai untuk dihidang bersama nasi bujang</li>
							<li>Imported from Selayang, UK</li>
						  </ul>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				  
				</div>
			  </div>
		  <div class="caption">
            <h4><b>RUSKI Tomyam 6packs</b></h4>
            <p>&#9733;&#9733;&#9733;&#9734;&#9734;(8 reviews)</p>
			<h4>RM 4.90 &nbsp;<mark>-10%</mark></h4>
          </div>
        </a>
      </div>
    </div>
	<!--sanremo-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModald" src="img/sanremo.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModald" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">SAN REMO Spaghetti Angel Hair 100g</h4>
						</div>
						<div class="modal-body">
						  <p>Indomie Mi Goreng is an instant noodles product line made under the Indomie brand by the Indofood company, the world's largest instant noodle manufacturer.</p>
						  <h4>About the product:</h4>
						  <ul>
							<li>Pack of 6</li>
							<li>Just like in advertisement</li>
							<li>Suitable for students!</li>
							<li>Halal from Indonesia</li>
						  </ul>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				  </div>
			  <div class="caption">
				<h4><b>SAN REMO Spaghetti Angel Hair 100g</b></h4>
				<p>&#9733;&#9733;&#9733;&#9734;&#9734;(10 reviews)</p>
				<h4>RM 6.50 &nbsp;<mark>-20%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
	<!--spritzer-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModale" src="img/spritzer.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModale" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">SPRITZER Mineral Water 6x100ml</h4>
						</div>
						<div class="modal-body">
						  <p>Mirinda is a brand of soft drink originally created in Spain in 1959, with global distribution. Its name means admirable in Esperanto, spoken by its creator.</p>
						  <h4>About the product:</h4>
						  <ul>
							<li>4 bottles x 200ml</li>
							<li>Taste sooo good</li>
							<li>Diabetes</li>
							<li>Suitable for parties</li>
						  </ul>
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-default" data-dismiss="modal">Add to Cart</button>
						  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					  </div>
					  
					</div>
				  </div>
			  <div class="caption">
				<h4><b>SPRITZER Mineral Water 6x100ml</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;(6 reviews)</p>
				<h4>RM 11.90 &nbsp;<mark>-20%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
  </div>
  
	<ul class="pager">
		<li class="previous"><a href="buy2.php">Previous</a></li>
			<ul class="pagination">
				<li><a href="buy1.php">1</a></li>
				<li><a href="buy2.php">2</a></li>
				<li class="active"><a href="#">3</a></li>
			</ul>
		<li class="next"><a href="#">Next</a></li>
	</ul>
	
	
</div>

</body>
</html>


