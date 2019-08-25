<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/schweepv2/templates/layout/page.html.twig */
class __TwigTemplate_06104116a7e02f62a98621e00814eafd4a9599c513752c8bfbaec192173b6e1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 56];
        $filters = ["escape" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "    <!-- Preloader -->
\t<div class=\"spinner-wrapper\">
        <div class=\"spinner\">
            <div class=\"bounce1\"></div>
            <div class=\"bounce2\"></div>
            <div class=\"bounce3\"></div>
        </div>
    </div>
    <!-- end of preloader -->

";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 57
            echo "  <nav class=\"navbar navbar-expand-md navbar-dark navbar-custom fixed-top\">
      ";
            // line 58
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
  </nav>
";
        }
        // line 61
        echo "

    <!-- Header -->
    <header id=\"header\" class=\"header\">
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-container\">
                            <h1>MOBILE APP <br>FOR <span id=\"js-rotating\">SLEEPERS, MEMERS, PEOPLE THAT ARE AWAKE</span></h1>
                            <p class=\"p-large\">Schweep is one of the easiest and feature packed sleep tracking apps in the market. Download it today!</p>
                            <a class=\"btn-solid-lg page-scroll\" href=\"#your-link\"><i class=\"fab fa-apple\"></i>APP STORE</a>
                            <a class=\"btn-solid-lg page-scroll\" href=\"#your-link\"><i class=\"fab fa-google-play\"></i>PLAY STORE</a>
                        </div>
                    </div> <!-- end of col -->
                    <div class=\"col-lg-6\">
                        <div class=\"image-container\">
                            <img id=\"header-1\" class=\"img-fluid\" src=\"../../images/header-iphone.png\" alt=\"alternative\">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Features -->
    <div id=\"features\" class=\"tabs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2>FEATURES</h2>
                    <div class=\"p-heading p-large\">Schweep was designed based on input from various sleep experts</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class=\"row\">

                <!-- Tabs Links -->
                <ul class=\"nav nav-tabs\" id=\"SchweepTabs\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"nav-tab-1\" data-toggle=\"tab\" href=\"#tab-1\" role=\"tab\" aria-controls=\"tab-1\" aria-selected=\"true\"><i class=\"fas fa-cog\"></i>CONFIGURING</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"nav-tab-2\" data-toggle=\"tab\" href=\"#tab-2\" role=\"tab\" aria-controls=\"tab-2\" aria-selected=\"false\"><i class=\"fas fa-binoculars\"></i>TRACKING</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"nav-tab-3\" data-toggle=\"tab\" href=\"#tab-3\" role=\"tab\" aria-controls=\"tab-3\" aria-selected=\"false\"><i class=\"fas fa-search\"></i>MONITORING</a>
                    </li>
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class=\"tab-content\" id=\"SchweepTabsContent\">

                    <!-- Tab -->
                    <div class=\"tab-pane fade show active\" id=\"tab-1\" role=\"tabpanel\" aria-labelledby=\"tab-1\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <!-- Icon Cards Pane -->
                                <div class=\"col-lg-4\">
                                    <div class=\"card left-pane first\">
                                        <div class=\"card-body\">
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Your data</h4>
                                                <p>Like any self improving process, everything starts with how you are doing at this moment</p>
                                            </div>
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-compass\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card left-pane\">
                                        <div class=\"card-body\">
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Visual Editor</h4>
                                                <p>Schweep provides a well designed and ergonomic visual editor for you to edit your data and input data</p>
                                            </div>
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-file-code\"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card left-pane\">
                                        <div class=\"card-body\">
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Options</h4>
                                                <p>You can input when you went to sleep, when you woke up, how deep your sleep was and how awake you are</p>
                                            </div>
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-gem\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class=\"col-lg-4\">
                                    <img id=\"feature-1\" class=\"img-fluid\" src=\"../../images/features-iphone-1.png\">
                                </div>
                                <!-- end of image pane -->

                                <!-- Icon Cards Pane -->
                                <div class=\"col-lg-4\">
                                    <div class=\"card right-pane first\">
                                        <div class=\"card-body\">
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-calendar-check\"></i>
                                            </div>
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Sleeping advanced</h4>
                                                <p>Input your data daily so you will be able to get a refined look at how you sleep</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card right-pane\">
                                        <div class=\"card-body\">
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-bookmark\"></i>
                                            </div>
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Easy Reading</h4>
                                                <p>Read through articles and more to learn more about sleeping</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card right-pane\">
                                        <div class=\"card-body\">
                                            <div class=\"card-icon\">
                                                <i class=\"fas fa-cube\"></i>
                                            </div>
                                            <div class=\"text-wrapper\">
                                                <h4 class=\"card-title\">Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class=\"tab-pane fade\" id=\"tab-2\" role=\"tabpanel\" aria-labelledby=\"tab-2\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <!-- Image Pane -->
                                <div class=\"col-md-4\">
                                    <img id=\"feature-2\" class=\"img-fluid\" src=\"../images/features-iphone-2.png\">
                                </div>
                                <!-- end of image pane -->

                                <!-- Text And Icon Cards Area -->
                                <div class=\"col-md-8\">
                                    <div class=\"text-area\">
                                        <h3>Track Result Based On Your</h3>
                                        <p>After you've configured all your data you can see trackers and start collecting <a class=\"turquoise\" href=\"#your-link\">interesting details</a>. You can always change them.</p>
                                    </div> <!-- end of text-area -->

                                    <div class=\"icon-cards-area\">
                                            <div class=\"card\">
                                                <div class=\"card-icon\">
                                                    <i class=\"fas fa-cube\"></i>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h4 class=\"card-title\">Good Foundation</h4>
                                                    <p>Get a solid foundation for your self development efforts.</p>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-icon\">
                                                    <i class=\"far fa-bookmark\"></i>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h4 class=\"card-title\">Easy Reading</h4>
                                                    <p>Read through articles and more to learn more about sleeping</p>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-icon\">
                                                    <i class=\"far fa-calendar-check\"></i>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h4 class=\"card-title\">Calendar Input</h4>
                                                    <p>Schedule your sleep patterns</p>
                                                </div>
                                            </div>
                                            <div class=\"card\">
                                                <div class=\"card-icon\">
                                                    <i class=\"far fa-file-code\"></i>
                                                </div>
                                                <div class=\"card-body\">
                                                    <h4 class=\"card-title\">Visual Editor</h4>
                                                    <p>Schweep provides a well designed and ergonomic visual editor for you to edit your data and input data</p>
                                                </div>
                                            </div>
                                    </div> <!-- end of icon cards area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class=\"tab-pane fade\" id=\"tab-3\" role=\"tabpanel\" aria-labelledby=\"tab-3\">
                        <div class=\"container\">
                            <div class=\"row\">

                                <!-- Text And Icon Cards Area -->
                                <div class=\"col-md-8\">
                                    <div class=\"icon-cards-area\">
                                        <div class=\"card\">
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-calendar-check\"></i>
                                            </div>
                                            <div class=\"card-body\">
                                                <h4 class=\"card-title\">Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-file-code\"></i>
                                            </div>
                                            <div class=\"card-body\">
                                                <h4 class=\"card-title\">Visual Editor</h4>
                                                <p>Schweep provides a well designed and ergonomic visual editor for you to edit your data and input data</p>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-icon\">
                                                <i class=\"fas fa-cube\"></i>
                                            </div>
                                            <div class=\"card-body\">
                                                <h4 class=\"card-title\">Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts.</p>
                                            </div>
                                        </div>
                                        <div class=\"card\">
                                            <div class=\"card-icon\">
                                                <i class=\"far fa-bookmark\"></i>
                                            </div>
                                            <div class=\"card-body\">
                                                <h4 class=\"card-title\">Easy Reading</h4>
                                                <p>Read through articles and more to learn more about sleeping</p>
                                            </div>
                                        </div>
                                    </div> <!-- end of icon cards area -->

                                    <div class=\"text-area\">
                                        <h3>Monitoring Tools Evaluation</h3>
                                        <p>Monitor the evolution of your sleep and health state using tools integrated in Schweep. The generated real time reports can be filtered based on any <a class=\"turquoise\" href=\"#your-link\">desired criteria</a>.</p>
                                    </div> <!-- end of text-area -->
                                </div> <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                                <!-- Image Pane -->
                                <div class=\"col-md-4\">
                                    <img id=\"feature-3\" class=\"img-fluid\" src=\"../images/features-iphone-3.png\">
                                </div>
                                <!-- end of image pane -->

                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div><!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of tabs -->
    <!-- end of features -->


    <!-- Video -->
    <div id=\"preview\" class=\"basic-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2>PREVIEW</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <!-- Video Preview -->
                    <div class=\"image-container\">
                        <div class=\"video-wrapper\">
                            <a class=\"popup-youtube\" href=\"https://www.youtube.com/watch?v=fLCjQJCekTs\" data-effect=\"fadeIn\">
                                <img id=\"video-frame\" class=\"img-fluid\" src=\"../images/video-frame.jpg\" alt=\"alternative\">
                                <span class=\"video-play-button\">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->


    <!-- Details 1 -->
    <div id=\"details\" class=\"basic-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <img id=\"details-1\" class=\"img-fluid\" src=\"../images/details-1-iphone.png\" alt=\"alternative\">
                </div> <!-- end of col -->
                <div class=\"col-lg-6\">
                    <div class=\"text-container\">
                        <h3>Goals Setting</h3>
                        <p>Schweep can easily help you track your personal development evolution if you take the time to properly setup your goals at the beginning of the training process. Check out the details</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class=\"basic-3\">
        <div class=\"second\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-container\">
                            <h3>Calendar Input</h3>
                            <p>The calendar input function enables the user to setup training, meditation and relaxation sessions with ease. Just open the feature and start setting up your time as you desire</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class=\"col-lg-6\">
                        <img id=\"details-2\" class=\"img-fluid\" src=\"../images/details-2-iphone.png\" alt=\"alternative\">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    <!-- Screenshots -->
    <div class=\"slider-2\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <!-- Image Slider -->
                    <div class=\"slider-container\">
                        <div class=\"swiper-container image-slider\">
                            <div class=\"swiper-wrapper\">

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-1.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-1\" class=\"img-fluid\" src=\"../images/screenshot-1.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-2.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-2\" class=\"img-fluid\" src=\"../images/screenshot-2.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-3.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-3\" class=\"img-fluid\" src=\"../images/screenshot-3.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-4.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-4\" class=\"img-fluid\" src=\"../images/screenshot-4.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-5.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-5\" class=\"img-fluid\" src=\"../images/screenshot-5.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-6.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-6\" class=\"img-fluid\" src=\"../images/screenshot-6.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-7.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-7\" class=\"img-fluid\" src=\"../images/screenshot-7.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class=\"swiper-slide\">
                                    <a href=\"../images/screenshot-8.png\" class=\"popup-link\" data-effect=\"fadeIn\">
                                        <img id=\"screenshot-8\" class=\"img-fluid\" src=\"../images/screenshot-8.png\" alt=\"alternative\">
                                    </a>
                                </div>
                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class=\"swiper-button-next\"></div>
                            <div class=\"swiper-button-prev\"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class=\"basic-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-xl-5\">
                    <div class=\"text-container\">
                        <h2>Download <span class=\"blue\">Schweep</span></h2>
                        <a class=\"btn-solid-lg\" href=\"#your-link\"><i class=\"fab fa-apple\"></i>APP STORE</a>
                        <a class=\"btn-solid-lg\" href=\"#your-link\"><i class=\"fab fa-google-play\"></i>PLAY STORE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class=\"col-lg-6 col-xl-7\">
                    <div class=\"image-container\">
                        <img id=\"download\" class=\"img-fluid\" src=\"../../images/download.png\" alt=\"alternative\">
                    </div> <!-- end of img-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


    <!-- Statistics -->
    <div class=\"counter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <!-- Counter -->
                    <div id=\"counter\">
                        <div class=\"cell\">
                            <div class=\"counter-value number-count\" data-count=\"231\">1</div>
                            <p class=\"counter-info\">Happy Users</p>
                        </div>
                        <div class=\"cell\">
                            <div class=\"counter-value number-count\" data-count=\"85\">1</div>
                            <p class=\"counter-info\">Issues Solved</p>
                        </div>
                        <div class=\"cell\">
                            <div class=\"counter-value number-count\" data-count=\"59\">1</div>
                            <p class=\"counter-info\">Good Reviews</p>
                        </div>
                        <div class=\"cell\">
                            <div class=\"counter-value number-count\" data-count=\"127\">1</div>
                            <p class=\"counter-info\">Case Studies</p>
                        </div>
                    </div>
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Contact -->
    <div id=\"contact\" class=\"form\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2>CONTACT</h2>
                    <ul class=\"list-unstyled li-space-lg\">
                        <li class=\"address\">Don't hesitate to give us a call or just use the contact form below</li>
                        <li><i class=\"fas fa-map-marker-alt\"></i>Industrieweg 232, 9030 Mariakerke (Gent)</li>
                        <li><i class=\"fas fa-phone\"></i><a class=\"blue\" href=\"tel:003024630820\">+32 9 234 86 00</a></li>
                        <li><i class=\"fas fa-envelope\"></i><a class=\"blue\" href=\"mailto:office@Schweep.com\">info.grafische.digitalemedia@arteveldehs.be</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3\">

                  ";
        // line 583
        if ($this->getAttribute(($context["page"] ?? null), "contact", [])) {
            // line 584
            echo "                    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact", [])), "html", null, true);
            echo "
                  ";
        }
        // line 586
        echo "
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <div class=\"footer-col\">
                        <h4>About Schweep</h4>
                        <p>We're passionate about creating the best mobile app for sleep development</p>
                    </div>
                </div> <!-- end of col -->
                <div class=\"col-md-4\">
                    <div class=\"footer-col middle\">
                        <h4>Important Links</h4>
                        <ul class=\"list-unstyled li-space-lg\">
                            <li class=\"media\">
                                <i class=\"fas fa-square\"></i>
                                <div class=\"media-body\">Our business partners <a class=\"turquoise\" href=\"#your-link\">arteveldehogeschool.com</a></div>
                            </li>
                            <li class=\"media\">
                                <i class=\"fas fa-square\"></i>
                                <div class=\"media-body\">Read our <a class=\"turquoise\" href=\"terms-conditions.html\">Terms & Conditions</a>, <a class=\"turquoise\" href=\"privacy-policy.html\">Privacy Policy</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class=\"col-md-4\">
                    <div class=\"footer-col last\">
                        <h4>Social Media</h4>
                          ";
        // line 622
        if ($this->getAttribute(($context["page"] ?? null), "social", [])) {
            // line 623
            echo "                            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social", [])), "html", null, true);
            echo "
                          ";
        }
        // line 625
        echo "                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p class=\"p-small\">Copyright © Schweep</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/schweepv2/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 625,  650 => 623,  648 => 622,  610 => 586,  604 => 584,  602 => 583,  78 => 61,  72 => 58,  69 => 57,  67 => 56,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/schweepv2/templates/layout/page.html.twig", "C:\\MAMP\\htdocs\\drupal\\themes\\custom\\schweepv2\\templates\\layout\\page.html.twig");
    }
}
