<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ae8e481b9334be261b48b91dce99ea203a15c672a397451b8503fe6cc1b5ae3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8e481b9334be261b48b91dce99ea203a15c672a397451b8503fe6cc1b5ae3f->enter($__internal_ae8e481b9334be261b48b91dce99ea203a15c672a397451b8503fe6cc1b5ae3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_4941f49b7744e4172bee499a9a12feff2e06dacbddc1717045b33af5fc62bada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4941f49b7744e4172bee499a9a12feff2e06dacbddc1717045b33af5fc62bada->enter($__internal_4941f49b7744e4172bee499a9a12feff2e06dacbddc1717045b33af5fc62bada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8e481b9334be261b48b91dce99ea203a15c672a397451b8503fe6cc1b5ae3f->leave($__internal_ae8e481b9334be261b48b91dce99ea203a15c672a397451b8503fe6cc1b5ae3f_prof);

        
        $__internal_4941f49b7744e4172bee499a9a12feff2e06dacbddc1717045b33af5fc62bada->leave($__internal_4941f49b7744e4172bee499a9a12feff2e06dacbddc1717045b33af5fc62bada_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1787b476f51440bae1ca27597ccf9369bba748accbb4638c65522e8403656ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1787b476f51440bae1ca27597ccf9369bba748accbb4638c65522e8403656ad5->enter($__internal_1787b476f51440bae1ca27597ccf9369bba748accbb4638c65522e8403656ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d8b3d7f3189b38cfc88e29c74f2c7f8bcf8750c43e1d03a28077f3fd7389241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8b3d7f3189b38cfc88e29c74f2c7f8bcf8750c43e1d03a28077f3fd7389241->enter($__internal_3d8b3d7f3189b38cfc88e29c74f2c7f8bcf8750c43e1d03a28077f3fd7389241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3d8b3d7f3189b38cfc88e29c74f2c7f8bcf8750c43e1d03a28077f3fd7389241->leave($__internal_3d8b3d7f3189b38cfc88e29c74f2c7f8bcf8750c43e1d03a28077f3fd7389241_prof);

        
        $__internal_1787b476f51440bae1ca27597ccf9369bba748accbb4638c65522e8403656ad5->leave($__internal_1787b476f51440bae1ca27597ccf9369bba748accbb4638c65522e8403656ad5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/loctestx.com/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
