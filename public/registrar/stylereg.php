<style type="text/css">

.table1{
    height:100%;
}

:root {
    --background: #1a1a2e;
    --color: #ffffff;
    --primary-color: #0f3460;
}

* {
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    margin: 0;
    box-sizing: border-box;
    font-family: "poppins";
    background-image: url("ro-broadway-900x450.JPG");
    background-size: cover;
    color: var(--color);
    letter-spacing: 1px;
    transition: background 0.2s ease;
    -webkit-transition: background 0.2s ease;
    -moz-transition: background 0.2s ease;
    -ms-transition: background 0.2s ease;
    -o-transition: background 0.2s ease;
}

a {
    text-decoration: none;
    color: var(--color);
}

h1 {
    font-size: 2.5rem;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    position: relative;
    width: 22.2rem;
}
.form-container {
    border: 1px solid hsla(0, 0%, 65%, 0.158);
    box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    background-color: #0b002e;
    backdrop-filter: blur(20px);
    z-index: 99;
    padding: 2rem;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
}

.login-container form input {
    display: block;
    padding: 14.5px;
    width: 100%;
    margin: 2rem 0;
    color: var(--color);
    outline: none;
    background-color: #9191911f;
    border: none;
    border-radius: 5px;
    font-weight: 500;
    letter-spacing: 0.8px;
    font-size: 15px;
    backdrop-filter: blur(15px);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
}

.login-container form input:focus {
    box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.2);
    animation: wobble 0.3s ease-in;
    -webkit-animation: wobble 0.3s ease-in;
}
table{
    background-color: white;
    color:black;
       border-color: purple;

}
th{
    background-color: black;
    color:white;
}
.login-container form subnmit {
    background-color: var(--primary-color);
    color: var(--color);
    display: block;
    padding: 13px;
    border-radius: 5px;
    outline: none;
    font-size: 18px;
    letter-spacing: 1.5px;
    font-weight: bold;
    width: 100%;
    cursor: pointer;
    margin-bottom: 2rem;
    transition: all 0.1s ease-in-out;
    border: none;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
}

.login-container form button:hover {
    box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.15);
    transform: scale(1.02);
    -webkit-transform: scale(1.02);
    -moz-transform: scale(1.02);
    -ms-transform: scale(1.02);
    -o-transform: scale(1.02);
}

.circle {
    width: 8rem;
    height: 8rem;
    background: var(--primary-color);
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    position: absolute;
}

.illustration {
    position: absolute;
    top: -14%;
    right: -2px;
    width: 90%;
}

.circle-one {
    top: 0;
    left: 0;
    z-index: -1;
    transform: translate(-45%, -45%);
    -webkit-transform: translate(-45%, -45%);
    -moz-transform: translate(-45%, -45%);
    -ms-transform: translate(-45%, -45%);
    -o-transform: translate(-45%, -45%);
}

.circle-two {
    bottom: 0;
    right: 0;
    z-index: -1;
    transform: translate(45%, 45%);
    -webkit-transform: translate(45%, 45%);
    -moz-transform: translate(45%, 45%);
    -ms-transform: translate(45%, 45%);
    -o-transform: translate(45%, 45%);
}

.register-forget {
    margin: 1rem 0;
    display: flex;
    justify-content: space-between;
}
.opacity {
    opacity: 0.6;
}

.theme-btn-container {
    position: absolute;
    left: 0;
    bottom: 2rem;
}

.theme-btn {
    cursor: pointer;
    transition: all 0.3s ease-in;
}

.theme-btn:hover {
    width: 40px !important;
}

@keyframes wobble {
    0% {
        transform: scale(1.025);
        -webkit-transform: scale(1.025);
        -moz-transform: scale(1.025);
        -ms-transform: scale(1.025);
        -o-transform: scale(1.025);
    }
    25% {
        transform: scale(1);
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
    }
    75% {
        transform: scale(1.025);
        -webkit-transform: scale(1.025);
        -moz-transform: scale(1.025);
        -ms-transform: scale(1.025);
        -o-transform: scale(1.025);
    }
    100% {
        transform: scale(1);
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
    }
}
.header{
color:White;
text-align: center;
  background-image: linear-gradient(to left, #771287, #25287a);
width:100%;
height:10%;
    border:4px solid black;

}

.header a {
  float: left;
  color: White;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header-right {
  float: right;
}

.pow{
    max-width: 400px;
    margin:0 auto;
    padding: 20px;
    background: black;
    border:#ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
}
.foot{
      border:2px solid black;
    align-content: center;
    position:fixed;
    margin-top: 38%;
    color:White;
  background-image: linear-gradient(to left, #771287, #25287a);
    left:0;
    bottom:0;
    width: 100%;
    height: 3%;
    text-align: center;
}
.foot p{
    padding-top:2%;
}
.div-44{
          margin: 0;
    position: absolute;
    top: 4.8%;
    left: 95.1%;    
    transform: translate(-50%, -50%)  ;
}
.div-55{
           margin: 0;
    position: absolute;
    top: 90%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
}
input[type=text] {
height:60px;
width: 200px;
font-size: 20px;
}
.rec{ 
  
  width: 250px;
  height: 170px;
  border: 5px solid purple;
  background-color: black;
  padding: 280px;
  margin: 20px;
  color:maroon;
  text-shadow: 2px 2px white;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;      
        transform: translate(-50%, -50%)  ;}   
.hell{
           margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%)  ;
}        
.div-11{
              margin: 0;
    position: absolute;
    top: 4.8%;
    left: 6.2%;    
    transform: translate(-50%, -50%)  ;
}
.div-22{
              margin: 0;
    position: absolute;
    top: 4.8%;
    left: 18.3%;    
    transform: translate(-50%, -50%)  ;
}
.div-33{
              margin: 0;
    position: absolute;
    top: 4.8%;
    left: 31.3%;    
    transform: translate(-50%, -50%)  ;
}
.div-69{
          margin: 0;
    position: absolute;
    top: 4.8%;
    left: 84.3%;    
    transform: translate(-50%, -50%)  ;
}
.div-79{
          margin: 0;
    position: absolute;
    top: 4.8%;
    left: 72.3%;    
    transform: translate(-50%, -50%)  ;
}
.div-uno{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 20%;    
    transform: translate(-50%, -50%);
}

.div-dos{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%);
}
.div-tres{
    margin: 0;
    position: absolute;
    top: 50%;
    left: 80%;    
    transform: translate(-50%, -50%);
}
.contains{
        border: 1px solid hsla(0, 0%, 65%, 0.158);
    box-shadow: 0 0 36px 1px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    background-color: #0b002e;
    backdrop-filter: blur(200px);
    padding: 100px;
    border-color: #eb34e8;
width: 50%;
  margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;    
    transform: translate(-50%, -50%);
}
</style>