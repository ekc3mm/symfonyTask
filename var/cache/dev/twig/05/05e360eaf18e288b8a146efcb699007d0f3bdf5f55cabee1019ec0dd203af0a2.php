<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3d054e7b118a3d0a314b64636218744c7fdf1884da993bef329689c4ec8ac8ba extends Twig_Template
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
        $__internal_81877a859d58157eff3fc442859fa105db8bfe0f7ba041ae2b5fe4ea5aefca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81877a859d58157eff3fc442859fa105db8bfe0f7ba041ae2b5fe4ea5aefca0b->enter($__internal_81877a859d58157eff3fc442859fa105db8bfe0f7ba041ae2b5fe4ea5aefca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_05ff82acc2f5d2415101d81435694d87334b9fda7573a9c59f3a489f7065d522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ff82acc2f5d2415101d81435694d87334b9fda7573a9c59f3a489f7065d522->enter($__internal_05ff82acc2f5d2415101d81435694d87334b9fda7573a9c59f3a489f7065d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81877a859d58157eff3fc442859fa105db8bfe0f7ba041ae2b5fe4ea5aefca0b->leave($__internal_81877a859d58157eff3fc442859fa105db8bfe0f7ba041ae2b5fe4ea5aefca0b_prof);

        
        $__internal_05ff82acc2f5d2415101d81435694d87334b9fda7573a9c59f3a489f7065d522->leave($__internal_05ff82acc2f5d2415101d81435694d87334b9fda7573a9c59f3a489f7065d522_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a19ff0bed51265e9887d5698fb1b011e0d31df94d0fba0d1c03be47df7761820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19ff0bed51265e9887d5698fb1b011e0d31df94d0fba0d1c03be47df7761820->enter($__internal_a19ff0bed51265e9887d5698fb1b011e0d31df94d0fba0d1c03be47df7761820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_315ae39d750db36c367ebe5b8a67c53fac1b3302ccb0145ba46ea63a1759fc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315ae39d750db36c367ebe5b8a67c53fac1b3302ccb0145ba46ea63a1759fc0f->enter($__internal_315ae39d750db36c367ebe5b8a67c53fac1b3302ccb0145ba46ea63a1759fc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_315ae39d750db36c367ebe5b8a67c53fac1b3302ccb0145ba46ea63a1759fc0f->leave($__internal_315ae39d750db36c367ebe5b8a67c53fac1b3302ccb0145ba46ea63a1759fc0f_prof);

        
        $__internal_a19ff0bed51265e9887d5698fb1b011e0d31df94d0fba0d1c03be47df7761820->leave($__internal_a19ff0bed51265e9887d5698fb1b011e0d31df94d0fba0d1c03be47df7761820_prof);

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
", "@FOSUser/Security/login.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
