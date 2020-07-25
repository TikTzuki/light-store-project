<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>Our Products</h2>
		<div class="row">
		<div class="rsidebar col-md-3 span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><i class="glyphicon glyphicon-minus fas fa-sliders-h" aria-hidden="true"></i>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Home Decorates</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lanterns</p></a>
									<a href="#"><p>Wall Lamps</p></a>
									<a href="#"><p>Table Lamps</p></a>
									<a href="#"><p>Selling Lamps</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Festive Needs</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lanterns</p></a>
									<a href="#"><p>Disco Lights</p></a>									
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Kitchen & Dining</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lights & Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Books</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Standing Lamps</p></a>
									<a href="#"><p>Lamps</p></a>
									<a href="#"><p>Led Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">Automotive</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Car Lights</p></a>
									<a href="#"><p>Stick Lights</p></a>
									<a href="#"><p>Thread Lights</p></a>
						     </div>
					      </div>
						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 
				 <section  class="sky-form">
					 <h4><i class="glyphicon glyphicon-minus fas fa-sliders-h" aria-hidden="true"></i>DISCOUNTS</h4>
					 <div> </div>
					 <div class="row row1 scroll-pane">
						 <div class="col col-12">
						 	<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>

				 </section>  				 
				   
				 <section  class="sky-form">
						<h4><i class="glyphicon glyphicon-minus fas fa-sliders-h" aria-hidden="true"></i>Price</h4>
							<ul class="dropdown-menu1">
								 <li><a href="">								               
								<div id="slider-range"></div>							
								<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Dosis-Regular';" />
							 </a></li>			
						  </ul>
				   </section>
				   <!---->
					 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 500, 100000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]> 
					</script>
					 <!---->
  
				   
				 <section  class="sky-form">
						<h4><i class="glyphicon glyphicon-minus fas fa-sliders-h" aria-hidden="true"></i>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-12">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lights (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diwali Lights   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tube Lights      (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>LED Lights        (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bulbs  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ceiling Lights  (30)</label>
								</div>
							</div>
				   </section>
				   <section  class="sky-form">
						<h4><i class="glyphicon glyphicon-minus fas fa-sliders-h" aria-hidden="true"></i>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-12">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Everyday</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anchor</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Philips</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Wipro</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Havells</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Ferolex</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold Medal</label>
								</div>
							</div>
				   </section>				   
		</div>
		<div class="col-md-9 product-model-sec">
					 <a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p1.jpg" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">187.95 &#8363;</span>
								<div class="ofr">
								  <p class="pric1"><del>Rs 280 &#8363;</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div>	
					
					 <a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p2.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">187.95 &#8363;</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p3.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div>	</a>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">187.95 &#8363;</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p4.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">187.95 &#8363;</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280 &#8363;</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p5.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">187.95 &#8363;</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280 &#8363;</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p6.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p7.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p8.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p9.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p10.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>						
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p11.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<a href="?page=detail_product"><div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/p12.jpg" class="img-responsive" alt=""/>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							<button>
								<span>
									<i class="glyphicon glyphicon-zoom-in far fa-lightbulb" aria-hidden="true"></i>
								Quick View
								</span>
							</button>
							</h4>
							</div>
						</div></a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4>Lights #1</h4>								
								<span class="item_price">$187.95</span>	
								<div class="ofr">
								  <p class="pric1"><del>Rs 280</del></p>
						          <p class="disc">[12% Off]</p>
								</div>
								<input type="text" class="item_quantity add-to-cart-quantity" value="0"/>
								<button class="item_add items add-to-cart-more" data-name="Test" data-price="45000"> <span> add </span> </button>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
			</div>

		</div>			 
	    </div>
	</div>

</div>
<!---->