<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>javaboi</title>
    <style>
        *{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    box-sizing: border-box;
    background-color: #C7F3C0;
}

header {

position: fixed;
top: 0;
left: 0; width: 100%;
padding: 20px 100px; background:#4EB33E;
display: flex;
justify-content: space-between;
align-items: center;
z-index: 99;
}
.logo {
    font-size: 2em;
    color:#fff;
    user-select: none;

}
.navigation a{
    position: relative;
    font-size: 1.1em;
    color:#fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}

.navigation a::after {
    content:'';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .5s; 
}
.navigation a:hover::after {
    transform-origin: left;
    transform: scaleX(1);
}
.navigation .btnlogin-popup {
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    cursor: pointer;
    font-size: 1.1em;
    color:#fff;
    font-weight: 500;
    margin-left: 40px;
}
.navigation .btnlogin-popup:hover {
    background:  #fff;
    color: #162938
}

.wrapper {
    position: relative;
    width: 400px;
    height: 400px;
    background: transparent;
    border: 2px solid rgba(225, 225, 225, 5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, 5);
    display: flex;
    justify-content: center;
    align-items: center;
}

 /******competency page starts*****/
 .competency_box .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4EB33E;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.competency_box .btn:hover {
    background-color: #4EB33E;
}

/* Add the following CSS to style the logout button */

.btnlogout {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4EB33E;
    color: white;
    text-decoration: none;
    border: 2px #fff;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btnlogout:hover {
    background-color: #fff;
    color: #162938;
}

/*******competency page ebd here*****/

/******* TOPIC LEVEL PAGE ******/

.GO-box {
    display: inline-block;
    width: 100px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    background-color: #4EB33E;
    color: white;
    border-radius: 5px;
    text-align: left;
    line-height: 30px;
    text-decoration: none;
    padding-left: 26px; /* Adjust the left padding for indentation */
}
.level-box {
    display: inline-block;
    width: 100px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    background-color: #4EB33E;
    color: white;
    border-radius: 5px;
    text-align: left;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px; /* Adjust the left padding for indentation */
}
.level2-box {
    display: inline-block;
    width: 100px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    background-color: #4EB33E;
    color: white;
    border-radius: 5px;
    text-align: left;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px; /* Adjust the left padding for indentation */
}
.level3-box {
    display: inline-block;
    width: 100px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    background-color: #4EB33E;
    color: white;
    border-radius: 5px;
    text-align: left;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px; /* Adjust the left padding for indentation */
}
.level4-box {
    display: inline-block;
    width: 100px; /* Adjust the width as needed */
    height: 30px; /* Adjust the height as needed */
    background-color: #4EB33E;
    color: white;
    border-radius: 5px;
    text-align: left;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px; /* Adjust the left padding for indentation */
}
  /* Reduce the size of the image */
  img {
    max-width: 285px;
    max-height: 454px;
    width: auto;
    height: auto;
    margin-bottom: 3px;
    margin-right: 33px;
}
h3 {
    font-size: 36px; /* Adjust the font size as needed */
    color: black;
    text-align: center;
  }
    </style>
</head>
<body>
    <header>
        <h2 class="logo">javaboi</h2>
        <nav class="navigation">
        <a href="competency.php">competency</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <a href="login.html" class="btnlogout">LOG OUT</a>
        </nav>
    </header>
   
    <div class="level-container">
    <div class="parrot">
    <img src="level1.png" alt="parrot" />
    </div>
    <a href="learn.php" class="level-box">Level 1</a>
    <a href="topic1.php" class="level2-box">Level 2</a>
    <a href="topic2.php" class="level3-box">Level 3</a>
    <a href="topic3.php" class="level4-box">Level 4</a>
    <!-- Add more level boxes as needed -->
</div>
<a href="learn.php" class="GO-box">GO =></a>
</body>
</html>
