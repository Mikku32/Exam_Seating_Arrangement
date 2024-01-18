<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exam Seating Arrangement</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
   
</head>

<body>
   
   <h2 style="text-align: center;">Welcome  <?php echo "$_SESSION[username]"; ?></h2>
  
   
    <h1>
        S7 SEATING (UNIVERSITY EXAM 2023) 
  </h1>
  
      <table>
          <tr>
              <th colspan="12"><strong>SEATING ARRANGEMENT ON 12-11-2023 FN SLOT-1</strong></th>
          </tr>
          <tr>
             <td rowspan="2"><SMall>SL NO</SMall></td>
             <td rowspan="2"><SMall>ROOM NO</SMall></td>
             <td style="background-color: black; color: aqua;" ><h2 >ECE</h2></td>
             <td colspan="2" style="background-color: black; color: aqua;"><h2>CSE</h2></td>
             <td style="background-color: black;color: aqua;"><h2>EEE</h2></td>
             <td style="background-color: black;color: aqua;"><h2>IT</h2></td>
             <td colspan="2" style="background-color: black;color: aqua;"><h2>ME</h2></td>
             <td colspan="2" style="background-color: black;color: aqua;"><h2>CE</h2></td>
             <td rowspan="2"><strong>Total</strong></td>
          </tr>
          <tr>
              <td><b>ECE</b></td>
              <td><b>CS1</b></td>
              <td><b>CS2</b></td>
              <td><b>EEE</b></td>
              <td><b>IT</b></td>
              <td><b>ME1</b></td>
              <td><b>ME2</b></td>
              <td><b>CE1</b></td>
              <td><b>CE2</b></td>
          </tr>
  
          <tr>
              <td>1</td>
              <td>AD 301 F</td>
              <TD><b>01-09 (09)</b></TD>
              <TD><b>01-09 (09)</b></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><b>79-89 (11)</b></TD>
              <TD><SMall>29</SMall></TD>
          </tr>
  
          <tr>
              <td>2</td>
              <td>AD 301 B</td>
              <TD><b>10-15 (06)</b></TD>
              <TD><b>10-18 (09)</b></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><b>01-09(09)</b></TD>
              <TD><b>95-98 (04)</b></TD>
              <TD><SMall>28</SMall></TD>
          </tr>
  
          <tr>
              <td>3</td>
              <td>AD 106</td>
              <TD><b>16-21 (05)</b></TD>
              <TD><b>19-27 (09)</b></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMALl></SMALl></TD>
              <TD><b>01-09 (09)</b></TD>
              <TD><SMALl></SMALl></TD>
              <TD><b>10-18(09)</b></TD>
              <TD><SMALl></SMALl></TD>
              <TD><SMall>33</SMall></TD>
          </tr>
  
          <tr>
              <td>4</td>
              <td>AD 302</td>
              <TD><SMall></SMall></TD>
              <TD><b>01-09 (09)</b></TD>
              <td><b></b></td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>10-18(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><small>36</small></td>
              
          </tr>
  
          
          
          <tr>
              <td>5</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b>37-42(06)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <TD><SMall>34</SMall></TD>
          </tr>
  
          <tr>
              <td>6</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <TD><SMall>33</SMall></TD>
          </tr>
  
          <tr>
              <td>7</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <TD><SMall>32</SMall></TD>
          </tr>
  
          <tr>
              <td>8</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <TD><SMall>37</SMall></TD>
          </tr>
  
          <tr>
              <td>9</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <TD><SMall>37</SMall></TD>
          </tr>
  
          <tr>
              <td>10</td>
              <td>AD 301 F</td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b>19-27(09)</b></td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b></b></td>
              <td><b>19-27(09)</b></td>
              <TD><SMall>29</SMall></TD>
          </tr>
          
          <tr>
              <td colspan="2"><h3>TOTAL</h3></td>
              <td><b>21</b></td>
              <td><b>47</b></td>
              <td><b>46</b></td>
              <td><b>38</b></td>
              <td><b>24</b></td>
              <td><b>55</b></td>
              <td><b></b></td>
              <td><b>50</b></td>
              <td><b>50</b></td>
              <td><b>50</b></td>
          </tr>
      </table>
</body>
</html>