<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME PAGE CASACRAFT HUB </title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 	
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
	
	</head>
	<body>
	
<!-- header section starts -->

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">CasaCraftHub<span>.</span></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
			<a href="itemlist.php">all products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <a href="customerlogin.php" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="customerlogin.php" class="fas fa-user"></a>
        </div>

    </header>

<!-- header section ends -->

<!-- home section starts -->

<div class="popup" id="popup-1">
    <div class="overlay"></div>
    <div class="content">
        <div class="close-btn">&times;</div>
        <h1>Title</h1>
        <p> 50% off for 100 early customers.</p>
</div>
</div>
    
<button onclick="togglePopup()">Show Popup</button>

<section class="home" id="home">

    <div class="content">
        <h3>new furniture</h3>
        <span> more sturdy and easy to assemble </span>
        <p> made by solid wood and ensure the stabilize keep secure </p>
        <a href="itemlist.php" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/video.mp4" loop autoplay muted></video>
            <h3>Home appliances best sellers</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We value uniqueness,whether you're decorating a large house or a modest residence,
                our selection has a variety of solutions to fit your style.
                We encourage you to use our well chosen furniture pieces to discover, try, and express your own style.</p>                
                <p>Order items online from store near & around you. 
                    We deliver items from your neighborhood local joints, your favorite stores, luxurious & elite stores in your area. 
                    We place no minimum order restrictions! Order in as little or as much as you'd like. We'll swiggy it to you!</p>
                    <a href="#" class="btn">learn more</a>
            </div>
    </div>
</section>

<!-- about section ends -->

<!-- icons section starts -->

<section class="icons-container">

    <div class="icons">
        <img src="images/about.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

     <div class="icons">
        <img src="images/contactus.png" alt="">
        <div class="info">
            <h3>10 days returned</h3>
            <span>on all orders</span>

        </div>
     </div>

        <div class="icons">
            <img src="images/shopcart.png" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/payment.png" alt="">
        <div class="info">
            <h3>secure payment</h3>
            <span>protected by paypal</span>
    
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"> latest <span> products </span> </h1>

    <div class="box-container">

        <div class="box">
          <span class="discount">-10%</span>
            <div class="image">
                <img src="images/sofa 8.jpg" alt="">
                <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
        </div>

        </div>
        <div class="content">
            <h3>stockholm sofa</h3>
            <div class="price"> RM50.99 <span> RM69.90</span></div>
        </div>
    </div>

    <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
            <img src="images/sofa 10.jpg" alt="">
            <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
            </div>

        </div>
		
        <div class="content">
            <h3>jattebo sofa</h3>
            <div class="price"> RM80.99 <span> RM100.90</span></div>
        </div>
		</div>

    <div class="box">
        <span class="discount">-60%</span>
        <div class="image">
            <img src="images/sofa 2.jpg" alt="">
            <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
            </div>

        </div>
       

	   <div class="content">
		
            <h3>Ektorp Sofa</h3>
            <div class="price"> RM80.50 <span> RM150.90</span></div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/sofa 4.jpg" alt="">
                <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
                </div>
    
            </div>
            <div class="content">
                <h3>Parup Sofa</h3>
                <div class="price"> RM97.99 <span> RM140.90</span></div>
            </div>

            <div class="box">
            <span class="discount">-40%</span>
            <div class="image">
                <img src="images/sofa 3.jpg" alt="">
                <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
                </div>
    
            </div>
            <div class="content">
                <h3>Glostad Sofa</h3>
                <div class="price"> RM49.00 <span> RM66.00</span></div>
            </div>
			
			<div class="box">
            <span class="discount">-30%</span>
            <div class="image">
                <img src="images/bookcase 3.jpg" alt="">
                <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
                </div>
    
            </div>
            <div class="content">
                <h3>Lily bookcase</h3>
                <div class="price"> RM40.00 <span> RM78.90</span></div>
            </div>

            <div class="box">
            <span class="discount">-50%</span>
            <div class="image">
                <img src="images/cabinet 12.jpg" alt="">
                <div class="icons">
                    <a href="customerlogin.php" class="fas fa-heart"></a>
                    <a href="cart.php" class="cart-btn">add to cart</a>
                    <a href="customerlogin.php" class="fas fa-share"></a>   
                </div>
    
            </div>
            <div class="content">
                <h3>morpho mod cabinet</h3>
                <div class="price"> RM40.50 <span> RM80.00</span></div>
            </div>




</section>
<!-- products section ends -->

<!-- review section starts -->

<section class="review" id="review">

<h1 class="heading"> customer's <span> review </span></h1>

<div class="box-container">

<div class="box">
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p> The product is good! It was very easy to assemble and it can be done by a day</p>
    <div class="user">
        <img src="images/cust4.jpg" alt="">
        <div class="user-info">
            <h3>Nur Shahirah</h3>
            <span>happy customer</span>
        </div>
    </div>
    <span class="fas fa-quote-right"></span>

</div>

<div class="box">
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <p> The material itself was very nice and strong! I can put everything that I want.</p>
    <div class="user">
        <img src="images/cust2.jpg" alt="">
        <div class="user-info">
            <h3>Amirah Najihah</h3>
            <span>happy customer</span>
</div>
    </div>
    <span class="fas fa-quote-right"></span>

</div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p> I can handle it by myself because it is so easy to get through the manual.</p>
        <div class="user">
            <img src="images/cust5.jpg" alt="">
            <div class="user-info">
                <h3>Alies Safraa</h3>
                <span>happy customer</span>
            </div>
        </div>
    <span class="fas fa-quote-right"></span>

</section>


<!-- review section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading"> <span> contact </span> us </h1>

    <div class="row">

        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="number" class="box">
            <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/logo.jpg" alt="">
        </div>
    </div>

</section>


<!-- contact section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
			<a href="itemlist.php">all products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="customerlogin.php">my account</a>
            <a href="view_items.php">my order</a>
            <a href="customerlogin.php">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Kelantan</a>
            <a href="#">Kedah</a>
            <a href="#">Kuala Lumpur</a>
            <a href="#">Terengganu</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+60-19503586</a>
            <a href="#">micasacrafthub@gmail.com</a>
            <a href="#">Kota Bharu, Kelantan</a>
            <img src="images/pay.jpg" alt="">
        </div>
    </div>

    <div class="credit"> created by <span> CasaCraftHub Sdn Bhd </span> | all right reserved </div>




</section>



<!-- footer section ends -->




	</body>
	</html>
	