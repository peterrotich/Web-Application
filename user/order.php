 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || Order</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="jquery/jquery.datetimepicker.css"/>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">    
<?php include("includes/navbar.php"); ?>

<!--Content-->
<!--table-->
<div id = "body-content">
<h1 align = "Center"><i class="fa fa-shopping-cart wow bounceIn text-success"></i> Place Order</h1>


<form id="place_order" name="place_order" >
        <table class="table" border=0 cellpadding=2 cellspacing=0 style="width:90%; margin:0 auto;background-color:#EEFBFA;">
            <tr class = "info">
              <td colspan="6">Order Details </td>
          </tr>
            <tr>
                <td width="19%" nowrap class="hint">
                Paper subject<font>*</font>: 
                </td>
                <input type="hidden" name="orderId" id="orderId"  value="" >
                <td colspan="5"><select name="paperSubject" id="paperSubject" onclick="randomString1();" class = "form-control" required>
                  <option value="0" selected="selected">--</option>
                  <optgroup label="Arts & Humanities">
                    <option>Visual Arts and Film Studies</option>
                    <option>Religion and Theology</option>
                    <option>Philosophy</option>
                    <option>History</option>
                    <option>English</option>
                    <option>Music</option>
                    <option>Literature</option>
                    <option>Linguistics</option>
                    <option>Ethics</option>
                    <option>Archaeology</option>
                    <option>Anthropology</option>
                  </optgroup>
                  <optgroup label="Social Sciences">
                    <option>Geography</option>
                    <option>Psychology</option>
                    <option>Sociology</option>
                    <option>Gender & Sexual Studies</option>
                    <option>Human Resources (HR)</option>
                    <option>Journalism, mass media and communication</option>
                    <option>Political Science</option>
                  </optgroup>
                  <optgroup label="Sciences">
                    <option>Biology</option>
                    <option>Chemistry</option>
                    <option>Physics (including Earth and space sciences)</option>
                    <option>Microbiology</option>
                    <option>Astronomy</option>
                    <option>Mathematics</option>
                    <option>Statistics</option>
                    <option>Earth and Space sciences</option>
                  </optgroup>
                  <optgroup label="Information Technology">
                    <option>Computer sciences and Information technology</option>
                    <option>Logic and programming</option>
                    <option>Systems science</option>
                  </optgroup>
                  <optgroup label="Applied sciences">
                    <option>Agriculture</option>
                    <option>Architecture</option>
                    <option>Design and Technology</option>
                    <option>Engineering and Construction</option>
                    <option>Environmental studies</option>
                    <option>Health sciences and medicine</option>
                    <option>Education</option>
                    <option>Nursing</option>
                    <option>Military sciences</option>
                    <option>Family and consumer science</option>
                  </optgroup>
                  <optgroup label="Economics">
                    <option>Macro & Micro economics</option>
                    <option>Business</option>
                    <option>Marketing</option>
                    <option>Management</option>
                    <option>Finance and Accounting</option>
                    <option>E-commerce</option>
                    <option>Tourism</option>
                    <option>Logistics</option>
                  </optgroup>
                  <optgroup label="Law">
                    <option>Law</option>
                  </optgroup>
                  <optgroup label="Other">
                    <option>Creative writing</option>
                    <option>Other</option>
                  </optgroup>
          </select>                </tr>
            <tr>
                <td nowrap class='hint' >
                Paper topic<font>*</font>: 
                </td>
                <td colspan="5"><input type="text" class = "form-control" id="paperTopic"  name="paperTopic" required onclick="randomString();" value="" maxlength="255" style="width:98%;">
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' >
                Style<font>*</font>:
                </td>
                <td colspan="3">
                <select name='paperStyle' id='paperStyle'  class = "form-control" required >
                <option>APA</option>
                <option selected>MLA</option>
                <option>Turabian</option>
                <option>Chicago</option>
                <option>Harvard</option>
                </select>
                </td>
                <td width="17%" nowrap class='hint' style="padding-left:10px;">
                Language Style:<font>*</font>
                </td>
                <td width="23%">
                <select name='languageStyle' id='languageStyle' class = "form-control" required>
                <option>English (U.S.)</option>
                <option>English (U.K.)</option>
                <option>Not a native speaker</option>
                </select>
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' >
                Type of work<font>*</font>:
                </td>
                <td colspan="3"><select name="typeOfWork" id="typeOfWork" class = "form-control" required onchange="calculator('#typeOfWork')">
                <option value="36">Admission/Application Essay</option>
                <option value="31">Annotated Bibliography</option>
                <option value="31">Article</option>
                <option value="36">Assignment</option>
                <option value="29">Book Report/Review</option>
                <option value="32">Case Study</option>
                <option value="29">Coursework</option>
                <option value="31" selected="selected">Dissertation</option>
                <option value="31">Dissertation Chapter - Abstract</option>
                <option value="32">Dissertation Chapter - Introduction Chapter</option>
                <option value="32">Dissertation Chapter - Literature Review</option>
                <option value="32">Dissertation Chapter - Methodology</option>
                <option value="32">Dissertation Chapter - Results</option>
                <option value="32">Dissertation Chapter - Discussion</option>
                <option value="32">Dissertation Chapter - Hypothesis</option>
                <option value="32">Dissertation Chapter - Conclusion Chapter</option>
                <option value="19">Editing</option>
                <option value="31">Essay</option>
                <option value="21">Formatting</option>
                <option value="36">Lab Report</option>
                <option value="36">Math Problem</option>
                <option value="36">Movie Review</option>
                <option value="29">Personal Statement</option>
                <option value="36">PowerPoint Presentation plain</option>
                <option value="28">PowerPoint Presentation with accompanying text</option>
                <option value="27">Proofreading</option>
                <option value="20">Paraphrasing</option>
                <option value="20">Research Paper</option>
                <option value="26">Research Proposal</option>
                <option value="36">Scholarship Essay</option>
                <option value="36">Speech/Presentation</option>
                <option value="44">Statistics Project</option>
                <option value="28">Term Paper</option>
                <option value="31">Thesis</option>
                <option value="36">Thesis Proposal</option>
                </select>
                </td>
                <td nowrap style="padding-left:10px;" class='hint' >
                Deadline:<font>*</font></td>
                <td>
                <input type = "text" name = "deadline" id ="datetimepicker12" onchange="calculator('#datetimepicker12')" class = "form-control">
                </td>
            </tr>
            <tr>
                <td nowrap class="gdl">Level<font>*</font>:</td>
                <td colspan="3">
                <select name="level" class = "form-control" id="level" onchange="calculator('#level')" required >
                <OPTION value = "2">College</OPTION>
                <OPTION value = "3">Undergraduate</OPTION>
                <OPTION value = "4">Master</OPTION>
                <OPTION value = "5">Ph.D.</OPTION></select></td>
                <td nowrap style="padding-left:10px;" class='hint' >
                Number of pages<font>*</font>:
                </td>
                <td class=no>
                <select name="numberOfPages" id="numberOfPages" class = "form-control" onchange="calculator('#numberOfPages')"  required >
                <option value=1>1 page / 250 words</option>
                <option value=2>2 pages / 500 words</option>
                <option value=3>3 pages / 750 words</option>
                <option value=4>4 pages / 1000 words</option>
                <option value=5>5 pages / 1250 words</option>
                <option value=6>6 pages / 1500 words</option>
                <option value=7>7 pages / 1750 words</option>
                <option value=8>8 pages / 2000 words</option>
                <option value=9>9 pages / 2250 words</option>
                <option value=10>10 pages / 2500 words</option>
                <option value=11>11 pages / 2750 words</option>
                <option value=12>12 pages / 3000 words</option>
                <option value=13>13 pages / 3250 words</option>
                <option value=14>14 pages / 3500 words</option>
                <option value=15>15 pages / 3750 words</option>
                <option value=16>16 pages / 4000 words</option>
                <option value=17>17 pages / 4250 words</option>
                <option value=18>18 pages / 4500 words</option>
                <option value=19>19 pages / 4750 words</option>
                <option value=20>20 pages / 5000 words</option>
                <option value=21>21 pages / 5250 words</option>
                <option value=22>22 pages / 5500 words</option>
                <option value=23>23 pages / 5750 words</option>
                <option value=24>24 pages / 6000 words</option>
                <option value=25>25 pages / 6250 words</option>
                <option value=26>26 pages / 6500 words</option>
                <option value=27>27 pages / 6750 words</option>
                <option value=28>28 pages / 7000 words</option>
                <option value=29>29 pages / 7250 words</option>
                <option value=30>30 pages / 7500 words</option>
                <option value=31>31 pages / 7750 words</option>
                <option value=32>32 pages / 8000 words</option>
                <option value=33>33 pages / 8250 words</option>
                <option value=34>34 pages / 8500 words</option>
                <option value=35>35 pages / 8750 words</option>
                <option value=36>36 pages / 9000 words</option>
                <option value=37>37 pages / 9250 words</option>
                <option value=38>38 pages / 9500 words</option>
                <option value=39>39 pages / 9750 words</option>
                <option value=40>40 pages / 10000 words</option>
                <option value=41>41 pages / 10250 words</option>
                <option value=42>42 pages / 10500 words</option>
                <option value=43>43 pages / 10750 words</option>
                <option value=44>44 pages / 11000 words</option>
                <option value=45>45 pages / 11250 words</option>
                <option value=46>46 pages / 11500 words</option>
                <option value=47>47 pages / 11750 words</option>
                <option value=48>48 pages / 12000 words</option>
                <option value=49>49 pages / 12250 words</option>
                <option value=50>50 pages / 12500 words</option>
                <option value=51>51 pages / 12750 words</option>
                <option value=52>52 pages / 13000 words</option>
                <option value=53>53 pages / 13250 words</option>
                <option value=54>54 pages / 13500 words</option>
                <option value=55>55 pages / 13750 words</option>
                <option value=56>56 pages / 14000 words</option>
                <option value=57>57 pages / 14250 words</option>
                <option value=58>58 pages / 14500 words</option>
                <option value=59>59 pages / 14750 words</option>
                <option value=60>60 pages / 15000 words</option>
                <option value=61>61 pages / 15250 words</option>
                <option value=62>62 pages / 15500 words</option>
                <option value=63>63 pages / 15750 words</option>
                <option value=64>64 pages / 16000 words</option>
                <option value=65>65 pages / 16250 words</option>
                <option value=66>66 pages / 16500 words</option>
                <option value=67>67 pages / 16750 words</option>
                <option value=68>68 pages / 17000 words</option>
                <option value=69>69 pages / 17250 words</option>
                <option value=70>70 pages / 17500 words</option>
                <option value=71>71 pages / 17750 words</option>
                <option value=72>72 pages / 18000 words</option>
                <option value=73>73 pages / 18250 words</option>
                <option value=74>74 pages / 18500 words</option>
                <option value=75>75 pages / 18750 words</option>
                <option value=76>76 pages / 19000 words</option>
                <option value=77>77 pages / 19250 words</option>
                <option value=78>78 pages / 19500 words</option>
                <option value=79>79 pages / 19750 words</option>
                <option value=80>80 pages / 20000 words</option>
                <option value=81>81 pages / 20250 words</option>
                <option value=82>82 pages / 20500 words</option>
                <option value=83>83 pages / 20750 words</option>
                <option value=84>84 pages / 21000 words</option>
                <option value=85>85 pages / 21250 words</option>
                <option value=86>86 pages / 21500 words</option>
                <option value=87>87 pages / 21750 words</option>
                <option value=88>88 pages / 22000 words</option>
                <option value=89>89 pages / 22250 words</option>
                <option value=90>90 pages / 22500 words</option>
                <option value=91>91 pages / 22750 words</option>
                <option value=92>92 pages / 23000 words</option>
                <option value=93>93 pages / 23250 words</option>
                <option value=94>94 pages / 23500 words</option>
                <option value=95>95 pages / 23750 words</option>
                <option value=96>96 pages / 24000 words</option>
                <option value=97>97 pages / 24250 words</option>
                <option value=98>98 pages / 24500 words</option>
                <option value=99>99 pages / 24750 words</option>
                <option value=100>100 pages / 25000 words</option>
                <option value=101>101 pages / 25250 words</option>
                <option value=102>102 pages / 25500 words</option>
                <option value=103>103 pages / 25750 words</option>
                <option value=104>104 pages / 26000 words</option>
                <option value=105>105 pages / 26250 words</option>
                <option value=106>106 pages / 26500 words</option>
                <option value=107>107 pages / 26750 words</option>
                <option value=108>108 pages / 27000 words</option>
                <option value=109>109 pages / 27250 words</option>
                <option value=110>110 pages / 27500 words</option>
                <option value=111>111 pages / 27750 words</option>
                <option value=112>112 pages / 28000 words</option>
                <option value=113>113 pages / 28250 words</option>
                <option value=114>114 pages / 28500 words</option>
                <option value=115>115 pages / 28750 words</option>
                <option value=116>116 pages / 29000 words</option>
                <option value=117>117 pages / 29250 words</option>
                <option value=118>118 pages / 29500 words</option>
                <option value=119>119 pages / 29750 words</option>
                <option value=120>120 pages / 30000 words</option>
                <option value=121>121 pages / 30250 words</option>
                <option value=122>122 pages / 30500 words</option>
                <option value=123>123 pages / 30750 words</option>
                <option value=124>124 pages / 31000 words</option>
                <option value=125>125 pages / 31250 words</option>
                <option value=126>126 pages / 31500 words</option>
                <option value=127>127 pages / 31750 words</option>
                <option value=128>128 pages / 32000 words</option>
                <option value=129>129 pages / 32250 words</option>
                <option value=130>130 pages / 32500 words</option>
                <option value=131>131 pages / 32750 words</option>
                <option value=132>132 pages / 33000 words</option>
                <option value=133>133 pages / 33250 words</option>
                <option value=134>134 pages / 33500 words</option>
                <option value=135>135 pages / 33750 words</option>
                <option value=136>136 pages / 34000 words</option>
                <option value=137>137 pages / 34250 words</option>
                <option value=138>138 pages / 34500 words</option>
                <option value=139>139 pages / 34750 words</option>
                <option value=140>140 pages / 35000 words</option>
                <option value=141>141 pages / 35250 words</option>
                <option value=142>142 pages / 35500 words</option>
                <option value=143>143 pages / 35750 words</option>
                <option value=144>144 pages / 36000 words</option>
                <option value=145>145 pages / 36250 words</option>
                <option value=146>146 pages / 36500 words</option>
                <option value=147>147 pages / 36750 words</option>
                <option value=148>148 pages / 37000 words</option>
                <option value=149>149 pages / 37250 words</option>
                <option value=150>150 pages / 37500 words</option>
                <option value=151>151 pages / 37750 words</option>
                <option value=152>152 pages / 38000 words</option>
                <option value=153>153 pages / 38250 words</option>
                <option value=154>154 pages / 38500 words</option>
                <option value=155>155 pages / 38750 words</option>
                <option value=156>156 pages / 39000 words</option>
                <option value=157>157 pages / 39250 words</option>
                <option value=158>158 pages / 39500 words</option>
                <option value=159>159 pages / 39750 words</option>
                <option value=160>160 pages / 40000 words</option>
                <option value=161>161 pages / 40250 words</option>
                <option value=162>162 pages / 40500 words</option>
                <option value=163>163 pages / 40750 words</option>
                <option value=164>164 pages / 41000 words</option>
                <option value=165>165 pages / 41250 words</option>
                <option value=166>166 pages / 41500 words</option>
                <option value=167>167 pages / 41750 words</option>
                <option value=168>168 pages / 42000 words</option>
                <option value=169>169 pages / 42250 words</option>
                <option value=170>170 pages / 42500 words</option>
                <option value=171>171 pages / 42750 words</option>
                <option value=172>172 pages / 43000 words</option>
                <option value=173>173 pages / 43250 words</option>
                <option value=174>174 pages / 43500 words</option>
                <option value=175>175 pages / 43750 words</option>
                <option value=176>176 pages / 44000 words</option>
                <option value=177>177 pages / 44250 words</option>
                <option value=178>178 pages / 44500 words</option>
                <option value=179>179 pages / 44750 words</option>
                <option value=180>180 pages / 45000 words</option>
                <option value=181>181 pages / 45250 words</option>
                <option value=182>182 pages / 45500 words</option>
                <option value=183>183 pages / 45750 words</option>
                <option value=184>184 pages / 46000 words</option>
                <option value=185>185 pages / 46250 words</option>
                <option value=186>186 pages / 46500 words</option>
                <option value=187>187 pages / 46750 words</option>
                <option value=188>188 pages / 47000 words</option>
                <option value=189>189 pages / 47250 words</option>
                <option value=190>190 pages / 47500 words</option>
                <option value=191>191 pages / 47750 words</option>
                <option value=192>192 pages / 48000 words</option>
                <option value=193>193 pages / 48250 words</option>
                <option value=194>194 pages / 48500 words</option>
                <option value=195>195 pages / 48750 words</option>
                <option value=196>196 pages / 49000 words</option>
                <option value=197>197 pages / 49250 words</option>
                <option value=198>198 pages / 49500 words</option>
                <option value=199>199 pages / 49750 words</option>
                <option value=200>200 pages / 50000 words</option>
                </select>
                </td>
            </tr>
            <tr>
                <td nowrap style="padding-right:16px;" class='hint'>Number of sources<font>*</font>:
                </td>
                <td colspan='3'><select class="form-control" name="numberOfSources" id="numberOfSources" required>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
                <option>44</option>
                <option>45</option>
                <option>46</option>
                <option>47</option>
                <option>48</option>
                <option>49</option>
                <option>50</option>
                <option>51</option>
                <option>52</option>
                <option>53</option>
                <option>54</option>
                <option>55</option>
                <option>56</option>
                <option>57</option>
                <option>58</option>
                <option>59</option>
                <option>60</option>
                <option>61</option>
                <option>62</option>
                <option>63</option>
                <option>64</option>
                <option>65</option>
                <option>66</option>
                <option>67</option>
                <option>68</option>
                <option>69</option>
                <option>70</option>
                <option>71</option>
                <option>72</option>
                <option>73</option>
                <option>74</option>
                <option>75</option>
                <option>76</option>
                <option>77</option>
                <option>78</option>
                <option>79</option>
                <option>80</option>
                <option>81</option>
                <option>82</option>
                <option>83</option>
                <option>84</option>
                <option>85</option>
                <option>86</option>
                <option>87</option>
                <option>88</option>
                <option>89</option>
                <option>90</option>
                <option>91</option>
                <option>92</option>
                <option>93</option>
                <option>94</option>
                <option>95</option>
                <option>96</option>
                <option>97</option>
                <option>98</option>
                <option>99</option>
                <option>100</option>
                </select>
                </td>
            </tr>
            <tr>
                <td nowrap class="gdl"><div align="center"></div></td>
            <td width="11%" nowrap style = "padding-top:4%"><p align="left"><strong>TOTAL :</strong></p></td>
                <td width="20%" nowrap><span style="padding-right:10px;">
                  <input type="text" id="total" class="form-control" name="total"  value="" readonly style="border:none; font-size:24px; font-weight:bold; color:red;">
              </span></td>
              <td width="9%" nowrap style = "padding-top:4%"><div align="left"><strong>USD</strong>(&#36;)</div></td>
              <td nowrap><div align="left"></div></td>
                <td nowrap><div align="left"></div></td>
            </tr>
            <tr>
              <td height="70" class="gdl">Order Instructions*</td>
              <td colspan='5'><textarea style="width:98%" name="instructions" id="instructions" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <td colspan="6" class="info"><strong>Contact Information</strong></td>
            </tr>
            <tr>
              <td>First Name*</td>
              <input type="hidden" name="regId" id="regId"  value="" >
              <td colspan="3"><input type="text" style="width:70%" class = "form-control" name="firstName" id="firstName" placeholder = "First Name" required pattern="[A-Z a-z]*"></td>
              <td>Last Name*</td>
              <td><input type="text" name="lastName" id="lastName" style="width:70%" class = "form-control" placeholder = "Last Name" required pattern="[A-Z a-z]*"></td>
            </tr>
            <tr>
              <td class="gdl">Email*</td>
              <td colspan="5"><input type="email" name="email" id="email" style="width:98%" class = "form-control" placeholder = "Email" required ></td>
            </tr>
            <tr>
              <td class="gdl">Telephone Number*</td>
              <td colspan="3"><input type="text" name="telephoneNumber" id="telephoneNumber" style="width:70%" class = "form-control" placeholder = "Telephone Number" required pattern="[+ 0-9 -]*"></td>
              <td>Mobile/ Cell*</td>
              <td><input type="text" name="mobileNumber" id="mobileNumber" style="width:70%" class = "form-control" placeholder = "Mobile" required pattern="[+ 0-9 -]*"></td>
            </tr>
            <tr>
              <td class="gdl">Country*</td>
              <td colspan="4">
                  <select class = "form-control" name="nationality" id="nationality">
                                          <option>Afghanistan</option>
                                          <option>Albania</option>
                                          <option>Algeria</option>
                                          <option>American Samoa</option>
                                          <option>Andorra</option>
                                          <option>Angola</option>
                                          <option>Anguilla</option>
                                          <option>Antarctica</option>
                                          <option>Argentina</option>
                                          <option>Armenia</option>
                                          <option>Aruba</option>
                                          <option>Australia</option>
                                          <option>Austria</option>
                                          <option>Azberbaijan</option>
                                          <option>Bahamas</option>
                                          <option>Bahrain</option>
                                          <option>Bangladesh</option>
                                          <option>Barbados</option>
                                          <option>Belarus</option>
                                          <option>Belgium</option>
                                          <option>Belize</option>
                                          <option>Benin</option>
                                          <option>Bermuda</option>
                                          <option>Bhutan</option>
                                          <option>Bolivia</option>
                                          <option>Botswana</option>
                                          <option>Brazil</option>
                                          <option>Brunei</option>
                                          <option>Bulgaria</option>
                                          <option>Burkina Faso</option>
                                          <option>Burundi</option>
                                          <option>Cambodia</option>
                                          <option>Cameroon</option>
                                          <option>Canada</option>
                                          <option>Chad</option>
                                          <option>Chile</option>
                                          <option>China</option>
                                          <option>Christmas Island</option>
                                          <option>Colombia</option>
                                          <option>Comoros</option>
                                          <option>Congo</option>
                                          <option>Cook Islands</option>
                                          <option>Costa Rica</option>
                                          <option>Croatia</option>
                                          <option>Cuba</option>
                                          <option>Curacao</option>
                                          <option>Cyprus</option>
                                          <option>Czech Republic</option>
                                          <option>Denmark</option>
                                          <option>DiegoGarcia</option>
                                          <option>Djibouti</option>
                                          <option>Dominica</option>
                                          <option>Dominican Rep.</option>
                                          <option>East Timor</option>
                                          <option>Ecuador</option>
                                          <option>Egypt</option>
                                          <option>El Salvador</option>
                                          <option>Equatorial Guinea</option>
                                          <option>Eritrea</option>
                                          <option>Estonia</option>
                                          <option>Ethiopia</option>
                                          <option>Faeroe Islands</option>
                                          <option>Falkland Islands</option>
                                          <option>Fiji Islands</option>
                                          <option>Finland</option>
                                          <option>France</option>
                                          <option>French Guiana</option>
                                          <option>French Polynesia</option>
                                          <option>Gabon</option>
                                          <option>Gambia</option>
                                          <option>Georgia</option>
                                          <option>Germany</option>
                                          <option>Ghana</option>
                                          <option>Gibraltar</option>
                                          <option>Greece</option>
                                          <option>Greenland</option>
                                          <option>Grenada</option>
                                          <option>Guadeloupe</option>
                                          <option>Guam</option>
                                          <option>Guatemala</option>
                                          <option>Guinea</option>
                                          <option>GuineaBissau</option>
                                          <option>Guyana</option>
                                          <option>Haiti</option>
                                          <option>Honduras</option>
                                          <option>HongKong</option>
                                          <option>Hungary</option>
                                          <option>Iceland</option>
                                          <option>India</option>
                                          <option>Indonesia</option>
                                          <option>Iran</option>
                                          <option>Iraq</option>
                                          <option>Ireland</option>
                                          <option>Israel</option>
                                          <option>Italy</option>
                                          <option>Ivory Coast</option>
                                          <option>Jamaica</option>
                                          <option>Japan</option>
                                          <option>Jordan</option>
                                          <option>Kazakhstan</option>
                                          <option>Kenya</option>
                                          <option>Kiribati</option>
                                          <option>Kuwait</option>
                                          <option>Kyrgyzstan</option>
                                          <option>Laos</option>
                                          <option>Latvia</option>
                                          <option>Lebanon</option>
                                          <option>Lesotho</option>
                                          <option>Liberia</option>
                                          <option>Libya</option>
                                          <option>Liechtenstein</option>
                                          <option>Lithuania</option>
                                          <option>Luxembourg</option>
                                          <option>Macau</option>
                                          <option>Macedonia</option>
                                          <option>Madagascar</option>
                                          <option>Malawi</option>
                                          <option>Malaysia</option>
                                          <option>Maldives</option>
                                          <option>Mali</option>
                                          <option>Malta</option>
                                          <option>Marshall Islands</option>
                                          <option>Martinique</option>
                                          <option>Mauritania</option>
                                          <option>Mauritius</option>
                                          <option>Mayotte</option>
                                          <option>Mexico</option>
                                          <option>Micronesia</option>
                                          <option>Midway Island</option>
                                          <option>Moldova</option>
                                          <option>Monaco</option>
                                          <option>Mongolia</option>
                                          <option>Montenegro</option>
                                          <option>Montserrat</option>
                                          <option>Morocco</option>
                                          <option>Mozambique</option>
                                          <option>Myanmar (Burma)</option>
                                          <option>Myanmar (Burma)</option>
                                          <option>Namibia</option>
                                          <option>Nauru</option>
                                          <option>Nepal</option>
                                          <option>Netherlands</option>
                                          <option>New Zealand</option>
                                          <option>NewCaledonia</option>
                                          <option>Nicaragua</option>
                                          <option>Niger</option>
                                          <option>Nigeria</option>
                                          <option>Niue</option>
                                          <option>Norfolk Island</option>
                                          <option>Norway</option>
                                          <option>Oman</option>
                                          <option>Pakistan</option>
                                          <option>Palau</option>
                                          <option>Palestine</option>
                                          <option>Panama</option>
                                          <option>Papua New Guinea</option>
                                          <option>Paraguay</option>
                                          <option>Peru</option>
                                          <option>Philippines</option>
                                          <option>Poland</option>
                                          <option>Portugal</option>
                                          <option>Puerto Rico</option>
                                          <option>Qatar</option>
                                          <option>Republic of Korea</option>
                                          <option>ReunionIsland</option>
                                          <option>Romania</option>
                                          <option>Russia</option>
                                          <option>Rwanda</option>
                                          <option>Saudi Arabia</option>
                                          <option>Senegal</option>
                                          <option>Serbia</option>
                                          <option>Seychelles</option>
                                          <option>Sierra Leone</option>
                                          <option>Singapore</option>
                                          <option>Sint Maarten</option>
                                          <option>Slovakia</option>
                                          <option>Slovenia</option>
                                          <option>Solomon Islands</option>
                                          <option>Somalia</option>
                                          <option>SouthAfrica</option>
                                          <option>Spain</option>
                                          <option>Sri Lanka</option>
                                          <option>Sudan</option>
                                          <option>Suriname</option>
                                          <option>Swaziland</option>
                                          <option>Sweden</option>
                                          <option>Switzerland</option>
                                          <option>Syria</option>
                                          <option>Taiwan</option>
                                          <option>Tajikistan</option>
                                          <option>Tanzania</option>
                                          <option>Thailand</option>
                                          <option>Togo</option>
                                          <option>Tokelau</option>
                                          <option>Tonga</option>
                                          <option>Trinidad & Tobago</option>
                                          <option>Tunisia</option>
                                          <option>Turkey</option>
                                          <option>Turkmenistan</option>
                                          <option>Turks & Caicos</option>
                                          <option>Tuvalu</option>
                                          <option>Uganda</option>
                                          <option>Ukraine</option>
                                          <option>United Arab Emirates</option>
                                          <option>United Kingdom</option>
                                          <option>Uruguay</option>
                                          <option>US Virgin Islands</option>
                                          <option>USA</option>
                                          <option>Uzbekistan</option>
                                          <option>Vanuatu</option>
                                          <option>VaticanCity</option>
                                          <option>Venezuela</option>
                                          <option>Vietnam</option>
                                          <option>WakeIsland</option>
                                          <option>Wallis & Futuna</option>
                                          <option>Western Samoa</option>
                                          <option>Yemen</option>
                                          <option>Zambia</option>
                                          <option>Zimbabwe</option>
                                          </SELECT>
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td class="gdl"></td>
              <td><button type="submit" id="place_order" onclick="AjaxPost(this);" class="btn btn-success btn-lg">Place Order</button>
              <p>&nbsp;</p></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div id = "msgdiv" ><p id="mesgbox"></p></div></td>
              <td>&nbsp;</td>
            </tr>
    </table>    
<!--/table--> 
</form> 
</div>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Top Feature List</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-font wow bounceIn text-primary"></i>
                        <h3>Quality Writing</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-history wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Timely Submision</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-xing wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Plagiarism Free</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-square-o wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Compliance with policy</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("includes/footer.php");?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="validation/jquery.validate.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script type="text/javascript">
    function randomString1() {
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //abcdefghiklmnopqrstuvwxyz
    var string_length = 8;
    var randomstring1 = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring1 += chars.substring(rnum,rnum+1);
    }
    document.place_order.orderId.value = randomstring1;
}
</script>
<script type="text/javascript">
    function randomString() {
    var chars = "0123456789abcdefghijklmnopqrstuvwxyz";
    //abcdefghiklmnopqrstuvwxyz
    var string_length = 4;
    var randomstring = '';
    for (var i=0; i<string_length; i++) {
        var rnum = Math.floor(Math.random() * chars.length);
        randomstring += chars.substring(rnum,rnum+1);
    }
    document.place_order.regId.value = randomstring;
}
</script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery.datetimepicker.js"></script>    
<script>
$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
    formatTime:'H:I:s',
    formatDate:'Y/m/d H:i',
    defaultDate:'8.12.1986', // it's my birthday
    defaultTime:'10:00',
    timepickerScrollbar:false
});

