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

/* account.management.html.twig */
class __TwigTemplate_740a838f1d529a54d54a4f2bf371e699 extends \Twig\Template
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
        echo "<style type=\"text/css\">
\t#account-manage {
\t\twidth: 100%;
\t\tmargin: auto;
\t\tpadding: 10px;
\t}
\tdiv#one {
\t\twidth: 150px;
\t\tfloat: left;
\t}
\tdiv#two {
\t\tmargin-left: 150px;
\t\tpadding-left: 10px;
\t}

\t.vertical-menu a {
\t\tbackground-color: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 17), "html", null, true);
        echo "; /* Grey background color */
\t\tcolor: black; /* Black text color */
\t\tdisplay: block; /* Make the links appear below each other */
\t\tpadding: 12px; /* Add some padding */
\t\ttext-decoration: none; /* Remove underline from links */
\t}

\t.vertical-menu a:hover {
\t\tbackground-color: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 25), "html", null, true);
        echo "; /* Dark grey background on mouse-over */
\t}
</style>
";
        // line 28
        $context["menus"] = ["Create Character" => "account/character/create", "Delete Character" => "account/character/delete", "Change Info" => "account/info", "Change Password" => "account/password", "Change Email" => "account/email"];
        // line 32
        echo "<div id=\"account-manage\">
\t<div id=\"one\">
\t\t<div class=\"vertical-menu\">
\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/manage"), "html", null, true);
        echo "\">My Account</a>
\t\t\t";
        // line 36
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 37
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/register"), "html", null, true);
            echo "\">Register Account</a>
\t\t\t";
        }
        // line 39
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 40
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()($context["link"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_change_character_name", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/name"), "html", null, true);
            echo "\">Change Name</a>
\t\t\t";
        }
        // line 45
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_change_character_sex", [], "any", false, false, false, 45)) {
            // line 46
            echo "\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/sex"), "html", null, true);
            echo "\">Change Sex</a>
\t\t\t";
        }
        // line 48
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/logout"), "html", null, true);
        echo "\">Logout</a>
\t\t</div>
\t</div>
\t<div id=\"two\">
\t\t<h1>My account</h1>
\t\t<p>Welcome to your account page, ";
        // line 53
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "<br>
\t\t\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 54), "freePremium", [], "any", false, false, false, 54)) {
            // line 55
            echo "\t\t\tYou have unlimited Premium Account.
\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t";
            $context["premiumDays"] = twig_get_attribute($this->env, $this->source, ($context["account_logged"] ?? null), "getPremDays", [], "method", false, false, false, 57);
            // line 58
            echo "\t\t\t\t";
            if ((($context["premiumDays"] ?? null) == 0)) {
                // line 59
                echo "\t\t\t\tYou don't have Premium Account
\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\tYou have ";
                echo twig_escape_filter($this->env, ($context["premiumDays"] ?? null), "html", null, true);
                echo " days remaining Premium Account.
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t";
        }
        // line 64
        echo "\t\t</p>

\t\t";
        // line 67
        echo "\t\t";
        if (twig_test_empty(($context["recovery_key"] ?? null))) {
            // line 68
            echo "\t\t<div style=\"text-align:center\">
\t\t\tYou can register your account for increased protection. Click on \"Register Account\" and get your free recovery key today!<br/>
\t\t\t<form action=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/register"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t";
            // line 71
            $context["button_name"] = "Register Account";
            // line 72
            echo "\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 72)->display($context);
            // line 73
            echo "\t\t\t</form>
\t\t</div>
\t\t<br/>
\t\t";
        }
        // line 77
        echo "
\t\t";
        // line 78
        if (($context["email_request"] ?? null)) {
            // line 79
            echo "\t\t\t<div style=\"text-align:center\">
\t\t\t\tA request has been submitted to change the email address of this account to <b>";
            // line 80
            echo twig_escape_filter($this->env, ($context["email_new"] ?? null), "html", null, true);
            echo "</b>. After <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["email_new_time"] ?? null), "j F Y, G:i:s"), "html", null, true);
            echo "</b> you can accept the new email address and finish the process. Please cancel the request if you do not want your email address to be changed! Also cancel the request if you have no access to the new email address!

\t\t\t\t<form action=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/email"), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t";
            // line 83
            $context["button_name"] = "Edit";
            // line 84
            echo "\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 84)->display($context);
            // line 85
            echo "\t\t\t\t</form>
\t\t\t</div>
\t\t<br/><br/>
\t\t";
        }
        // line 89
        echo "\t\t<a name=\"General+Information\"></a>
\t\t<h2>General Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 92), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Account ";
        // line 93
        if (twig_constant("USE_ACCOUNT_NAME")) {
            echo "Name";
        } else {
            echo "Number";
        }
        echo ":</td>
