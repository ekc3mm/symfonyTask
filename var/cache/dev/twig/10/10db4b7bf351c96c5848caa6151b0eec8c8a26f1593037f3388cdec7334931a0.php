<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f8c53001f996025442ffe815cd24038a5ae766c38b20237b25564d8efeba1dfd extends Twig_Template
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
        $__internal_6fa5b887068b37386a3372611afc4a7a2d85bf45df74bca44e6135d50579be72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa5b887068b37386a3372611afc4a7a2d85bf45df74bca44e6135d50579be72->enter($__internal_6fa5b887068b37386a3372611afc4a7a2d85bf45df74bca44e6135d50579be72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_9cd9443e5676bd755c7aeca926bf4f0af7a60f8ddfd3dd6e2ed23f83eab3187e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd9443e5676bd755c7aeca926bf4f0af7a60f8ddfd3dd6e2ed23f83eab3187e->enter($__internal_9cd9443e5676bd755c7aeca926bf4f0af7a60f8ddfd3dd6e2ed23f83eab3187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa5b887068b37386a3372611afc4a7a2d85bf45df74bca44e6135d50579be72->leave($__internal_6fa5b887068b37386a3372611afc4a7a2d85bf45df74bca44e6135d50579be72_prof);

        
        $__internal_9cd9443e5676bd755c7aeca926bf4f0af7a60f8ddfd3dd6e2ed23f83eab3187e->leave($__internal_9cd9443e5676bd755c7aeca926bf4f0af7a60f8ddfd3dd6e2ed23f83eab3187e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7321ab66dc26c3595ea59690e3e0848ace63e696f08f55bb580eed357d684f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7321ab66dc26c3595ea59690e3e0848ace63e696f08f55bb580eed357d684f90->enter($__internal_7321ab66dc26c3595ea59690e3e0848ace63e696f08f55bb580eed357d684f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ca5bdad9a0420ff8fdf0e97085d14cc941e5f2d51302a18dfe09323ae41a9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca5bdad9a0420ff8fdf0e97085d14cc941e5f2d51302a18dfe09323ae41a9d8->enter($__internal_2ca5bdad9a0420ff8fdf0e97085d14cc941e5f2d51302a18dfe09323ae41a9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2ca5bdad9a0420ff8fdf0e97085d14cc941e5f2d51302a18dfe09323ae41a9d8->leave($__internal_2ca5bdad9a0420ff8fdf0e97085d14cc941e5f2d51302a18dfe09323ae41a9d8_prof);

        
        $__internal_7321ab66dc26c3595ea59690e3e0848ace63e696f08f55bb580eed357d684f90->leave($__internal_7321ab66dc26c3595ea59690e3e0848ace63e696f08f55bb580eed357d684f90_prof);

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
", "@FOSUser/Registration/register.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