$('#datetimepicker10').datetimepicker({
    step:5,
    inline:true
});
$('#datetimepicker_mask').datetimepicker({
    mask:'9999/19/39 29:59'
});

$('#datetimepicker1').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});
$('#datetimepicker2').datetimepicker({
    yearOffset:222,
    lang:'ch',
    timepicker:false,
    format:'d/m/Y',
    formatDate:'Y/m/d',
    minDate:'-1970/01/02', // yesterday is minimum date
    maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
    inline:true
});
$('#datetimepicker4').datetimepicker();
$('#open').click(function(){
    $('#datetimepicker4').datetimepicker('show');
});
$('#close').click(function(){
    $('#datetimepicker4').datetimepicker('hide');
});
$('#reset').click(function(){
    $('#datetimepicker4').datetimepicker('reset');
});
$('#datetimepicker5').datetimepicker({
    datepicker:false,
    allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
    step:5
});
$('#datetimepicker6').datetimepicker();
$('#destroy').click(function(){
    if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
        $('#datetimepicker6').datetimepicker('destroy');
        this.value = 'create';
    }else{
        $('#datetimepicker6').datetimepicker();
        this.value = 'destroy';
    }
});
var logic = function( currentDateTime ){
    if( currentDateTime.getDay()==6 ){
        this.setOptions({
            minTime:'11:00'
        });
    }else
        this.setOptions({
            minTime:'8:00'
        });
};
$('#datetimepicker7').datetimepicker({
    onChangeDateTime:logic,
    onShow:logic
});
$('#datetimepicker8').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date')
            .toggleClass('xdsoft_disabled');
    },
    minDate:'-1970/01/2',
    maxDate:'+1970/01/2',
    timepicker:false
});
$('#datetimepicker9').datetimepicker({
    onGenerate:function( ct ){
        $(this).find('.xdsoft_date.xdsoft_weekend')
            .addClass('xdsoft_disabled');
    },
    weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
    timepicker:false
});
var dateToDisable = new Date();
    dateToDisable.setDate(dateToDisable.getDate() + 2);
