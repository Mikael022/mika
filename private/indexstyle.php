
	
<style type="text/css">
  body{
    background-color: #262626;

border: 50px solid black;
margin: 0;
  
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
height: 90%;
max-height: 90%;
width: 95%;
max-width: 95%;
position: fixed;
  }

.button123 {
	/* 	design the outer circle */
	height: 35px;
  width: 40px;
	border-radius: 50%;
	border: 1px solid #ddd;
	box-shadow: 0 0 5px 0px #888;
	background-color:white;

	/* 	required to position children elements */
	position: relative;

	/* 	required to center elements*/
	display: grid;
	place-items: center;
}

.button123::before {
	/* 	pseudo-elements don't display if content property is not declared */
	content: "";

	/* 	design the inner-ring */
	width: 50%;
	height: 50%;
	border: 1px solid black;
	border-radius: 50%;
	position: absolute;
}

.light {
	/* 	design the vertical light */
	height: 30%;
	width: 1px;
	background: black;
	border-radius: 10px;

	/* 	position the light correctly */
	position: absolute;
	top: 5px;

	/* 	required to give white-space to inner-ring */
	box-shadow: 0 0 0 1px #fff;
}

.button123:hover {
	cursor: pointer;
}

.button123:active {
	box-shadow: 0 0 10px 0px #888 inset;
}

.button123:active .light {
	background: green;
}

.button123:active::before {
	border-color: green;
}
.rectangle {
  height: 1%;
  width: 20%;
  background-color: #555;

  margin: 0;
    position: absolute;
    top:-3.5%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
}
.rectangle1 {
  height: 30px;
  width: 40px;
  background-color: gray;
   border: 1px solid black;
  margin: 0;
    position: absolute;
    top: 105%;
    left: 65%;    
    transform: translate(-50%, -50%)  ;
}
.triangle {
  width: 0;
  height: 0;

  border-top: 18px solid transparent;
  border-right: 41px solid gray;
  border-bottom:16px solid transparent;
  margin: 0;
    position: absolute;
   top: 105%;
    left: 35%;    
    transform: translate(-50%, -50%)  ;
}
</style>
