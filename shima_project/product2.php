<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link  href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
	<title></title>
	<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0px;
    padding: 0px;
	scroll-padding-top: 2rem;
	scroll-behavior: smooth;
	box-sizing: border-box;
	list-style: none;
	text=text-decoration: none;
}
:root
{
	--main-color: #fd4646;
	--text-color: #171427 ;
	--bg-color: #fff;
}
img{
	width: 100%;

}
body
{
	color: var(--text-color);

}
header
{
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	background: var(--bg-color);
	box-shadow: 0 1px 4px hs1(0 4% 15% / 10%);
}
.nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 20px  0;
	
}
.add-cart
{
	position: absolute;
	bottom: 0;
	right: 0;
	background: var(--text-color);
	color: var(--bg-color);
	padding: 10px;
	cursor: pointer;
}




	</style>
</head>
<body>
    
    <header>
    	<!-- nav -->
    	<div class="nav container">
    		<a href="#" class="logo">Ecommerce</a>
    		<!-- cart-icon -->
    		<i class='bx bx-shopping-bag' id="cart-icon"></i>
    	</div>
    </header>

</body>
</html>