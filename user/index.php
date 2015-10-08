<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Custom Writing Pros || Home</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

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
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Get Your Paper Done At The Lowest Price In The Market</h1>
                <hr>
                <p>Just Place an Order and it will be assigned to the most suitable writer</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Order Now <i class="fa fa-shopping-cart wow bounceIn" data-wow-delay=".1s"></i></a>
            </div>
            <div class="header-content-cal">
            <table class="table" border=0 cellpadding=2 cellspacing=0 style="width:70%; margin:0 auto;">
            <tr>
              <td colspan="4">Quick Access </td>
          </tr>
            <tr>
                <td nowrap class="hint" align = "left"  onmouseover="Tip('Enter the Paper Subject Here')">
                Paper subject<font>*</font>: 
                </td>
                <input type="hidden" name="client_order_id" id="client_order_id"  value="" >
                <td colspan="3"><select name="paper_subject" id="subject" class = "form-control" onblur="randomString();" required>
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
                <td nowrap class='hint' align = "left"  onmouseover="Tip('Enter The Topic of Your Paper Here')">
                Paper topic<font>*</font>: 
                </td>
                <td colspan="3"><input type="text" class = "form-control" name="paper_topic" required value="" maxlength="255" style="width:98%;">
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' align = "left"  onmouseover="Tip('Choose the style for your paper to be formatted')">
                Style<font>*</font>:
                </td>
                <td colspan="3">
                <select name='paper_style'  class = "form-control" required >
                <option>APA</option>
                <option selected>MLA</option>
                <option>Turabian</option>
                <option>Chicago</option>
                <option>Harvard</option>
                </select>
                </td>
            </tr>
            <tr>
                <td nowrap class='hint' align = "left" onmouseover="Tip('Please select the type of work you need our help with. We offer any academic help from essays to  dissertations. If your type is not listed here, please contact us via the live support chat and we will help you choose the most appropriate type.')">
                Type of work<font>*</font>:
                </td>
                <td colspan="3"><select name="type_of_work" class = "form-control" required onchange="chgType(this)">
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
            </tr>
            <tr>
                <td nowrap class="gdl" align = "left">Level<font>*</font>:</td>
                <td colspan="3">
                <select name="level" class = "form-control" required  onchange="chgLevel(this)">
                <OPTION>College</OPTION>
                <OPTION>Undergraduate</OPTION>
                <OPTION>Master</OPTION>
                <OPTION>Ph.D.</OPTION></select></td>
            </tr>            
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="place_order" class="btn btn-success btn-lg" style="width:50%;"><i class="fa fa-arrow-right wow bounceIn" data-wow-delay=".1s"></i> Proceed</button>
                </td>
            </tr>

    </table>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

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

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get In Touch With Us!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>
<?php include("includes/footer.php");?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>
