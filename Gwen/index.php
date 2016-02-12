<<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
        .image{
    width:120px;
    height:120px
}
    </style>
   <script>
       $(function () {
           $('#profile_image').change(function (e) {

               var img = URL.createObjectURL(e.target.files[0]);
               $('.image').attr('src', img);
           });
       });
   </script>
</head>
<body>
<div class="container">
    <h1>Edit Profile</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <div>
                    <img src="avatar.png" class="image">
                </div>
                <input type="file" id="profile_image">
            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
           
            <h3>Personal info</h3>

            <form class="form-horizontal" role="form" action="insert.php" method="post">
                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="Jenny" type="text" name = "fname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="Smith" type="text" name = "lname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Gender:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select id="Gender" class="form-control" name ="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                </select>
                                </div>
                        </div>
                    </div>
                
                         
                <div class="form-group">
                    <label class="col-lg-3 control-label">City:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="Westminster" type="text" name = "city">
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="col-lg-3 control-label">Zipcode:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="92683" type="text" name = "zipcode">
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="abc@yahoo.com" type="text" name = "email">
                    </div>
                </div>
                
                <div class="form-group">
                                    <label class="col-lg-3 control-label">Month:</label>
                                    <div class="col-lg-8">
                                        <div class="ui-select">
                                            <select id="Month" class="form-control"  name ="month">
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Day:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select id="Day" class="form-control" name ="day">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-lg-3 control-label">Year:</label>
                    <div class="col-lg-8">
                        <div class="ui-select">
                            <select id="Year" class="form-control" name ="year">
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1947">1946</option>
                                <option value="1947">1945</option>
                                <option value="1947">1944</option>
                                <option value="1947">1943</option>
                                <option value="1947">1942</option>
                                <option value="1947">1941</option>
                                <option value="1947">1940</option>
                                <option value="1947">1939</option>
                                <option value="1947">1938</option>
                                <option value="1947">1937</option>
                                <option value="1947">1936</option>
                                <option value="1947">1935</option>
                                <option value="1947">1934</option>
                                <option value="1947">1933</option>
                                <option value="1947">1932</option>
                                <option value="1947">1931</option>
                                <option value="1947">1930</option>
                                <option value="1947">1929</option>
                                <option value="1947">1928</option>
                                <option value="1947">1927</option>
                                <option value="1947">1926</option>
                                <option value="1947">1925</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                                    <label class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="jennysmith" type="text" name = "username">
                                    </div>
                </div>
                
                <div class="form-group">
                                    <label class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="11111122333" type="password" name = "pass">
                                    </div>
                </div>
                                
                
                <div class="form-group">
                                    <label class="col-md-3 control-label">Confirm password:</label>
                                    <div class="col-md-8">
                                        <input class="form-control" value="11111122333" type="password" name = "confirm">
                                    </div>
                 </div>
                
                 <div class="form-group">
                                    <div class="form-group">
                                        <label for="Description">Description:</label>
                                        <textarea class="form-control" rows="4" id="description" type = "text" name = "discription"></textarea>
                                    </div>
                
                <label class="col-md-3 control-label"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-primary" value="Save Changes" type="submit">
                                        <span></span>
                                        <input class="btn btn-default" value="Cancel" type="reset">
                                    </div>
                </div>
               
              
            </form>
        </div>
    </div>
</div>
</body>
</html>
