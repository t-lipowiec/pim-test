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

/* @PimcoreAdmin/admin/login/login.html.twig */
class __TwigTemplate_f2b907cc966c22cdf1c7a2f914f43659 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'below_footer' => [$this, 'block_below_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@PimcoreAdmin/admin/login/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/admin/login/login.html.twig"));

        $this->parent = $this->loadTemplate("@PimcoreAdmin/admin/login/layout.html.twig", "@PimcoreAdmin/admin/login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div id=\"loginform\">
    <form id=\"form-element\" method=\"post\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_check", ["perspective" => twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, true, 5), "get", ["perspective"], "method", false, false, true, 5), 5, $this->source))]), "html", null, true);
        echo "\">

        ";
        // line 7
        if (array_key_exists("error", $context)) {
            // line 8
            echo "        <div class=\"text error\">
            ";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), 9, $this->source), [], "admin");
            echo "
        </div>
        ";
        }
        // line 12
        echo "        ";
        if ((array_key_exists("login_error", $context) && (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 12, $this->source); })()))) {
            // line 13
            echo "        <div class=\"text error\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 14, $this->source); })()), "messageKey", [], "any", false, false, true, 14), 14, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["login_error"]) || array_key_exists("login_error", $context) ? $context["login_error"] : (function () { throw new RuntimeError('Variable "login_error" does not exist.', 14, $this->source); })()), "messageData", [], "any", false, false, true, 14), 14, $this->source), "security"), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 17
        echo "
        <input type=\"text\" name=\"username\" autocomplete=\"username\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username", [], "admin"), "html", null, true);
        echo "\" required autofocus>
        <input type=\"password\" name=\"password\" autocomplete=\"current-password\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("password", [], "admin"), "html", null, true);
        echo "\" required>
        <input type=\"hidden\" name=\"csrfToken\" id=\"csrfToken\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 20, $this->source); })()), "getCsrfToken", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, true, 20), "session", [], "any", false, false, true, 20)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\">

        <button type=\"submit\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login", [], "admin"), "html", null, true);
        echo "</button>
    </form>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_lostpassword");
        echo "\" class=\"lostpassword\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot your password", [], "admin"), "html", null, true);
        echo "?</a>
</div>

