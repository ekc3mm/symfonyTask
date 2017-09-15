<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5b869be79ded7c89f742141e7c0d96cff7878a5d6e0e9ebd936cdce5d857085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b869be79ded7c89f742141e7c0d96cff7878a5d6e0e9ebd936cdce5d857085->enter($__internal_c5b869be79ded7c89f742141e7c0d96cff7878a5d6e0e9ebd936cdce5d857085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_deb743c6386511aa2c70edd62a49634315ca12f3932a4a2b8f77cfea1971db0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb743c6386511aa2c70edd62a49634315ca12f3932a4a2b8f77cfea1971db0b->enter($__internal_deb743c6386511aa2c70edd62a49634315ca12f3932a4a2b8f77cfea1971db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <style>
        .btn{
            margin-bottom: 5px;
        }
    </style>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<nav class=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-all");
        echo "\">All tasks</a>
            ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "
                <a class=\"navbar-brand\" href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-user");
            echo "\">My tasks</a>
                <a class=\"navbar-brand\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-new");
            echo "\">New Task</a>
                <a class=\"navbar-brand\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    Logout
                </a>
            ";
        } else {
            // line 35
            echo "                <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
                <a class=\"navbar-brand\" href=\"/register\">Registration</a>
            ";
        }
        // line 38
        echo "        </div>
    </div>
</nav>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 46
        $this->loadTemplate("::flash-messages.html.twig", "::base.html.twig", 46)->display($context);
        // line 47
        echo "        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        </div>
    </div>

</div><!-- /.container -->

