<?php
include("connect.php");
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || Client</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="jquery/jquery.datetimepicker.css"/>

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- /.navbar-header -->

<?php include('includes/header.php'); ?>
            <!-- /.navbar-top-links -->

<?php include('includes/sidebar.php'); ?>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Client Panel -<small>Place a new order</small></h1>
                    </div>
                <div id = "body-content">
<form id="place_order" name="place_order" method="POST" action="">
        <table class="table" border=0 cellpadding=2 cellspacing=0 style="width:90%; margin:0 auto;background-color:#EEFBFA;">
            <tr class = "info">
              <td colspan="4">Order Details </td>
          </tr>
            <tr>
                <td nowrap class="hint" onmouseover="Tip('Enter the Paper Subject Here')">
                Paper subject<font>*</font>: 
                </td>
                <input type="hidden" name="orderId" id="orderId"  value="" >
                <td colspan="3"><select name="paperSubject" id="paperSubject" onclick="randomString1();" class = "form-control" required>
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
                <td nowrap class='hint' onmouseover="Tip('Enter The Topic of Your Paper Here')">
                Paper topic<font>*</font>: 
                </td>
                <td colspan="3"><input type="text" class = "form-control" name="paperTopic" required onclick="randomString();" value="" maxlength="255" style="width:98%;">
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' onmouseover="Tip('Choose the style for your paper to be formatted')">
                Style<font>*</font>:
                </td>
                <td>
                <select name='paperStyle'  class = "form-control" required >
                <option>APA</option>
                <option selected>MLA</option>
                <option>Turabian</option>
                <option>Chicago</option>
                <option>Harvard</option>
                </select>
                </td>
                <td nowrap style="padding-left:10px;" class='hint' onmouseover="Tip('Select Your Language Here')">
                Language Style:<font>*</font>
                </td>
                <td>
                <select name='languageStyle' class = "form-control" required>
                <option>English (U.S.)</option>
                <option>English (U.K.)</option>
                <option>Not a native speaker</option>
                </select>
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' onmouseover="Tip('Please select the type of work you need our help with. We offer any academic help from essays to  dissertations. If your type is not listed here, please contact us via the live support chat and we will help you choose the most appropriate type.')">
                Type of work<font>*</font>:
                </td>
                <td><select name="typeOfWork" class = "form-control" required onchange="chgType(this)">
                <option>Admission/Application Essay</option>
                <option>Annotated Bibliography</option>
                <option>Article</option>
                <option>Assignment</option>
                <option>Book Report/Review</option>
                <option>Case Study</option>
                <option>Coursework</option>
                <option selected="selected">Dissertation</option>
                <option>Dissertation Chapter - Abstract</option>
                <option>Dissertation Chapter - Introduction Chapter</option>
                <option>Dissertation Chapter - Literature Review</option>
                <option>Dissertation Chapter - Methodology</option>
                <option>Dissertation Chapter - Results</option>
                <option>Dissertation Chapter - Discussion</option>
                <option>Dissertation Chapter - Hypothesis</option>
                <option>Dissertation Chapter - Conclusion Chapter</option>
                <option>Editing</option>
                <option>Essay</option>
                <option>Formatting</option>
                <option>Lab Report</option>
                <option>Math Problem</option>
                <option>Movie Review</option>
                <option>Personal Statement</option>
                <option>PowerPoint Presentation plain</option>
                <option>PowerPoint Presentation with accompanying text</option>
                <option>Proofreading</option>
                <option>Paraphrasing</option>
                <option>Research Paper</option>
                <option>Research Proposal</option>
                <option>Scholarship Essay</option>
                <option>Speech/Presentation</option>
                <option>Statistics Project</option>
                <option>Term Paper</option>
                <option>Thesis</option>
                <option>Thesis Proposal</option>
                </select>
                </td>
                <td nowrap style="padding-left:10px;" class='hint' onmouseover="Tip('Please select how soon you need your paper done. It`s better to give the author at least a few additional days before your deadline so that you have the time to read it over and ask for revision if needed.')">
                Deadline:<font>*</font></td>
                <td>
                <input type = "text" name = "deadline" id = "datetimepicker12" class = "form-control">
                </td>
            </tr>
            <tr>
                <td nowrap class="gdl">Level<font>*</font>:</td>
                <td>
                <select name="level" class = "form-control" required  onchange="chgLevel(this)">
                <OPTION>College</OPTION>
                <OPTION>Undergraduate</OPTION>
                <OPTION>Master</OPTION>
                <OPTION>Ph.D.</OPTION></select></td>
                <td nowrap style="padding-left:10px;" class='hint' onmouseover="Tip('Please select the number of pages your paper should have. There`s a special discount that automatically applies when you order 50 pages or more. According to our policy, 1 double-spaced page equals to 250 words.')">
                Number of pages<font>*</font>:
                </td>
                <td class=no>
                <select name="numberOfPages" id="nump" class = "form-control"  required >
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
                <td nowrap style="padding-right:16px;" class='hint' onmouseover="Tip('')">Number of sources<font>*</font>:
                </td>
                <td colspan='1'><select class="form-control" name="numberOfSources"  required>
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
                <td class="gdl"></td>
                <td colspan='3'><p><strong>TOTAL :</strong> <span style="padding-right:10px;">
                  <input type=text name="total" value="0.00" size=11 readonly style="text-align:right; border:none; font-size:20px; font-weight:bold; height:25px; color:red;">
                <em><strong>USD </strong></em></span></p></td>
            </tr>
            <tr>
              <td height="70" class="gdl">Order Instructions*</td>
              <td colspan='3'><textarea style="width:98%" name="instructions" id="instructions" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
              <td class="gdl"></td>
              <td colspan="3"><button type="submit" name="place_order" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart fa-fw"></i> Place Order</button>
              <p>&nbsp;</p></td>
            </tr>
    </table>    
<!--/table--> 
</form> 
</div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="jquery/jquery.js"></script>
    <script src="jquery/jquery.datetimepicker.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
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
    formatDate:'d.m.Y',
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

</body>

</html>
