<!-- FAVIcon -->
<link rel="icon" type="image/png" href="images/favicon/favicon.png" />
<link rel="icon" type="image/ico" href="images/favicon/favicon2.ico" />
<!-- CSS -->
<link href="style/lightbox.css" rel="stylesheet" type="text/css"/>
<link href="style/style.css" rel="stylesheet" type="text/css"/>

..<!--script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Open+Sans+Condensed:300&display=swap" rel="stylesheet">

<body>
<h1>Shelkay's Boutique<img src="images/favicon/Logo.jpg" atl="Boutique Logo" title="Shelkay's Boutique" width="80" /></h1>

<div class="container">
<h1> Sorry something went wrong with your submission</h1>
<p>Please try again</p>
</div


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
