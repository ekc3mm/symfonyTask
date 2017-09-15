<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_cbfd3bd7838e38d899f313575eed1d23d8181cee0afe1dd324bc1087bb859692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2cb2cb5dd726d0ae100aae880f5bfe27e4d068cacbcac1a258b570f3d103421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2cb2cb5dd726d0ae100aae880f5bfe27e4d068cacbcac1a258b570f3d103421->enter($__internal_b2cb2cb5dd726d0ae100aae880f5bfe27e4d068cacbcac1a258b570f3d103421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_7f61e01a543f3836adec81dc9827cd18604e96b577b2d305a777b00ea8152bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f61e01a543f3836adec81dc9827cd18604e96b577b2d305a777b00ea8152bbc->enter($__internal_7f61e01a543f3836adec81dc9827cd18604e96b577b2d305a777b00ea8152bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b2cb2cb5dd726d0ae100aae880f5bfe27e4d068cacbcac1a258b570f3d103421->leave($__internal_b2cb2cb5dd726d0ae100aae880f5bfe27e4d068cacbcac1a258b570f3d103421_prof);

        
        $__internal_7f61e01a543f3836adec81dc9827cd18604e96b577b2d305a777b00ea8152bbc->leave($__internal_7f61e01a543f3836adec81dc9827cd18604e96b577b2d305a777b00ea8152bbc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