";
        // line 28
        if ( !(isset($context["browserSupported"]) || array_key_exists("browserSupported", $context) ? $context["browserSupported"] : (function () { throw new RuntimeError('Variable "browserSupported" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "<div id=\"browserinfo\">
    <div class=\"text\">
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your browser is not supported. Please install the latest version of one of the following browsers.", [], "admin"), "html", null, true);
            echo "
    </div>

    <div class=\"text browserinfo\">
        <a href=\"https://www.google.com/chrome\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Chrome\"><img src=\"/bundles/pimcoreadmin/img/login/chrome.svg\" alt=\"Chrome\"/></a>
        <a href=\"https://www.mozilla.org/firefox\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Firefox\"><img src=\"/bundles/pimcoreadmin/img/login/firefox.svg\" alt=\"Firefox\"/></a>
        <a href=\"https://www.apple.com/safari\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Safari\"><img src=\"/bundles/pimcoreadmin/img/login/safari.svg\" alt=\"Safari\"/></a>
        <a href=\"https://www.microsoft.com/edge\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Edge\"><img src=\"/bundles/pimcoreadmin/img/login/edge.svg\" alt=\"Edge\"/></a>
    </div>

    <a href=\"#\" onclick=\"showLogin();\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here to proceed", [], "admin"), "html", null, true);
            echo "</a>
</div>

<script type=\"text/javascript\">
    function showLogin() {
        document.getElementById('loginform').style.display = 'block';
        document.getElementById('browserinfo').style.display = 'none';
    }
</script>
<style type=\"text/css\">
    #loginform {
        display: none;
    }
</style>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_below_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "below_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "below_footer"));

        // line 59
        echo "<script ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 59, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 59), 59, $this->source);
        echo ">
    ";
        // line 60
        if ( !array_key_exists("deeplink", $context)) {
            // line 61
            echo "    // clear opened tabs store
    localStorage.removeItem(\"pimcore_opentabs\");
    ";
        }
        // line 64
        echo "
    // hide symfony toolbar by default
    var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
    if(!window.localStorage.getItem(symfonyToolbarKey)) {
        window.localStorage.setItem(symfonyToolbarKey, 'none');
    }


    // CSRF token refresh
    var formElement = document.getElementById('form-element');
    var csrfRefreshInProgress = false;
    function refreshCsrfToken() {
        csrfRefreshInProgress = true;
        formElement.style.opacity = '0.3';
        var request = new XMLHttpRequest();
        request.open('GET', '";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_login_csrf_token");
        echo "');
        request.onload = function () {
            if (this.status >= 200 && this.status < 400) {
                var res = JSON.parse(this.response);
                document.getElementById('csrfToken').setAttribute('value', res['csrfToken']);
                formElement.style.opacity = '1';
                csrfRefreshInProgress = false;
            }
        };
        request.send();
    }
    document.addEventListener('visibilitychange', function(ev) {
        if(document.visibilityState === 'visible') {
            refreshCsrfToken();
        }
    });
    window.setInterval(refreshCsrfToken, ";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["csrfTokenRefreshInterval"]) || array_key_exists("csrfTokenRefreshInterval", $context) ? $context["csrfTokenRefreshInterval"] : (function () { throw new RuntimeError('Variable "csrfTokenRefreshInterval" does not exist.', 95, $this->source); })()), 95, $this->source), "html", null, true);
        echo ");
    formElement.addEventListener(\"submit\", function(evt) {
        if(csrfRefreshInProgress) {
            evt.preventDefault();
        }
    }, true);

</script>

";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["includeTemplates"]) || array_key_exists("includeTemplates", $context) ? $context["includeTemplates"] : (function () { throw new RuntimeError('Variable "includeTemplates" does not exist.', 104, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["includeTemplate"]) {
            // line 105
            echo "    ";
            echo twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed($context["includeTemplate"], 105, $this->source));
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['includeTemplate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
";
        // line 108
        echo $this->extensions['Pimcore\Twig\Extension\HelpersExtension']->breachAttackRandomContent();
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreAdmin/admin/login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 108,  281 => 107,  264 => 105,  247 => 104,  235 => 95,  216 => 79,  199 => 64,  194 => 61,  192 => 60,  187 => 59,  177 => 58,  151 => 41,  138 => 31,  134 => 29,  132 => 28,  124 => 25,  118 => 22,  113 => 20,  109 => 19,  105 => 18,  102 => 17,  96 => 14,  93 => 13,  90 => 12,  84 => 9,  81 => 8,  79 => 7,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@PimcoreAdmin/admin/login/layout.html.twig' %}

{% block content %}
<div id=\"loginform\">
    <form id=\"form-element\" method=\"post\" action=\"{{ path('pimcore_admin_login_check', {'perspective' : app.request.get('perspective')|striptags}) }}\">

        {% if error is defined %}
        <div class=\"text error\">
            {{ error|trans([],'admin')|raw }}
        </div>
        {% endif %}
        {% if login_error is defined and login_error %}
        <div class=\"text error\">
            {{ login_error.messageKey|trans(login_error.messageData, 'security') }}
        </div>
        {% endif %}

        <input type=\"text\" name=\"username\" autocomplete=\"username\" placeholder=\"{{ 'username'|trans([], 'admin') }}\" required autofocus>
        <input type=\"password\" name=\"password\" autocomplete=\"current-password\" placeholder=\"{{ 'password'|trans([], 'admin') }}\" required>
        <input type=\"hidden\" name=\"csrfToken\" id=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken(app.request.session) }}\">

        <button type=\"submit\">{{ 'login'|trans([], 'admin') }}</button>
    </form>

    <a href=\"{{ path('pimcore_admin_login_lostpassword') }}\" class=\"lostpassword\">{{ 'Forgot your password'|trans([], 'admin') }}?</a>
</div>

{% if not browserSupported %}
<div id=\"browserinfo\">
    <div class=\"text\">
        {{ 'Your browser is not supported. Please install the latest version of one of the following browsers.'|trans([], 'admin') }}
    </div>

    <div class=\"text browserinfo\">
        <a href=\"https://www.google.com/chrome\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Chrome\"><img src=\"/bundles/pimcoreadmin/img/login/chrome.svg\" alt=\"Chrome\"/></a>
        <a href=\"https://www.mozilla.org/firefox\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Firefox\"><img src=\"/bundles/pimcoreadmin/img/login/firefox.svg\" alt=\"Firefox\"/></a>
        <a href=\"https://www.apple.com/safari\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Safari\"><img src=\"/bundles/pimcoreadmin/img/login/safari.svg\" alt=\"Safari\"/></a>
        <a href=\"https://www.microsoft.com/edge\" target=\"_blank\" rel=\"noopener noreferrer\" title=\"Edge\"><img src=\"/bundles/pimcoreadmin/img/login/edge.svg\" alt=\"Edge\"/></a>
    </div>

    <a href=\"#\" onclick=\"showLogin();\">{{ 'Click here to proceed'|trans([], 'admin') }}</a>
</div>

<script type=\"text/javascript\">
    function showLogin() {
        document.getElementById('loginform').style.display = 'block';
        document.getElementById('browserinfo').style.display = 'none';
    }
</script>
<style type=\"text/css\">
    #loginform {
        display: none;
    }
</style>
{% endif %}
{% endblock %}

{% block below_footer %}
<script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
    {% if deeplink is not defined %}
    // clear opened tabs store
    localStorage.removeItem(\"pimcore_opentabs\");
    {% endif %}

    // hide symfony toolbar by default
    var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
    if(!window.localStorage.getItem(symfonyToolbarKey)) {
        window.localStorage.setItem(symfonyToolbarKey, 'none');
    }


    // CSRF token refresh
    var formElement = document.getElementById('form-element');
    var csrfRefreshInProgress = false;
    function refreshCsrfToken() {
        csrfRefreshInProgress = true;
        formElement.style.opacity = '0.3';
        var request = new XMLHttpRequest();
        request.open('GET', '{{ path(\"pimcore_admin_login_csrf_token\") }}');
        request.onload = function () {
            if (this.status >= 200 && this.status < 400) {
                var res = JSON.parse(this.response);
                document.getElementById('csrfToken').setAttribute('value', res['csrfToken']);
                formElement.style.opacity = '1';
                csrfRefreshInProgress = false;
            }
        };
        request.send();
    }
    document.addEventListener('visibilitychange', function(ev) {
        if(document.visibilityState === 'visible') {
            refreshCsrfToken();
        }
    });
    window.setInterval(refreshCsrfToken, {{ csrfTokenRefreshInterval }});
    formElement.addEventListener(\"submit\", function(evt) {
        if(csrfRefreshInProgress) {
            evt.preventDefault();
        }
    }, true);

</script>

{% for includeTemplate in includeTemplates %}
    {{ include(includeTemplate) }}
{% endfor %}

{{ pimcore_breach_attack_random_content() }}

{% endblock %}
", "@PimcoreAdmin/admin/login/login.html.twig", "/home/tomek/Projects/pim-test/vendor/pimcore/admin-ui-classic-bundle/templates/admin/login/login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7, "for" => 104);
        static $filters = array("escape" => 5, "striptags" => 5, "raw" => 9, "trans" => 9);
        static $functions = array("path" => 5, "include" => 105, "pimcore_breach_attack_random_content" => 108);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'striptags', 'raw', 'trans'],
                ['path', 'include', 'pimcore_breach_attack_random_content']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
