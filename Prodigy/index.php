<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prodigy</title>
	<base href="#" ></base>
    <meta name="title" content="Prodigy 2015" />
	<meta name="description" content="Recreate an iOS7 Airbnb App Side Menu Animation using jQuery and CSS3" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='fly/level/fsm.css' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="fly/level/jquery.fsm.js"></script>
  <style>
    html {
      height: 100%;
    }
    body {
      background-image:url("image/stud.jpg");
        background-attachment: fixed;
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
    }
    
    .wrapper {
    	height: auto !important;
      
    background: -webkit-radial-gradient(red, green, #F0CE3B); /* Safari 5.1 to 6.0 */
    background: -o-radial-gradient(red, green, #F0CE3B); /* For Opera 11.6 to 12.0 */
    background: -moz-radial-gradient(grey,skyblue, #F0CE3B); /* For Firefox 3.6 to 15 */
    background: radial-gradient(grey,skyblue, #F0CE3B); /* Standard syntax (must be last) */    
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 100px;
      color: #000;
      margin-bottom: 5px;
      font-size: 70px;
      letter-spacing: -4px;
    }
    h2 {
      letter-spacing: 2px;
      color: #000;
      font-weight: 100;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #00B0FF;
      font-family: 'Pacifico';
      font-size: 24px;
      margin-top: 15px;
      position: fixed;
      top: 62px;
      left: 25px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
        
      width: 100%;
      margin: 0 auto;
    }
    #grad1 {
    
    }
    
    .main h1 {
      padding:20px 50px 10px;
      float: left;
      width: 100%;
      font-size: 60px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      margin: 0;
      padding-top: 25px;
      font-family: 'open sans';
      letter-spacing: -3px;
      text-transform: uppercase;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: #00B0FF;
    }
    .clear {
      width: auto;
    }
    .btn:hover, .btn:hover {
      background: #00CDFF;
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      background: #f6f6f6;
      text-align: center;
      color: #000;
      padding: 10px;
      margin: 0 0 40px 0;
      float: left;
      width: 100%;
      letter-spacing: 1px;
    }
    .credit a {
      color: #000;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: #00B0FF;
      font-weight: bold;
      font-size: 13px;
      color: #fff;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      background: #00CDFF;
    }
    
    .fsm-sidebar {
      position: fixed;
    }
    
    .fsm-button {
      font-size: 24px;
      color: #000;
      top: 36px;
      line-height: 100%;
    }
    
    .page-container {
      max-width: 700px;
      margin: auto;
    }
    
    .page-container p{
      font-size: 21px;
      font-weight: 100;
      line-height: 180%;
    }
    
    .page-container h3 {
      font-family: "noto serif";
      font-size: 23px;
    }
    
	</style>
	<script>
	  $(document).ready( function() {
	    $(".sidemenu").fly_sidemenu();
	  });
		
	</script>
    <!---->
        <link rel="stylesheet" href="head/demo/css/normalize.css" />
    	<link rel="stylesheet" href="head/demo/css/main.css" />
   		<link rel="stylesheet" href="head/demo/css/headhesive.css" />

</head>
<body>
    
    <div class="pointer"></div>
  <div class="wrapper">
	  <div class="main">
	    <div class="header">
            <header class="banner" style="z-index:5;" >
    			<img src="image/header.png" id="head_img" />
    			
    		</header>

  	     </div>
  	  
      <div class="page-container">
        <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
        <h3>1914 translation by H. Rackham</h3>
        <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
        <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
        <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
        <h3>1914 translation by H. Rackham</h3>
        <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."</p>
        </div>

        <ul class="sidemenu">
          <li><a href="#d1">Home</a></li>
          <li><a href="#d2">Events</a></li>
          <li><a href="#d3">Workshops</a></li>
          <li><a href="#d4">Labyrinth</a></li>
          <li><a href="#d5">About</a></li>
          <li><a href="#d6">Contact</a></li>
          <li><a href="#d7">Delta</a></li>
          <li><a href="#d8">Prodigy</a></li>
        </ul>
      </div>
    </div>
    
  </div>
<script type="text/javascript" src="head/dist/headhesive.js"></script>
	    <script>

	        // Set options
	        var options = {
	            offset: '#showHere',
	            classes: {
	                clone:   'banner--clone',
	                stick:   'banner--stick',
	                unstick: 'banner--unstick'
	            }
	        };

	        // Initialise with options
	        var banner = new Headhesive('.banner', options);
		</script>
</body>
</html>
