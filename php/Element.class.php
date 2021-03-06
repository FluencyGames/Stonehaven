<?php

class Element {
    private static $documentroot = '/stonehaven20'

    public static function getDocumentRoot() { return $documentroot }

    public static function head($title) {
     ?>
            <title>The Stonehaven School &#8211; <?php echo $title; ?></title>

            <link rel='stylesheet' href='<?php echo $documentroot ?>/plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
            <link rel='stylesheet' href='<?php echo $documentroot ?>/plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
            <link rel='stylesheet' href='<?php echo $documentroot ?>/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
            <link rel='stylesheet' href='<?php echo $documentroot ?>/css/style-core.css' type='text/css' media='all' />
            <link rel='stylesheet' href='<?php echo $documentroot ?>/css/kingster-style-custom.css' type='text/css' media='all' />

            <link rel="stylesheet" href="https://use.typekit.net/hlc5hbr.css">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CABeeZee%3Aregular%2Citalic&amp;subset=latin%2Clatin-ext%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all' />

        <!-- Google Analytics Script -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-70362008-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-70362008-1');
        </script>

        <!-- Begin Browser Icon Code -->

        <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $documentroot ?>/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $documentroot ?>/icon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $documentroot ?>/icon/site.webmanifest">
        <link rel="mask-icon" href="<?php echo $documentroot ?>/icon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
     <?php
	}

    public static function MobileHeader() {
     ?>
        <div class="kingster-mobile-header-wrap">
                <div class="kingster-mobile-header kingster-header-background kingster-style-slide kingster-sticky-mobile-navigation " id="kingster-mobile-header">
                    <div class="kingster-mobile-header-container kingster-container clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="<?php echo $documentroot ?>/index.html"><img src="<?php echo $documentroot ?>/images/logo.png" alt="Stonehaven Logo" /></a>
                            </div>
                        </div>
                        <div class="kingster-mobile-menu-right">
                            <div class="kingster-mobile-menu"><a class="kingster-mm-menu-button kingster-mobile-menu-button kingster-mobile-button-hamburger" href="#kingster-mobile-menu"><span></span></a>
                                <div class="kingster-mm-menu-wrap kingster-navigation-font" id="kingster-mobile-menu" data-slide="right">
                                    <ul id="menu-main-navigation" class="m-menu">
                                        <li class="menu-item menu-item-home current-menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/index.html">Home</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/about-us/school-history.html">About Us</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/welcome.html">Welcome</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/school-history.html">History</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/profile.html">Profile</a></li>
                                                <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/about-us/mission.html">Mission & Vision</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/mission.html">Mission & Vision Statements</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/faith.html">Statement of Faith</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/strategicplan.html">Strategic Plan</a></li>
					            </ul>
				                </li>
					                    <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/about-us/faculty.html">Our People</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/faculty.html">Faculty & Staff</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/administration.html">Administration</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/board.html">Board of Trustees</a></li>
					            </ul>
				                </li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/contact.html">Contact</a></li>
                                                <li class="menu-item"><a href="https://careers.smartrecruiters.com/ForrestJohnson/the-stonehaven-school">Employment</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/academics/classical.html">Academics</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/academics/classical.html">General</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/classical.html">Classical Trivium</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/scope-sequence.html">K-12 Scope & Sequence</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/fine-arts.html">Fine Arts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/academics/lower-philosophy.html">Lower School</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/lower-philosophy.html">Grammar Philosophy</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/lower-curriculum.html">Curriculum</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/faculty.html#lower">Faculty & Staff</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/academics/upper-philosophy.html">Upper School</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/upper-philosophy.html">Logic & Rhetoric Philosophy</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/academics/upper-curriculum.html">Curriculum</a></li>
                                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/about-us/faculty.html#upper">Faculty & Staff</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/admissions/admissions-process.html">Admissions</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/admissions/admissions-process.html">Admissions Process</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/admissions/affordability.html">Affordability</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/admissions/tours-openhouses.html">Tours & Open Houses</a></li>
                                                <li class="menu-item"><a href="https://stonehaven.almastart.com/">Begin Application</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children"><a href="<?php echo $documentroot ?>/student-life/life.html">Student Life</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/life.html">Student Life</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/athletics.html">Athletics</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/enrichment.html">Enrichment Programs</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/pathfinders.html">Pathfinders</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/house.html">House</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/after-school.html">After School Program</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/student-life/video-library.html">Video Library</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/partnership.html">Parents</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/partnership.html">Parent Partnership</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/resources.html">Parent Resources</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/cultivate.html">Cultivate</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/bloghaven.html">The Bloghaven</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/parents/alma.html">Alma</a></li>
                                                <li class="menu-item" style="display: none;"><a href="<?php echo $documentroot ?>/parents/r2g2podcast.html">R2G2 Podcast</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="<?php echo $documentroot ?>/support/giving.html">Support</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/giving.html">Giving to Stonehaven</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/knight-fund.html">Knight Fund</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/capital-campaign.html">Capital Campign</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/legacy-giving.html">Legacy Giving</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/georgia-goal.html">Georgia GOAL</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/partner-programs.html">Partner Programs</a></li>
                                                <li class="menu-item"><a href="<?php echo $documentroot ?>/support/corporate-sponsors.html">Corporate Sponsors</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
     <?php
	}

