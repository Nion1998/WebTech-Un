<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content{
        width: 100%;
        height: 87vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color:indigo;
        font-size: 2rem;
        font-family: sans-serif;
    }
	.card-container{
      width: 80%;
      height: 100%;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-evenly;
	  flex-direction:flex-end;

    }

    .card{
      display: block;
	  margin-left: 80rem;
	  margin-bottom: 30rem;
	  position:absolute;
	  border: 3px solid dodgerblue;
	  border-radius: 1rem;
	  height: 300px;
	  width: 400px;
	  background-color: lightgray;
	  padding: 0.5rem;
    }
	
	p{
		display:block;
		font-size: 1.2rem;
		padding-top:1rem;
	}
	
	h5{
		font-size: 2rem;
		text-align: center;
		background-color: gray;
	}
	
</style>
<body>
    <?php include("nav.php") ?>
    <div class="content">
      <h1>Welcome To CBS</h1>
		<div class = "card">
			<h5>Notice</h5>
			<p><?php $file = fopen("mycv.txt","r");
          echo fgets($file);
            fclose($file);
                    ?></p>
		</div>
	</div>			
     					
    <?php include("footer.php") ?>
    
</body>
</html>