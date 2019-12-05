
  <!-- FAVIcon -->
<link href="icon" href="images/logo.png" sizes="10x10" />
<link rel="icon" href="images/favicon/favicon.ico" type="img/ico"  />
  <!-- CSS -->
<link href="style/style.css" rel="stylesheet" type="text/css"/>

<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Open+Sans+Condensed:300&display=swap" rel="stylesheet">

  <!-- Scripts -->
<script type="text/javascript" scr="scripts/main.js"></script>
</head>


<h1>Shelkay's Boutique<img src="images/favicon/logo.jpg" atl="Boutique Logo" title="Shelkay's Boutique" width="60" /></h1>
  <header class="sub-page">
    <h2>Mailing List Sign up</h2>
  </header>


  <div class="forminfo">
  	<h1>Missing fields</h1>
  	<p>Sorry, you have not completed all of the required fields.</p>
  	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  	<ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  </div>


<footer class="sub">
  <nav>
    <table>
      <tr>
      <td><a href="index.html">Home</a></td>
      <td><a href="products.html">Products</a></td>
      <td><a href="services.html">Services</a></td>
      <td><a href="about.html">About</a></td>
      <td><a href="contact.html">Contact</a></td>
    </tr>
    </table>
  </nav>

  <table>
    <tr>
      <td>Phone</td>
      <td><a href="tel:702.969.3029">702.969.3029</a></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><a href="email:shelkay21@yahoo.com">shelkay21@yahoo.com</a></td>
    </tr>
  </table>
</footer>
