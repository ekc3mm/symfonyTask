<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f52a1426b55d8f35a7a4b136b320b83b3c8ed0a4252cb8cc801b48692bdfd45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52a1426b55d8f35a7a4b136b320b83b3c8ed0a4252cb8cc801b48692bdfd45a->enter($__internal_f52a1426b55d8f35a7a4b136b320b83b3c8ed0a4252cb8cc801b48692bdfd45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2bfcdc705555e4f97c0f42a8aecdebaeee087c14ab8d229abcc1285cfdd31f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfcdc705555e4f97c0f42a8aecdebaeee087c14ab8d229abcc1285cfdd31f05->enter($__internal_2bfcdc705555e4f97c0f42a8aecdebaeee087c14ab8d229abcc1285cfdd31f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f52a1426b55d8f35a7a4b136b320b83b3c8ed0a4252cb8cc801b48692bdfd45a->leave($__internal_f52a1426b55d8f35a7a4b136b320b83b3c8ed0a4252cb8cc801b48692bdfd45a_prof);

        
        $__internal_2bfcdc705555e4f97c0f42a8aecdebaeee087c14ab8d229abcc1285cfdd31f05->leave($__internal_2bfcdc705555e4f97c0f42a8aecdebaeee087c14ab8d229abcc1285cfdd31f05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d3d6fc6de7df79b252c7866d8ad164dd5a7f01097d8515e76c3ac14e17f1979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3d6fc6de7df79b252c7866d8ad164dd5a7f01097d8515e76c3ac14e17f1979->enter($__internal_7d3d6fc6de7df79b252c7866d8ad164dd5a7f01097d8515e76c3ac14e17f1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55f77f0b9a7b6e2ac464b330462afc4f4b20ce75671fdb0cb25aa93b62ee0190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f77f0b9a7b6e2ac464b330462afc4f4b20ce75671fdb0cb25aa93b62ee0190->enter($__internal_55f77f0b9a7b6e2ac464b330462afc4f4b20ce75671fdb0cb25aa93b62ee0190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_55f77f0b9a7b6e2ac464b330462afc4f4b20ce75671fdb0cb25aa93b62ee0190->leave($__internal_55f77f0b9a7b6e2ac464b330462afc4f4b20ce75671fdb0cb25aa93b62ee0190_prof);

        
        $__internal_7d3d6fc6de7df79b252c7866d8ad164dd5a7f01097d8515e76c3ac14e17f1979->leave($__internal_7d3d6fc6de7df79b252c7866d8ad164dd5a7f01097d8515e76c3ac14e17f1979_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b6e61c87c3d1eaee2bf13abbcccc5e473a8cdf250a80b15a571e5ffbc204c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b6e61c87c3d1eaee2bf13abbcccc5e473a8cdf250a80b15a571e5ffbc204c7->enter($__internal_95b6e61c87c3d1eaee2bf13abbcccc5e473a8cdf250a80b15a571e5ffbc204c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5810c6e46aeb1aa03cdd663068daf15de85d5c0953b2da7c4762ee13ff210cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5810c6e46aeb1aa03cdd663068daf15de85d5c0953b2da7c4762ee13ff210cf->enter($__internal_e5810c6e46aeb1aa03cdd663068daf15de85d5c0953b2da7c4762ee13ff210cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e5810c6e46aeb1aa03cdd663068daf15de85d5c0953b2da7c4762ee13ff210cf->leave($__internal_e5810c6e46aeb1aa03cdd663068daf15de85d5c0953b2da7c4762ee13ff210cf_prof);

        
        $__internal_95b6e61c87c3d1eaee2bf13abbcccc5e473a8cdf250a80b15a571e5ffbc204c7->leave($__internal_95b6e61c87c3d1eaee2bf13abbcccc5e473a8cdf250a80b15a571e5ffbc204c7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3023a3ffba29609b538fa0e051e03eab807c1b299b3a1ab246b331e4b3a8c289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3023a3ffba29609b538fa0e051e03eab807c1b299b3a1ab246b331e4b3a8c289->enter($__internal_3023a3ffba29609b538fa0e051e03eab807c1b299b3a1ab246b331e4b3a8c289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74d0a2fde698dca38e85a73bcf7dc151872dcbf8263ce5672b1166ae82667069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d0a2fde698dca38e85a73bcf7dc151872dcbf8263ce5672b1166ae82667069->enter($__internal_74d0a2fde698dca38e85a73bcf7dc151872dcbf8263ce5672b1166ae82667069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_74d0a2fde698dca38e85a73bcf7dc151872dcbf8263ce5672b1166ae82667069->leave($__internal_74d0a2fde698dca38e85a73bcf7dc151872dcbf8263ce5672b1166ae82667069_prof);

        
        $__internal_3023a3ffba29609b538fa0e051e03eab807c1b299b3a1ab246b331e4b3a8c289->leave($__internal_3023a3ffba29609b538fa0e051e03eab807c1b299b3a1ab246b331e4b3a8c289_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/loctestx.com/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
