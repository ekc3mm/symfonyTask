<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e689b8cb0f16312acad9cd207169a18f0f5233869e57a219302b42c236284bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e689b8cb0f16312acad9cd207169a18f0f5233869e57a219302b42c236284bd5->enter($__internal_e689b8cb0f16312acad9cd207169a18f0f5233869e57a219302b42c236284bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_7f2707d0b81c58ed4365823c9fe597b88f2b9bb78425e373c16f6cf2063c2909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2707d0b81c58ed4365823c9fe597b88f2b9bb78425e373c16f6cf2063c2909->enter($__internal_7f2707d0b81c58ed4365823c9fe597b88f2b9bb78425e373c16f6cf2063c2909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e689b8cb0f16312acad9cd207169a18f0f5233869e57a219302b42c236284bd5->leave($__internal_e689b8cb0f16312acad9cd207169a18f0f5233869e57a219302b42c236284bd5_prof);

        
        $__internal_7f2707d0b81c58ed4365823c9fe597b88f2b9bb78425e373c16f6cf2063c2909->leave($__internal_7f2707d0b81c58ed4365823c9fe597b88f2b9bb78425e373c16f6cf2063c2909_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19e34816ff07befaf161f8d3068405d04e5a38d73344a38146193266262f8593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e34816ff07befaf161f8d3068405d04e5a38d73344a38146193266262f8593->enter($__internal_19e34816ff07befaf161f8d3068405d04e5a38d73344a38146193266262f8593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d2ffe7687dd80dd730b53978ed9cdb23f0da666d989011071d931df4bb1c6c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2ffe7687dd80dd730b53978ed9cdb23f0da666d989011071d931df4bb1c6c8->enter($__internal_1d2ffe7687dd80dd730b53978ed9cdb23f0da666d989011071d931df4bb1c6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1d2ffe7687dd80dd730b53978ed9cdb23f0da666d989011071d931df4bb1c6c8->leave($__internal_1d2ffe7687dd80dd730b53978ed9cdb23f0da666d989011071d931df4bb1c6c8_prof);

        
        $__internal_19e34816ff07befaf161f8d3068405d04e5a38d73344a38146193266262f8593->leave($__internal_19e34816ff07befaf161f8d3068405d04e5a38d73344a38146193266262f8593_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/loctestx.com/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