\t\t\t\t<td>";
        // line 94
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 96), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 90px;\">Email Address:</td>
\t\t\t\t<td>";
        // line 98
        echo twig_escape_filter($this->env, (($context["account_email"] ?? null) . ($context["email_change"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t<form action=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/email"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 100
        $context["button_name"] = "Change Email";
        // line 101
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 101)->display($context);
        // line 102
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 105), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Created:</td>
\t\t\t\t<td>";
        // line 107
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["account_created"] ?? null), "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 109), "html", null, true);
        echo ";\" >
\t\t\t\t<td>Last Login:</td>
\t\t\t\t<td>";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "j F Y, G:i:s"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 114
        echo "\t\t\t<tr style=\"background-color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 114);
        echo ";\" >
\t\t\t\t<td>Account Status:</td>
\t\t\t\t<td>";
        // line 116
        echo ($context["account_status"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 118
        echo twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 118);
        echo ";\" >
\t\t\t\t<td>Registered:</td>
\t\t\t\t<td>";
        // line 120
        echo ($context["account_registered"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 123
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Public+Information\"></a>
\t\t<h2>Public Information</h2>
\t\t<table width=\"100%\">
\t\t\t<tr style=\"background-color: ";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lightborder", [], "any", false, false, false, 128), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Real name:</td>
\t\t\t\t<td>";
        // line 130
        echo twig_escape_filter($this->env, ($context["account_rlname"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr style=\"background-color: ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "darkborder", [], "any", false, false, false, 132), "html", null, true);
        echo ";\" >
\t\t\t\t<td style=\"width: 80px;\">Location:</td>
\t\t\t\t<td >";
        // line 134
        echo twig_escape_filter($this->env, ($context["account_location"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</table>
\t\t<form action=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/info"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t";
        // line 138
        $context["button_name"] = "Change Info";
        // line 139
        echo "\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 139)->display($context);
        // line 140
        echo "\t\t</form>
\t\t<br/>
\t\t<a name=\"Account+Logs\" ></a>
\t\t<h2>Action Log</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 145), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Action</th><th>Date</th><th>IP</th>
\t\t\t</tr>
\t\t\t";
        // line 149
        echo "\t\t\t\t";
        $context["i"] = 0;
        // line 150
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 151
            echo "\t\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 152
            echo "\t\t\t\t\t<tr style=\"background-color: ";
            echo $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null));
            echo "\">
\t\t\t\t\t\t<td>";
            // line 153
            echo twig_get_attribute($this->env, $this->source, $context["action"], "action", [], "any", false, false, false, 153);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 154
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "date", [], "any", false, false, false, 154), "jS F Y H:i:s");
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 155
            echo twig_get_attribute($this->env, $this->source, $context["action"], "ip", [], "any", false, false, false, 155);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t";
        // line 159
        echo "\t\t</table>
\t\t<br/>
\t\t<a name=\"Characters\" ></a>
\t\t<h2>Character list: ";
        // line 162
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["players"] ?? null)), "html", null, true);
        echo " characters.</h2>
\t\t<table>
\t\t\t<tr bgcolor=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "vdarkborder", [], "any", false, false, false, 164), "html", null, true);
        echo "\" class=\"white\">
