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

.myModal {
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
  
  <!--first row-->
  <!--choki2-->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a>
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal" src="img/choki2.jpg" alt="Lights" style="width:100%" width="100" height="300">
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				  <!--popup content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4>CHOKI CHOKI Chocolate 6packs</h4>
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
			<h4><b>CHOKI CHOKI Chocolate 6packs</b></h4>
            <p>&#9733;&#9733;&#9733;&#9733;&#9733;(40 reviews)</p>
			<h4>RM 7.90 &nbsp;<mark>-15%</mark></h4>
          </div>
        </a>
      </div>
    </div>
	<!--creamer-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a>
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModala" src="img/creamer.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModala" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4>FN Sweetened Creamer 6x100ml</h4>
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
				<h4><b>FN Sweetened Creamer 6x100ml</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9733;(3 reviews)</p>
				<h4>RM 15.90 &nbsp;<mark>-30%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
	<!--kelloggs-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalb" src="img/kelloggs.jpeg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModalb" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">KELLOGG'S Cornflakes Original 1kg</h4>
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
				<h4><b>KELLOGG'S Cornflakes Original 1kg</b></h4>
				<p>&#9733;&#9733;&#9733;&#9734;&#9734;(20 reviews)</p>
				<h4>RM 10.90 &nbsp;<mark>-20%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
  </div>
  
  <!--second row-->
  <!--jalen-->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a target="_blank">
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalc" src="img/jalen.jpg" alt="Lights" style="width:100%" width="100" height="300">
			  <div class="modal fade" id="myModalc" role="dialog">
				<div class="modal-dialog">
				  <!--popup content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">JALEN Kicap Manis 1kg</h4>
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
            <h4><b>JALEN Kicap Manis 1kg</b></h4>
            <p>&#9733;&#9733;&#9733;&#9734;&#9734;(1 reviews)</p>
			<h4>RM 8.90 &nbsp;<mark>-10%</mark></h4>
          </div>
        </a>
      </div>
    </div>
	<!--indomie-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModald" src="img/indomie.png" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModald" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">INDOMIE Mi Goreng Original 6packs</h4>
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
				<h4><b>INDOMIE Mi Goreng Original 6packs</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9733;(100 reviews)</p>
				<h4>RM 3.50 &nbsp;<mark>-10%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
	<!--mirinda-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModale" src="img/mirinda.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModale" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">MIRINDA Soft Drinks 4x200ml</h4>
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
				<h4><b>MIRINDA Soft Drinks 4x200ml</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;(10 reviews)</p>
				<h4>RM 11.90 &nbsp;<mark>-40%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
  </div>
  
  <!--third row-->
  <!--misedaap-->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a target="_blank">
          <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalf" src="img/misedaap.png" alt="Lights" style="width:100%" width="100" height="300">
			  <div class="modal fade" id="myModalf" role="dialog">
				<div class="modal-dialog">
				  <!--popup content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">MI SEDAAP Original 6packs</h4>
					</div>
					<div class="modal-body">
					  <p></p>
					  <h4>About the product:</h4>
						  <ul>
							<li>Pack of 6</li>
							<li>Better than Indomie</li>
							<li>Better take with water</li>
							<li>Sedap gila</li>
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
				<h4><b>MI SEDAAP Original 6packs</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9733;(1400 reviews)</p>
				<h4>RM 3.30 &nbsp;<mark>-25%</mark></h4>
          </div>
        </a>
      </div>
    </div>
	<!--mrpotato-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalg" src="img/mrpotato.PNG" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModalg" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">MR POTATO Rice Crisps 4 tins</h4>
						</div>
						<div class="modal-body">
						  <p>Mister potato sour cream and onion potato crisps are full of delectable crunch and mild, savory onion flavor; They are made from 100% imported potatoes. </p>
						  <h4>About the product:</h4>
						  <ul>
							<li>4 tins of greatness</li>
							<li>Good for students</li>
							<li>Potatoooo</li>
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
				<h4><b>MR POTATO Rice Crisps 4 tins</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;(12 reviews)</p>
				<h4>RM 18.90 &nbsp;<mark>-15%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
	<!--nabati-->
	<div class="col-md-4">
		  <div class="thumbnail">
			<a target="_blank">
			  <img type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModalh" src="img/nabati.jpg" alt="Lights" style="width:100%" width="100" height="300">
				  <div class="modal fade" id="myModalh" role="dialog">
					<div class="modal-dialog">
					  <!--popup content-->
					  <div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">NABATI Cheese Sticks 300g</h4>
						</div>
						<div class="modal-body">
						  <p>Richeese Nabati. The most delicious cheese flavored wafer that contains vitamin A, B1, B2, B6, B12. </p>
						  <h4>About the product:</h4>
						  <ul>
							<li>300g got sticks inside</li>
							<li>Cheese</li>
							<li>Suitable for students</li>
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
				<h4><b>NABATI Cheese Sticks 300g</b></h4>
				<p>&#9733;&#9733;&#9733;&#9733;&#9734;(5 reviews)</p>
				<h4>RM 10.90 &nbsp;<mark>-10%</mark></h4>
			  </div>
			</a>
		  </div>
	</div>
  </div>
  
	<ul class="pager">
		<li class="previous"><a href="buy1.php">Previous</a></li>
			<ul class="pagination">
				<li><a href="buy1.php">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="buy3.php">3</a></li>
			</ul>
		<li class="next"><a href="buy3.php">Next</a></li>
	</ul>
	
	
</div>

</body>
</html>


