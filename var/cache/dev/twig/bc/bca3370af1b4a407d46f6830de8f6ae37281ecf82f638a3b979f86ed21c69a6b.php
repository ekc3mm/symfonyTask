<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_7939095b19c4294010f90beb5656150fae2b274e45bddb0ea2e46b2d2cbb6b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7939095b19c4294010f90beb5656150fae2b274e45bddb0ea2e46b2d2cbb6b34->enter($__internal_7939095b19c4294010f90beb5656150fae2b274e45bddb0ea2e46b2d2cbb6b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_5915beda75f76fb33654b676374c211780d3f89e76581641d6c0cf1c836280ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5915beda75f76fb33654b676374c211780d3f89e76581641d6c0cf1c836280ad->enter($__internal_5915beda75f76fb33654b676374c211780d3f89e76581641d6c0cf1c836280ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7939095b19c4294010f90beb5656150fae2b274e45bddb0ea2e46b2d2cbb6b34->leave($__internal_7939095b19c4294010f90beb5656150fae2b274e45bddb0ea2e46b2d2cbb6b34_prof);

        
        $__internal_5915beda75f76fb33654b676374c211780d3f89e76581641d6c0cf1c836280ad->leave($__internal_5915beda75f76fb33654b676374c211780d3f89e76581641d6c0cf1c836280ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e588e6c5f0692dba18def0cf3186c11f6d97020159a26fb5fd1dd132d95420e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e588e6c5f0692dba18def0cf3186c11f6d97020159a26fb5fd1dd132d95420e1->enter($__internal_e588e6c5f0692dba18def0cf3186c11f6d97020159a26fb5fd1dd132d95420e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8e3752b38d3c22905811ed8a3e5cd184e9c559708faa87b27ccabcc3f61e58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e3752b38d3c22905811ed8a3e5cd184e9c559708faa87b27ccabcc3f61e58a->enter($__internal_b8e3752b38d3c22905811ed8a3e5cd184e9c559708faa87b27ccabcc3f61e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b8e3752b38d3c22905811ed8a3e5cd184e9c559708faa87b27ccabcc3f61e58a->leave($__internal_b8e3752b38d3c22905811ed8a3e5cd184e9c559708faa87b27ccabcc3f61e58a_prof);

        
        $__internal_e588e6c5f0692dba18def0cf3186c11f6d97020159a26fb5fd1dd132d95420e1->leave($__internal_e588e6c5f0692dba18def0cf3186c11f6d97020159a26fb5fd1dd132d95420e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/loctestx.com/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