$('#datetimepicker11').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [false, ""]
        }

        return [true, ""];
    }
});
$('#datetimepicker12').datetimepicker({
    beforeShowDay: function(date) {
        if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
            return [true, "custom-date-style"];
        }

        return [true, ""];
    }
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>


<script type="text/javascript">

function dateCal(id){

var sel4="";

sel4=$(id).val();
var d = Date.parse(sel4);

var x = new Date();
var y = x.getTime();

var m = (parseInt(d) - parseInt(y))/(1000*60*60);
var n = (6);
var p = n/m;
return p;
}


function calculator(idseli){

            var sel4="";    //datepicker
            var sel3="";    //level
            var sel2="";    //number of pages
            var seli="";    //type of work
            var result="";
            var dec = "";
            var result1="";


        if(idseli=="#typeOfWork"){
            seli=$(idseli + " option:selected").val();
            sel2=$("#numberOfPages option:selected").val();
            sel3=$("#level option:selected").val(); 
            dec = dateCal("#datetimepicker12");    

        }else if(idseli=="#numberOfPages"){
            seli=$(idseli + " option:selected").val();
            sel2=$("#typeOfWork option:selected").val();
            sel3=$("#level option:selected").val();
            dec = dateCal("#datetimepicker12");

        }else if(idseli=="#level"){
            sel3=$(idseli + " option:selected").val();
            sel2=$("#typeOfWork option:selected").val();
            seli=$("#numberOfPages option:selected").val();
            dec = dateCal("#datetimepicker12");

        }else if(idseli=="#datetimepicker12"){
            dec = dateCal(idseli);
            sel3=$("#level option:selected").val();
            sel2=$("#typeOfWork option:selected").val();
            seli=$("#numberOfPages option:selected").val();

        }

            result1=parseFloat(seli)*parseFloat(sel2)*parseFloat(sel3)*parseFloat(dec);

            result = parseFloat(result1).toFixed(2);
            
            $("#total").attr("value",result);


      //  document.place_order.total.value = result;

            //$("#total").text(result);

}
var forceSubmit=false;
function AjaxPost(f){

$(document).ready(function(){
 event.preventDefault();


 // if(checkAgree(f)==true){

   
     var postdata="";
           var orderId= $("#orderId").val();
          var paperSubject=  $("#paperSubject option:selected").val();
           var paperTopic= $("#paperTopic").val();
          var languageStyle= $("#languageStyle option:selected").val();
          var  paperStyle=  $("#paperStyle option:selected").val();
         var typeOfWork=   $("#typeOfWork option:selected").text();
           var datetimepicker12= $("#datetimepicker12").val();
           var level= $("#level option:selected").val();
         var numberOfPages=$("#numberOfPages option:selected").text();
           var numberOfSources= $("#numberOfSources option:selected").val();
           var total= $("#total").val();
           var instructions= $("#instructions").val();
            var regId= $("#regId").val();
            var firstName=$("#firstName").val();
           var lastName= $("#lastName").val();
            var email= $("#email").val();
            var telephoneNumber=$("#telephoneNumber").val();
            var mobileNumber=$("#mobileNumber").val();
            var nationality=$("#nationality option:selected").val();
          


  postdata="submit=submit&nationality="+nationality+"&email="+email+"&lastName="+lastName+"&firstName="+firstName+"&regId="+regId;
    postdata+="&mobileNumber="+mobileNumber+"&telephoneNumber="+telephoneNumber+"&instructions="+instructions+"&total="+total+"&numberOfSources="+numberOfSources;
    postdata+="&numberOfPages="+numberOfPages+"&level="+level+"&deadline="+datetimepicker12+"&typeOfWork="+typeOfWork+"&paperStyle="+paperStyle;
    postdata+="&languageStyle="+languageStyle+"&paperTopic="+paperTopic+"&paperSubject="+paperSubject+"&orderId="+orderId;

//alert(postdata);

    $.ajax({

                type: "POST",
                url: "process_order.php",
                data: postdata,             
                success: function(html){ 

 


                        var parsedJson = $.parseJSON(html);
                  
                    if (parsedJson.success==1) {

                         console.log(html);

                         $("#msgdiv").css("background-color:","#9FF");
                         $("#msgdiv").css("border","2px solid #00");

                       // $("#mesgbox").html("Order Successfully Posted ");
                         $("#mesgbox").css("background-color:","green");

                          toast("#mesgbox","green","Order Successfully Posted ");
                    

                    }else{

                         $("#mesgbox").html("Error occurred try again");
                    }

                         
               
                 },
                error: function(html){

                         $("#mesgbox").html(html);
                }




    });
   

           /* }
            /*else{
                    alert("empty fields");

            }*/

             });

}

function toast(widgetid,colocode,message){

    //$(widgetid).css("color",colocode);
    $(widgetid).html(message);
    setTimeout(function(){$(widgetid).hide()},5000);
}


    
  /*  function checkAgree(f) {
        var msg1='Please fill all fields:\n';
        if(forceSubmit) return true;
        else if(isEmpty(f.paperTopic.value)) alert(msg1+'Paper topic');
        else if(isEmpty(f.deadline.value)) alert(msg1+'DeadLine');
        else if(isEmpty(f.total.value)) alert(msg1+'total');
        else if(isEmpty(f.instructions.value)) alert(msg1+'instructions');
        else if(isEmpty(f.firstName.value)) alert(msg1+'First Name');
        else if(isEmpty(f.lastName.value)) alert(msg1+'Last Name');
        else if(isEmpty(f.email.value)) alert(msg1+'E-mail');
        else if(!emailOk(f.email.value)) alert('Please type correct E-mail');
        else if(isEmpty(f.telephoneNumber.value)) alert(msg1+'Telephone number');
        else if(isEmpty(f.mobileNumber.value)) alert(msg1+'Mobile number');

        else if(f.total.value<=0) {f.doctype.focus();alert("Wrong Total Amount. Please check your order details!");}
        else return true;
        return false;
    }
*/

    function ValidationInputs(id,inputtype){

        var res="";

        $(id).on(function(){

            if(inputtype=="text"){

                    var input=$(this);
                    var is_name=input.val();
                    if(is_name){input.removeClass("invalid").addClass("valid");}
                    else{input.removeClass("valid").addClass("invalid");}


            }else{


            var input=$(this);
            var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var is_email=re.test(input.val());
            if(is_email){input.removeClass("invalid").addClass("valid");}
            else{input.removeClass("valid").addClass("invalid");}


            }


        });


    }



</script>

</body>
</html>
