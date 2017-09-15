<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_93118fb6bc1274613201be4cdc7253afc21076f73a2c45def85101ac51dfe1bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_6ca118604e0ed3d9f67c589bab61df2c321c2ca8f3fd295ed2c8625678913717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca118604e0ed3d9f67c589bab61df2c321c2ca8f3fd295ed2c8625678913717->enter($__internal_6ca118604e0ed3d9f67c589bab61df2c321c2ca8f3fd295ed2c8625678913717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_521b2fd5ad05efbed1867c398e0e7b5976981fd17c16743490f5df28ced4fdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521b2fd5ad05efbed1867c398e0e7b5976981fd17c16743490f5df28ced4fdee->enter($__internal_521b2fd5ad05efbed1867c398e0e7b5976981fd17c16743490f5df28ced4fdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca118604e0ed3d9f67c589bab61df2c321c2ca8f3fd295ed2c8625678913717->leave($__internal_6ca118604e0ed3d9f67c589bab61df2c321c2ca8f3fd295ed2c8625678913717_prof);

        
        $__internal_521b2fd5ad05efbed1867c398e0e7b5976981fd17c16743490f5df28ced4fdee->leave($__internal_521b2fd5ad05efbed1867c398e0e7b5976981fd17c16743490f5df28ced4fdee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c40d16a4edef7fe8e59a277ea548609871117e507399b0e366db486d6b34eb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40d16a4edef7fe8e59a277ea548609871117e507399b0e366db486d6b34eb3f->enter($__internal_c40d16a4edef7fe8e59a277ea548609871117e507399b0e366db486d6b34eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf2149fd138ea9247dd528a7df6f81c6959bd2bc4bcdca79dc839adfbc859b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2149fd138ea9247dd528a7df6f81c6959bd2bc4bcdca79dc839adfbc859b3a->enter($__internal_cf2149fd138ea9247dd528a7df6f81c6959bd2bc4bcdca79dc839adfbc859b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cf2149fd138ea9247dd528a7df6f81c6959bd2bc4bcdca79dc839adfbc859b3a->leave($__internal_cf2149fd138ea9247dd528a7df6f81c6959bd2bc4bcdca79dc839adfbc859b3a_prof);

        
        $__internal_c40d16a4edef7fe8e59a277ea548609871117e507399b0e366db486d6b34eb3f->leave($__internal_c40d16a4edef7fe8e59a277ea548609871117e507399b0e366db486d6b34eb3f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
