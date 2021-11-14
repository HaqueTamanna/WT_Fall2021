
<html>
<head>
 <title>HTML CSS Form Validation </title>
 <link rel="stylesheet" type="text/css" href="FTTask1.css">
</head>
<body>
 
 <form action="#0">
 <div>
 
 <input type="text" name="firstname" id="firstname" placeholder=" " required>
 <label class=new for="firstname">First name</label>
 </div>
 <div name=s>
 
 <input type="text" name="lastname" id="lastname" placeholder=" " required>
 <label for="lastname">Last name</label>
 </div>
 <div>

 <input type="text" age="age" id="age" placeholder=" " required>
 <label for="age">Age</label>
 </div>
 <div>

 <input type="radio" name="designation" value="Junior Programmer" />junior programmer
 <input type="radio" name="designation" value="Senior Programmer" />Senior programmer
 <input type="radio" name="designation" value="Project Lead" />Project lead
 <br />
 </div>
 <div>

 <input type="checkbox" name="language" value="JAVA" />JAVA
 <input type="checkbox" name="language" value="PHP" />PHP
 <input type="checkbox" name="language" value="C++" />C++
 
 <input type="email" name="email" id="email" placeholder=" " required>
 <label name=m for="email">Email</label>
 <div class="requirements"> Must be a valid email addres!</div>
 </div>
 <div>
 
 <input type="password" name="password" id="password" placeholder=" "
 pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
 <label for="password">Password</label>
 <div class="requirements"> Must be a valid password!</div>
 </div>
 <input type="submit" value="Sign up"/>
 </form>
 
</body>
</html>