\t\t\t\t<th>Name</th><th>Level</th><th>Vocation</th><th>Town</th><th>Last login</th><th>Status</th><th>Hide</th><th>Edit</th>
\t\t\t</tr>
\t\t\t";
        // line 167
        $context["i"] = 0;
        // line 168
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["players"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 169
            echo "\t\t\t\t";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 170
            echo "\t\t\t\t<tr bgcolor=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('getStyle')->getCallable()(($context["i"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()(("characters/" . $this->env->getFilter('urlencode')->getCallable()(twig_get_attribute($this->env, $this->source, $context["player"], "getName", [], "method", false, false, false, 172)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getName", [], "method", false, false, false, 172), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getLevel", [], "method", false, false, false, 174), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getVocationName", [], "method", false, false, false, 175), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 176
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "towns", [], "any", false, false, false, 176)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["player"], "getTownId", [], "method", false, false, false, 176)] ?? null) : null), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "getLastLogin", [], "method", false, false, false, 177) > 0)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "getLastLogin", [], "any", false, false, false, 177), "d F Y (H:i)"), "html", null, true);
            } else {
                echo "Never.";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 178
            if (twig_get_attribute($this->env, $this->source, $context["player"], "isOnline", [], "method", false, false, false, 178)) {
                echo "<span style=\"color: green\">ONLINE</span>";
            } else {
                echo "<span style=\"color: red\">Offline</span>";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 179
            if (twig_get_attribute($this->env, $this->source, $context["player"], "isHidden", [], "method", false, false, false, 179)) {
                echo "Hidden";
            } else {
                echo "Visible";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 180
            if ( !twig_get_attribute($this->env, $this->source, $context["player"], "isDeleted", [], "method", false, false, false, 180)) {
                echo "[<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()(("account/character/comment/" . $this->env->getFilter('urlencode')->getCallable()(twig_get_attribute($this->env, $this->source, $context["player"], "getName", [], "any", false, false, false, 180)))), "html", null, true);
                echo "\" >Edit</a>]";
            }
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t\t</table>
\t\t<br/>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/create"), "html", null, true);
        echo "\" method=\"post\" >
\t\t\t\t\t\t";
        // line 189
        $context["button_name"] = "Create Character";
        // line 190
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 190)->display($context);
        // line 191
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_change_character_name", [], "any", false, false, false, 193)) {
            // line 194
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/name"), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 196
            $context["button_name"] = "Change Name";
            // line 197
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 197)->display($context);
            // line 198
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_change_character_sex", [], "any", false, false, false, 201)) {
            // line 202
            echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
            // line 203
            echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/sex"), "html", null, true);
            echo "\" method=\"post\" >
\t\t\t\t\t\t";
            // line 204
            $context["button_name"] = "Change Sex";
            // line 205
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 205)->display($context);
            // line 206
            echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t<td>
\t\t\t\t\t<form action=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/character/delete"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t\t\t\t";
        // line 211
        $context["button_name"] = "Delete Character";
        // line 212
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("buttons.base.html.twig", "account.management.html.twig", 212)->display($context);
        // line 213
        echo "\t\t\t\t\t</form>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "account.management.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 213,  546 => 212,  544 => 211,  540 => 210,  537 => 209,  532 => 206,  529 => 205,  527 => 204,  523 => 203,  520 => 202,  517 => 201,  512 => 198,  509 => 197,  507 => 196,  503 => 195,  500 => 194,  498 => 193,  494 => 191,  491 => 190,  489 => 189,  485 => 188,  478 => 183,  465 => 180,  457 => 179,  449 => 178,  441 => 177,  437 => 176,  433 => 175,  429 => 174,  422 => 172,  416 => 170,  413 => 169,  408 => 168,  406 => 167,  400 => 164,  395 => 162,  390 => 159,  388 => 158,  379 => 155,  375 => 154,  371 => 153,  366 => 152,  363 => 151,  358 => 150,  355 => 149,  349 => 145,  342 => 140,  339 => 139,  337 => 138,  333 => 137,  327 => 134,  322 => 132,  317 => 130,  312 => 128,  305 => 123,  300 => 120,  295 => 118,  290 => 116,  284 => 114,  279 => 111,  274 => 109,  269 => 107,  264 => 105,  259 => 102,  256 => 101,  254 => 100,  250 => 99,  246 => 98,  241 => 96,  236 => 94,  228 => 93,  224 => 92,  219 => 89,  213 => 85,  210 => 84,  208 => 83,  204 => 82,  197 => 80,  194 => 79,  192 => 78,  189 => 77,  183 => 73,  180 => 72,  178 => 71,  174 => 70,  170 => 68,  167 => 67,  163 => 64,  160 => 63,  154 => 61,  150 => 59,  147 => 58,  144 => 57,  140 => 55,  138 => 54,  134 => 53,  125 => 48,  119 => 46,  116 => 45,  110 => 43,  107 => 42,  96 => 40,  91 => 39,  85 => 37,  83 => 36,  79 => 35,  74 => 32,  72 => 28,  66 => 25,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account.management.html.twig", "D:\\Users\\ChrisR\\Documents\\GitHub\\Tavernlight---ChrisRegan\\questions_5-7\\14_0_5_ZeroXIV\\UniServerZ\\www\\myaac-0.8.16\\system\\templates\\account.management.html.twig");
    }
}
