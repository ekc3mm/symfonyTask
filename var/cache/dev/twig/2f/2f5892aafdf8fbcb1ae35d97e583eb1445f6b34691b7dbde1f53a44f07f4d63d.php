<?php

/* default/number.html.twig */
class __TwigTemplate_a76ba338021e2a85df23d0276843466145454b8a4b5d5843a586cc6be08a1ee9 extends Twig_Template
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
        $__internal_391a9b2d96d84fa1bbdaad55272b6a10591eb8c943c9373500bf05e38f5195c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391a9b2d96d84fa1bbdaad55272b6a10591eb8c943c9373500bf05e38f5195c6->enter($__internal_391a9b2d96d84fa1bbdaad55272b6a10591eb8c943c9373500bf05e38f5195c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/number.html.twig"));

        $__internal_33e2944a9ec50b4f2eaaf8af4af5678606da1e1cd024df49ea3bb27ec93cf6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e2944a9ec50b4f2eaaf8af4af5678606da1e1cd024df49ea3bb27ec93cf6a4->enter($__internal_33e2944a9ec50b4f2eaaf8af4af5678606da1e1cd024df49ea3bb27ec93cf6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/number.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        
        $__internal_391a9b2d96d84fa1bbdaad55272b6a10591eb8c943c9373500bf05e38f5195c6->leave($__internal_391a9b2d96d84fa1bbdaad55272b6a10591eb8c943c9373500bf05e38f5195c6_prof);

        
        $__internal_33e2944a9ec50b4f2eaaf8af4af5678606da1e1cd024df49ea3bb27ec93cf6a4->leave($__internal_33e2944a9ec50b4f2eaaf8af4af5678606da1e1cd024df49ea3bb27ec93cf6a4_prof);

    }

    public function getTemplateName()
    {
        return "default/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ number }}", "default/number.html.twig", "/var/www/loctestx.com/app/Resources/views/default/number.html.twig");
    }
}