	public static function Header()	{
	?>
            <div class="kingster-top-bar">
                <div class="kingster-top-bar-background"></div>
                <div class="kingster-top-bar-container kingster-container ">
                    <div class="kingster-top-bar-container-inner clearfix">
                        <div class="kingster-top-bar-left kingster-item-pdlr"><a href="about-us/contact.html"><i class="fa fa-envelope-open-o" id="i_fd84_0"></i> frontdesk@stonehavenschool.org</a> <i class="fa fa-phone" id="i_fd84_1"></i> <a href="about-us/contact.html">(770) 874-8885</a></div>
                        <div class="kingster-top-bar-right kingster-item-pdlr">
                            <ul id="kingster-top-bar-menu" class="sf-menu kingster-top-bar-menu kingster-top-bar-right-menu">
                                <li class="menu-item kingster-normal-menu"><a href="https://stonehaven.getalma.com/" target="new">Alma</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="about-us/calendar.html">Calendar</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="https://squareup.com/store/stonehavenschool" target="new">Store</a></li>
                                <li class="menu-item kingster-normal-menu"><a href="support/giving.html">Support Us</a></li>
                            </ul>
                            <div class="kingster-top-bar-right-social"></div><a class="kingster-top-bar-right-button" href="admissions/tours-openhouses.html">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
	}

	public static function MenuBar()	{
	?>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
                <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="index.html"><img src="images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home current-menu-item menu-item-has-children kingster-normal-menu"><a href="index.html" class="sf-with-ul-pre">Home</a></li>
                                    <li class="menu-item menu-item-has-children kingster-normal-menu">
                                        <a href="about-us/school-history.html" class="sf-with-ul-pre">About Us</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="about-us/welcome.html">Welcome</a></li>
                                            <li class="menu-item" data-size="60"><a href="about-us/school-history.html">History</a></li>
                                            <li class="menu-item" data-size="60"><a href="about-us/profile.html">Profile</a></li>
                                            <li class="menu-item menu-item-has-children" data-size="60">
                                                <a href="about-us/mission.html" class="sf-with-ul-pre">Mission & Vision</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="about-us/mission.html">Mission & Vision Statements</a></li>
                                                    <li class="menu-item"><a href="about-us/faith.html">Statement of Faith</a></li>
                                                    <li class="menu-item"><a href="about-us/strategicplan.html">Strategic Plan</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item menu-item-has-children" data-size="60">
                                                <a href="about-us/faculty.html" class="sf-with-ul-pre">Our People</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="about-us/faculty.html">Faculty & Staff</a></li>
                                                    <li class="menu-item"><a href="about-us/administration.html">Administration</a></li>
                                                    <li class="menu-item"><a href="about-us/board.html">Board of Trustees</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item" data-size="60"><a href="about-us/contact.html">Contact</a></li>
                                            <li class="menu-item" data-size="60"><a href="https://careers.smartrecruiters.com/ForrestJohnson/the-stonehaven-school">Employment</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children kingster-mega-menu">
                                        <a href="academics/classical.html" class="sf-with-ul-pre">Academics</a>
                                        <div class="sf-mega sf-mega-full megaimg">
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <a href="academics/classical.html" class="sf-with-ul-pre">General</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="academics/classical.html">Classical Trivium</a></li>
                                                        <li class="menu-item"><a href="academics/scope-sequence.html">K-12 Scope & Sequence</a></li>
                                                        <li class="menu-item"><a href="academics/fine-arts.html">Fine Arts</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <a href="../academics/lower-philosophy.html" class="sf-with-ul-pre">Lower School</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="academics/lower-philosophy.html">Grammar Philosophy</a></li>
                                                        <li class="menu-item"><a href="academics/lower-curriculum.html">Curriculum</a></li>
                                                        <li class="menu-item"><a href="about-us/faculty.html#lower">Faculty & Staff</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <a href="../academics/upper-philosophy.html" class="sf-with-ul-pre">Upper School</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="academics/upper-philosophy.html">Logic & Rhetoric Philosophy</a></li>
                                                        <li class="menu-item"><a href="academics/upper-curriculum.html">Curriculum</a></li>
                                                        <li class="menu-item"><a href="about-us/faculty.html#upper">Faculty & Staff</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item" data-size="15">
                                                    <div class="kingster-mega-menu-section-content"><img src="upload/mega-menu-logo.png" id="img_fd84_0" alt="" /> <span id="span_fd84_0">Cultivating truth, goodness, and beauty grounded in the Christian worldview</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children kingster-normal-menu">
                                        <a href="admissions/admissions-process.html" class="sf-with-ul-pre">Admissions</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="admissions/admissions-process.html">Admissions Process</a></li>
                                            <li class="menu-item" data-size="60"><a href="admissions/affordability.html">Affordability</a></li>
                                            <li class="menu-item" data-size="60"><a href="admissions/tours-openhouses.html">Tours & Open Houses</a></li>
                                            <li class="menu-item" data-size="60"><a href="https://stonehaven.almastart.com/">Begin Application</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children kingster-normal-menu">
                                        <a href="student-life/life.html" class="sf-with-ul-pre">Student Life</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="student-life/life.html">Student Life</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/athletics.html">Athletics</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/enrichment.html">Enrichment Programs</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/pathfinders.html">Pathfinders</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/house.html">House</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/after-school.html">After School Program</a></li>
                                            <li class="menu-item" data-size="60"><a href="student-life/video-library.html">Video Library</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item kingster-normal-menu">
                                        <a href="parents/partnership.html">Parents</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="parents/partnership.html">Parent Partnership</a></li>
                                            <li class="menu-item" data-size="60"><a href="parents/resources.html">Parent Resources</a></li>
                                            <li class="menu-item" data-size="60"><a href="parents/cultivate.html">Cultivate</a></li>
                                            <li class="menu-item" data-size="60"><a href="parents/bloghaven.html">The Bloghaven</a></li>
                                            <li class="menu-item" data-size="60"><a href="parents/alma.html">Alma</a></li>
                                            <li class="menu-item" style = "display:none;" data-size="60"><a href="parents/r2g2podcast.html">R2G2 Podcast</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item kingster-normal-menu">
                                        <a href="support/giving.html">Support</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="support/giving.html">Giving to Stonehaven</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/knight-fund.html">Knight Fund</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/capital-campaign.html">Capital Campaign</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/legacy-giving.html">Legacy Giving</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/georgia-goal.html">Georgia GOAL</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/partner-programs.html">Partner Programs</a></li>
                                            <li class="menu-item" data-size="60"><a href="support/corporate-sponsors.html">Corporate Sponsors</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                            <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><img src="upload/bg-search-bar.jpg" style="opacity: 0.0" alt="" /></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="http://www.stonehavenschool.org/">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

    <?php
	}


