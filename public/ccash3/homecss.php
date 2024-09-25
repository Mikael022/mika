<style type="text/css">
body{
background-color: #FFCDCD ;
  color:#FF5959;
  font: 16px Helvetica;
}
ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  background-color:maroon ;
  border-radius: 50px;
  border-color: red;
   box-shadow: 10px 10px 20px black;
  padding: 2px 1px;
  -webkit-backdrop-filter: blur(5px);
   backdrop-filter: blur(5px);
   margin-left: 10%;
   margin-right: 10%;
}

li {
  float: left;
  margin-left: 250px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #C70039;

}
table {
    width: 50%;
    height:50%;
    display:block;
      margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
    background-color: #F8FFD2;
     border-color: maroon;
box-shadow: 10px 10px 20px black;
}
thead {

    display: inline-block;
    width: 100%;
    height: 20px;

}
th{
  background-color: maroon;
  color:#F8FFD2;
}
td{
  color:;
}
tbody {
    height: 475px;
    display: inline-block;
    width: 100%;
    overflow: auto;

}
table, th, td {    
border: 1px solid maroon;  
margin-left: auto;  
margin-right: auto;  
border-collapse: collapse;    
width: 1000px;  
 
font-size: 20px;  
border-color: blackpurple;

}    
.div-balance{
border-color: blackpurple;
background-color: #F8FFD2;
border: 1px solid maroon;
border-radius: 0.5%;
 padding: 20px;

    margin: 0;
    position: absolute;
    top: 15%;
    left: 50%;      
    transform: translate(-50%, -50%);
  font-size: auto;

}


input[type=submit]{
padding:1% 5%;
 background-color: #FF5959;
border:0;
color:white;
font-family:helvetica;
font-size:12px;
letter-spacing: 3px;
position: positive ;
transition: all .4s cubic-beizer(0.645,0.045,0.355,1);
cursor:pointer;
display:block;
    border:2px solid maroon;
    border-radius: 10px;

}
@media(width < 750px){

div.div-balance{
    font-size: 200%;
     width: 10%;
     height: 2%;
  }
}
//Responsiveness
@media(width < 750px){
  div.div-balance{
    font-size: 80%;
    width: 10%
  }
}
}
</style>