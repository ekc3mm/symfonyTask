<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0bc2379e88d5ab407cecaddbc7d12b46ee4e639db91441b4745b1ab2e1731368 extends Twig_Template
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
        $__internal_327eb5cb36531ab74af850b8cc7f01ecfa29598ee3d7a529f0f75f3f06ca1bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327eb5cb36531ab74af850b8cc7f01ecfa29598ee3d7a529f0f75f3f06ca1bb3->enter($__internal_327eb5cb36531ab74af850b8cc7f01ecfa29598ee3d7a529f0f75f3f06ca1bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_ade865bd9bb102e3c9882640c2e6c03049eb306d3ad3c8f88343cea0ab73fbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade865bd9bb102e3c9882640c2e6c03049eb306d3ad3c8f88343cea0ab73fbb2->enter($__internal_ade865bd9bb102e3c9882640c2e6c03049eb306d3ad3c8f88343cea0ab73fbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327eb5cb36531ab74af850b8cc7f01ecfa29598ee3d7a529f0f75f3f06ca1bb3->leave($__internal_327eb5cb36531ab74af850b8cc7f01ecfa29598ee3d7a529f0f75f3f06ca1bb3_prof);

        
        $__internal_ade865bd9bb102e3c9882640c2e6c03049eb306d3ad3c8f88343cea0ab73fbb2->leave($__internal_ade865bd9bb102e3c9882640c2e6c03049eb306d3ad3c8f88343cea0ab73fbb2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2effb9d06612110891d4676224294ec6dd1d2701b8b9254e662a0de7178adf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2effb9d06612110891d4676224294ec6dd1d2701b8b9254e662a0de7178adf3b->enter($__internal_2effb9d06612110891d4676224294ec6dd1d2701b8b9254e662a0de7178adf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_456b43ba3e545401665470f8279c272c038bfb283e1758c833ced02319852209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456b43ba3e545401665470f8279c272c038bfb283e1758c833ced02319852209->enter($__internal_456b43ba3e545401665470f8279c272c038bfb283e1758c833ced02319852209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_456b43ba3e545401665470f8279c272c038bfb283e1758c833ced02319852209->leave($__internal_456b43ba3e545401665470f8279c272c038bfb283e1758c833ced02319852209_prof);

        
        $__internal_2effb9d06612110891d4676224294ec6dd1d2701b8b9254e662a0de7178adf3b->leave($__internal_2effb9d06612110891d4676224294ec6dd1d2701b8b9254e662a0de7178adf3b_prof);

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
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