	public static function Footer()	{
	?>
            <footer>
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                                <div class="textwidget">
                                    <p>
                                        <img src="upload/footer-logo.png" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                        <br /> Main Campus (K-6th)
                                        <br /> 1480 Joyner Avenue
                                        <br /> Marietta, GA 30060
                                        <br />
                                        <br /> Upper School Campus (7-10th)
                                        <br /> 1650 Old Concord Road
                                        <br /> Marietta, GA 30060
                                    <p>
                                        <span id="span_1dd7_11">(770) 874-8885</span>
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                                        <br /> <a id="a_1dd7_8" href="mailto:frontdesk@stonehavenschool.org">frontdesk@stonehavenschool.org</a>
                                    </p>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Academics</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                    <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="academics/lower-philosophy.html">Academic Philosophy</a></li>
                                        <li class="menu-item"><a href="academics/scope-sequence.html">Curriculum</a></li>
                                        <li class="menu-item"><a href="about-us/faculty.html">Faculty & Staff</a></li>
                                        <li class="menu-item"><a href="https://careers.smartrecruiters.com/ForrestJohnson/the-stonehaven-school">Employment</a></li>
                                        <li class="menu-item"><a href="academics/fine-arts.html">Fine Arts</a></li>
                                        <li class="menu-item"><a href="academics/nature-studies.html">Nature Studies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Admissions</h3><span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="admissions/admissions-process.html">Admissions Process</a></li>
                                        <li class="menu-item"><a href="admissions/affordability.html">Affordability</a></li>
                                        <li class="menu-item"><a href="admissions/tours-openhouses.html">Tours & Open Houses</a></li>
                                        <li class="menu-item"><a href="https://stonehaven.almastart.com/">Apply Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Students & Parents</h3><span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="student-life/life.html">Student Life</a></li>
                                        <li class="menu-item"><a href="student-life/athletics.html">Athletics</a></li>
                                        <li class="menu-item"><a href="student-life/house.html">House</a></li>
                                        <li class="menu-item"><a href="parents/bloghaven.html">Bloghaven</a></li>
                                        <li class="menu-item"><a href="parents/cultivate.html">Cultivate</a></li>
                                        <li class="menu-item"><a href="https://stonehavenschool.square.site/" target="new">School Store</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">Copyright All Rights Reserved 2020, The Stonehaven School</div>
                        <div class="kingster-copyright-right kingster-item-pdlr">
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                                <a href="https://www.facebook.com/stonehavenschool" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://vimeo.com/user39763469" target="_blank" class="gdlr-core-social-network-icon" title="vimeo">
                                    <i class="fa fa-vimeo"></i>
                                </a>
                                <a href="https://twitter.com/StonehavenEDU" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/thestonehavenschool/" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    <?php
	}


}

?>