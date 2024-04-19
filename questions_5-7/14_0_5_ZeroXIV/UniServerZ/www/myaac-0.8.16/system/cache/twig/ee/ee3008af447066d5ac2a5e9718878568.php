<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* news.html.twig */
class __TwigTemplate_47fb69e9ecf5abf8affc56cf2e81434f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"News\">
\t<div class=\"NewsHeadline\">
\t\t<div class=\"NewsHeadlineBackground\" style=\"background-image:url(";
        // line 3
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/newsheadline_background.gif)\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/news/icon_";
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo ".gif\" class=\"NewsHeadlineIcon\" />
\t\t\t<div class=\"NewsHeadlineDate\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "news_date_format", [], "any", false, false, false, 5)), "html", null, true);
        echo " - </div>
\t\t\t<div class=\"NewsHeadlineText\">";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</div>
\t\t\t";
        // line 7
        if ( !twig_test_empty(($context["author"] ?? null))) {
            // line 8
            echo "\t\t\t<div class=\"NewsHeadlineAuthor\"><b>Author: </b><i>";
            echo twig_escape_filter($this->env, ($context["author"] ?? null), "html", null, true);
            echo "</i></div>
\t\t\t";
        }
        // line 10
        echo "\t\t</div>
\t</div>
</div>
<table style=\"clear:both\" border=0 cellpadding=0 cellspacing=0 width=\"100%\" >
\t<tr>
\t\t<td style=\"padding-left:10px;padding-right:10px;\" >";
        // line 15
        echo ($context["content"] ?? null);
        echo "</td>
\t</tr>
\t";
        // line 17
        if ( !(null === ($context["comments"] ?? null))) {
            // line 18
            echo "\t<tr>
\t\t<td>
\t\t\t<div style=\"text-align: right; margin-right: 10px;\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
            echo "\">» Comment on this news</a></div>
\t\t</td>
\t</tr>
\t";
        }
        // line 24
        echo "</table>
<br/>";
    }

    public function getTemplateName()
    {
        return "news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  85 => 20,  81 => 18,  79 => 17,  74 => 15,  67 => 10,  61 => 8,  59 => 7,  55 => 6,  51 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "news.html.twig", "D:\\Users\\ChrisR\\Documents\\GitHub\\Tavernlight---ChrisRegan\\questions_5-7\\14_0_5_ZeroXIV\\UniServerZ\\www\\myaac-0.8.16\\templates\\kathrine\\news.html.twig");
    }
}