";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "</body>
</html>";
        
        $__internal_c5b869be79ded7c89f742141e7c0d96cff7878a5d6e0e9ebd936cdce5d857085->leave($__internal_c5b869be79ded7c89f742141e7c0d96cff7878a5d6e0e9ebd936cdce5d857085_prof);

        
        $__internal_deb743c6386511aa2c70edd62a49634315ca12f3932a4a2b8f77cfea1971db0b->leave($__internal_deb743c6386511aa2c70edd62a49634315ca12f3932a4a2b8f77cfea1971db0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43ceb4782599210b67e625e31a54a03afd4b632bb0a128aba4fac51f73ddb778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ceb4782599210b67e625e31a54a03afd4b632bb0a128aba4fac51f73ddb778->enter($__internal_43ceb4782599210b67e625e31a54a03afd4b632bb0a128aba4fac51f73ddb778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c91a8e90824430d93d1c64908ff901df76a925590ffba1edfda9ce048be279fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91a8e90824430d93d1c64908ff901df76a925590ffba1edfda9ce048be279fe->enter($__internal_c91a8e90824430d93d1c64908ff901df76a925590ffba1edfda9ce048be279fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Code Review Videos";
        
        $__internal_c91a8e90824430d93d1c64908ff901df76a925590ffba1edfda9ce048be279fe->leave($__internal_c91a8e90824430d93d1c64908ff901df76a925590ffba1edfda9ce048be279fe_prof);

        
        $__internal_43ceb4782599210b67e625e31a54a03afd4b632bb0a128aba4fac51f73ddb778->leave($__internal_43ceb4782599210b67e625e31a54a03afd4b632bb0a128aba4fac51f73ddb778_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be6c9beb72651a7fb502c6492a0e3bcfee5813bb0894956f783f8f64abfea1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6c9beb72651a7fb502c6492a0e3bcfee5813bb0894956f783f8f64abfea1b2->enter($__internal_be6c9beb72651a7fb502c6492a0e3bcfee5813bb0894956f783f8f64abfea1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6c9b5351d6b2b7ad088e84d57c55eb03ce7f5eaab959444a2728d85706c48855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9b5351d6b2b7ad088e84d57c55eb03ce7f5eaab959444a2728d85706c48855->enter($__internal_6c9b5351d6b2b7ad088e84d57c55eb03ce7f5eaab959444a2728d85706c48855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6c9b5351d6b2b7ad088e84d57c55eb03ce7f5eaab959444a2728d85706c48855->leave($__internal_6c9b5351d6b2b7ad088e84d57c55eb03ce7f5eaab959444a2728d85706c48855_prof);

        
        $__internal_be6c9beb72651a7fb502c6492a0e3bcfee5813bb0894956f783f8f64abfea1b2->leave($__internal_be6c9beb72651a7fb502c6492a0e3bcfee5813bb0894956f783f8f64abfea1b2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c43a1636ee5932d34cdeacd8044c92a578e3e6e08f36b2ed6b5052fa3bcddf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43a1636ee5932d34cdeacd8044c92a578e3e6e08f36b2ed6b5052fa3bcddf45->enter($__internal_c43a1636ee5932d34cdeacd8044c92a578e3e6e08f36b2ed6b5052fa3bcddf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ceba2e9b97e025eaa887beede033d52f88ab811af201ad6f31bc4cd4faf6daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceba2e9b97e025eaa887beede033d52f88ab811af201ad6f31bc4cd4faf6daa->enter($__internal_0ceba2e9b97e025eaa887beede033d52f88ab811af201ad6f31bc4cd4faf6daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "            ";
        
        $__internal_0ceba2e9b97e025eaa887beede033d52f88ab811af201ad6f31bc4cd4faf6daa->leave($__internal_0ceba2e9b97e025eaa887beede033d52f88ab811af201ad6f31bc4cd4faf6daa_prof);

        
        $__internal_c43a1636ee5932d34cdeacd8044c92a578e3e6e08f36b2ed6b5052fa3bcddf45->leave($__internal_c43a1636ee5932d34cdeacd8044c92a578e3e6e08f36b2ed6b5052fa3bcddf45_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65cec7c33fd0923c6af22c29297358d73fd81bd71de5a5a21b0077f62234f8f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65cec7c33fd0923c6af22c29297358d73fd81bd71de5a5a21b0077f62234f8f0->enter($__internal_65cec7c33fd0923c6af22c29297358d73fd81bd71de5a5a21b0077f62234f8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_33932c05c36e5b107dce45e11f555a6fd45cbe4e3643d47e29cca3ee3f13c8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33932c05c36e5b107dce45e11f555a6fd45cbe4e3643d47e29cca3ee3f13c8f9->enter($__internal_33932c05c36e5b107dce45e11f555a6fd45cbe4e3643d47e29cca3ee3f13c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "
";
        
        $__internal_33932c05c36e5b107dce45e11f555a6fd45cbe4e3643d47e29cca3ee3f13c8f9->leave($__internal_33932c05c36e5b107dce45e11f555a6fd45cbe4e3643d47e29cca3ee3f13c8f9_prof);

        
        $__internal_65cec7c33fd0923c6af22c29297358d73fd81bd71de5a5a21b0077f62234f8f0->leave($__internal_65cec7c33fd0923c6af22c29297358d73fd81bd71de5a5a21b0077f62234f8f0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 60,  191 => 59,  181 => 53,  172 => 52,  155 => 14,  137 => 5,  126 => 62,  124 => 59,  117 => 54,  115 => 52,  108 => 47,  106 => 46,  96 => 38,  89 => 35,  82 => 31,  78 => 30,  74 => 29,  71 => 28,  69 => 27,  65 => 26,  54 => 18,  49 => 15,  47 => 14,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Code Review Videos{% endblock %}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
    <style>
        .btn{
            margin-bottom: 5px;
        }
    </style>

    {% block stylesheets %}{% endblock %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

<nav class=\"navbar\">
    <div class=\"container\">
        <div class=\"navbar-header\">

            <a class=\"navbar-brand\" href=\"{{ path('task-all') }}\">All tasks</a>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

                <a class=\"navbar-brand\" href=\"{{ path('task-user') }}\">My tasks</a>
                <a class=\"navbar-brand\" href=\"{{ path('task-new') }}\">New Task</a>
                <a class=\"navbar-brand\" href=\"{{ path('fos_user_security_logout') }}\">
                    Logout
                </a>
            {% else %}
                <a class=\"navbar-brand\" href=\"{{ path('fos_user_security_login') }}\">Login</a>
                <a class=\"navbar-brand\" href=\"/register\">Registration</a>
            {% endif %}
        </div>
    </div>
</nav>

<div class=\"container\">

    <div class=\"row\">
        <div class=\"col-sm-12\">
            {% include ('::flash-messages.html.twig') %}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

</div><!-- /.container -->

{% block javascripts %}

{% endblock %}
</body>
</html>", "::base.html.twig", "/var/www/loctestx.com/app/Resources/views/base.html.twig");
    }
}
