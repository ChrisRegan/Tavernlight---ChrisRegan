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

/* install.config.html.twig */
class __TwigTemplate_c30e3d7e1266149f9b52db29a806a3c9 extends \Twig\Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, twig_constant("BASE_URL"), "html", null, true);
        echo "install/\" method=\"post\" autocomplete=\"off\">
\t<input type=\"hidden\" name=\"step\" id=\"step\" value=\"database\" />
\t<table>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "server_path", 1 => "mail_admin", 2 => "mail_address"]);
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 5
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_";
            // line 7
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">
\t\t\t\t\t<span>";
            // line 8
            echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["locale"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("step_config_" . $context["value"])] ?? null) : null), "html", null, true);
            echo "</span>
\t\t\t\t</label>
\t\t\t\t<br>
\t\t\t\t<input type=\"text\" name=\"vars[";
            // line 11
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "]\" id=\"vars_";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            if ( !(null === (($__internal_compile_1 = ($context["session"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("var_" . $context["value"])] ?? null) : null))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["session"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[("var_" . $context["value"])] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
            // line 14
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["locale"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[(("step_config_" . $context["value"]) . "_desc")] ?? null) : null), "html", null, true);
            echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_date_timezone\">
\t\t\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_timezone", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[date_timezone]\" id=\"vars_date_timezone\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 26
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "\"";
            if ((( !(null === (($__internal_compile_4 = ($context["session"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["var_date_timezone"] ?? null) : null)) && ((($__internal_compile_5 = ($context["session"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["var_date_timezone"] ?? null) : null) == $context["timezone"])) || ((null === (($__internal_compile_6 = ($context["session"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["var_date_timezone"] ?? null) : null)) && ($context["timezone"] == "Europe/Berlin")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["timezone"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_timezone_desc", [], "any", false, false, false, 31), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_client\">
\t\t\t\t\t<span>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_client", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<select name=\"vars[client]\" id=\"vars_client\">
\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["version"]) {
            // line 42
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if (( !(null === (($__internal_compile_7 = ($context["session"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["var_client"] ?? null) : null)) && ((($__internal_compile_8 = ($context["session"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["var_client"] ?? null) : null) == $context["id"]))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["version"], "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</select>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_client_desc", [], "any", false, false, false, 47), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<label for=\"vars_usage\">
\t\t\t\t\t<span>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_usage", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
\t\t\t\t</label>
\t\t\t\t<br/>
\t\t\t\t<input type=\"hidden\" value=\"0\" name=\"vars[usage]\">
\t\t\t\t<input type=\"checkbox\" name=\"vars[usage]\" id=\"vars_usage\" value=\"1\"";
        // line 57
        if (((null === (($__internal_compile_9 = ($context["session"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["var_usage"] ?? null) : null)) || ((($__internal_compile_10 = ($context["session"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["var_usage"] ?? null) : null) == 1))) {
            echo " checked";
        }
        echo "/>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<em>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["locale"] ?? null), "step_config_usage_desc", [], "any", false, false, false, 60), "html", null, true);
        echo "</em>
\t\t\t</td>
\t\t</tr>
\t</table>

\t";
        // line 65
        if (array_key_exists("errors", $context)) {
            // line 66
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 67
                echo "\t\t\t<p class=\"error\">";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</p>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t";
        }
        // line 70
        echo "\t";
        echo ($context["buttons"] ?? null);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "install.config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 70,  210 => 69,  201 => 67,  196 => 66,  194 => 65,  186 => 60,  178 => 57,  171 => 53,  162 => 47,  157 => 44,  142 => 42,  138 => 41,  131 => 37,  122 => 31,  117 => 28,  102 => 26,  98 => 25,  91 => 21,  86 => 18,  76 => 14,  62 => 11,  56 => 8,  52 => 7,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install.config.html.twig", "D:\\Users\\ChrisR\\Documents\\GitHub\\Tavernlight---ChrisRegan\\questions_5-7\\14_0_5_ZeroXIV\\UniServerZ\\www\\myaac-0.8.16\\system\\templates\\install.config.html.twig");
    }
}
