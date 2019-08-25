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

/* modules/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig */
class __TwigTemplate_a1b51ac6918678d0c9d0b0dc7ef539ca89553bfa75bac109b1a52dbff1deffbf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 4, "if" => 8];
        $filters = ["escape" => 1, "t" => 9];
        $functions = ["attach_library" => 1, "url" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 't'],
                ['attach_library', 'url']
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
        // line 1
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/styling"), "html", null, true);
        echo "

";
        // line 4
        echo "<div style=\"display: none\">";
        $this->loadTemplate(($context["social_buttons_sprite"] ?? null), "modules/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", 4)->display($context);
        echo "</div>

<div class=\"social-sharing-buttons\">
    <!-- Facebook share button -->
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook", [])) {
            // line 9
            echo "        <a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#facebook\" />
            </svg>
        </a>
    ";
        }
        // line 15
        echo "
    <!-- Twitter share button -->
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "twitter", [])) {
            // line 18
            echo "        <a href=\"http://twitter.com/home?status=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "+";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Twitter\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#twitter\" />
            </svg>
        </a>
    ";
        }
        // line 24
        echo "
    <!-- WhatsApp share button -->
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "whatsapp", [])) {
            // line 27
            echo "        <a href=\"https://wa.me/?text=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " WhatsApp\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#whatsapp\" />
            </svg>
        </a>
    ";
        }
        // line 33
        echo "
    <!-- Facebook Messenger share button -->
    ";
        // line 35
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "facebook_messenger", [])) {
            // line 36
            echo "        <a href=\"http://www.facebook.com/dialog/send?app_id=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "facebook_app_id", [])), "html", null, true);
            echo "&link=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&redirect_uri=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<current>"));
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Facebook Messenger\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#messenger\" />
            </svg>
        </a>
    ";
        }
        // line 42
        echo "
    <!-- Pinterest share button -->
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "pinterest", [])) {
            // line 45
            echo "        <a href=\"http://pinterest.com/pin/create/link/?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&description=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Pinterest\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#pinterest\" />
            </svg>
        </a>
    ";
        }
        // line 51
        echo "
    <!-- Linkedin share button -->
    ";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "linkedin", [])) {
            // line 54
            echo "        <a href=\"http://www.linkedin.com/shareArticle?mini=true&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&source=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "base_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Linkedin\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#linkedin\" />
            </svg>
        </a>
    ";
        }
        // line 60
        echo "
    <!-- Google+ share button -->
    ";
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "googleplus", [])) {
            // line 63
            echo "        <a href=\"https://plus.google.com/share?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Google+\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#googleplus\" />
            </svg>
        </a>
    ";
        }
        // line 69
        echo "
    <!-- Digg share button -->
    ";
        // line 71
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "digg", [])) {
            // line 72
            echo "        <a href=\"http://www.digg.com/submit?phase=2&url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Digg\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#digg\" />
            </svg>
        </a>
    ";
        }
        // line 78
        echo "
    <!-- StumbleUpon share button -->
    ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "stumbleupon", [])) {
            // line 81
            echo "        <a href=\"http://www.stumbleupon.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " StumbleUpon\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#stumbleupon\" />
            </svg>
        </a>
    ";
        }
        // line 87
        echo "
    <!-- Delicious share button -->
    ";
        // line 89
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "delicious", [])) {
            // line 90
            echo "        <a href=\"http://del.icio.us/post?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&notes=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "description", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Delicious\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#delicious\" />
            </svg>
        </a>
    ";
        }
        // line 96
        echo "
    <!-- Slashdot share button -->
    ";
        // line 98
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "slashdot", [])) {
            // line 99
            echo "        <a href=\"http://slashdot.org/bookmark.pl?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Slashdot\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#slashdot\" />
            </svg>
        </a>
    ";
        }
        // line 105
        echo "
    <!-- Tumblr share button -->
    ";
        // line 107
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "tumblr", [])) {
            // line 108
            echo "        <a href=\"http://www.tumblr.com/share?v=3&u=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&t=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Tumblr\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#tumblr\" />
            </svg>
        </a>
    ";
        }
        // line 114
        echo "
    <!-- Reddit share button -->
    ";
        // line 116
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "reddit", [])) {
            // line 117
            echo "        <a href=\"http://www.reddit.com/submit?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Reddit\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#reddit\" />
            </svg>
        </a>
    ";
        }
        // line 123
        echo "
    <!-- Evernote share button -->
    ";
        // line 125
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "evernote", [])) {
            // line 126
            echo "        <a href=\"http://www.evernote.com/clip.action?url=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "&title=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " Evernote\" class=\"social-sharing-buttons__button\" rel=\"noopener\">
            <svg width=\"";
            // line 127
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#evernote\" />
            </svg>
        </a>
    ";
        }
        // line 132
        echo "
    <!-- Email share button -->
    ";
        // line 134
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "email", [])) {
            // line 135
            echo "        <a href=\"mailto:?subject=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "title", [])), "html", null, true);
            echo "&body=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "page_url", [])), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share to"));
            echo " E-mail\" class=\"social-sharing-buttons__button\" target=\"_blank\" rel=\"noopener\">
            <svg width=\"";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#email\" />
            </svg>
        </a>
    ";
        }
        // line 141
        echo "
    <!-- Copy link share button -->
    ";
        // line 143
        if ($this->getAttribute($this->getAttribute(($context["items"] ?? null), "services", []), "copy", [])) {
            // line 144
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("better_social_sharing_buttons/copy-current-url"), "html", null, true);
            echo "
        <button class=\"btnCopy social-sharing-buttons__button\">
            <svg width=\"";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "width", [])), "html", null, true);
            echo "\" height=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "height", [])), "html", null, true);
            echo "\" style=\"border-radius:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["items"] ?? null), "radius", [])), "html", null, true);
            echo ";\">
                <use xlink:href=\"";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_buttons_sprite"] ?? null)), "html", null, true);
            echo "#copy\" />
            </svg>
            <div class=\"social-sharing-buttons__popup\">";
            // line 149
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copied to clipboard"));
            echo "</div>
        </button>
    ";
        }
        // line 152
        echo "
    <script type=\"text/javascript\">

    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 152,  541 => 149,  536 => 147,  528 => 146,  522 => 144,  520 => 143,  516 => 141,  509 => 137,  501 => 136,  492 => 135,  490 => 134,  486 => 132,  479 => 128,  471 => 127,  462 => 126,  460 => 125,  456 => 123,  449 => 119,  441 => 118,  432 => 117,  430 => 116,  426 => 114,  419 => 110,  411 => 109,  402 => 108,  400 => 107,  396 => 105,  389 => 101,  381 => 100,  372 => 99,  370 => 98,  366 => 96,  359 => 92,  351 => 91,  340 => 90,  338 => 89,  334 => 87,  327 => 83,  319 => 82,  310 => 81,  308 => 80,  304 => 78,  297 => 74,  289 => 73,  280 => 72,  278 => 71,  274 => 69,  267 => 65,  259 => 64,  252 => 63,  250 => 62,  246 => 60,  239 => 56,  231 => 55,  220 => 54,  218 => 53,  214 => 51,  207 => 47,  199 => 46,  190 => 45,  188 => 44,  184 => 42,  177 => 38,  169 => 37,  158 => 36,  156 => 35,  152 => 33,  145 => 29,  137 => 28,  130 => 27,  128 => 26,  124 => 24,  117 => 20,  109 => 19,  100 => 18,  98 => 17,  94 => 15,  87 => 11,  79 => 10,  70 => 9,  68 => 8,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/better_social_sharing_buttons/theme/better-social-sharing-buttons.html.twig", "C:\\MAMP\\htdocs\\drupal\\modules\\better_social_sharing_buttons\\theme\\better-social-sharing-buttons.html.twig");
    }
}
