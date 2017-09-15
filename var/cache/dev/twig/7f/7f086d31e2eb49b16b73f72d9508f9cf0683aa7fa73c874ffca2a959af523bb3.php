<?php

/* task/view-one.html.twig */
class __TwigTemplate_f207fd5c007e29ff7d198b57fa76b55d60014b84d9149157c765961cbb4450da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "task/view-one.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec1d06597eba4f6f30422bb784cd8f29221b61cbe2ea503e9d615e0da18f966a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d06597eba4f6f30422bb784cd8f29221b61cbe2ea503e9d615e0da18f966a->enter($__internal_ec1d06597eba4f6f30422bb784cd8f29221b61cbe2ea503e9d615e0da18f966a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/view-one.html.twig"));

        $__internal_02ce5e87bbb759622ec740b2f36c68e24538e64689ebbad4787c33bb2702192c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ce5e87bbb759622ec740b2f36c68e24538e64689ebbad4787c33bb2702192c->enter($__internal_02ce5e87bbb759622ec740b2f36c68e24538e64689ebbad4787c33bb2702192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/view-one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1d06597eba4f6f30422bb784cd8f29221b61cbe2ea503e9d615e0da18f966a->leave($__internal_ec1d06597eba4f6f30422bb784cd8f29221b61cbe2ea503e9d615e0da18f966a_prof);

        
        $__internal_02ce5e87bbb759622ec740b2f36c68e24538e64689ebbad4787c33bb2702192c->leave($__internal_02ce5e87bbb759622ec740b2f36c68e24538e64689ebbad4787c33bb2702192c_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_524b5dc7f999761a38c0d281b62dbdd2df7282ec249c74965cfd53f8e9f2ee5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524b5dc7f999761a38c0d281b62dbdd2df7282ec249c74965cfd53f8e9f2ee5f->enter($__internal_524b5dc7f999761a38c0d281b62dbdd2df7282ec249c74965cfd53f8e9f2ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_041c0b6e87de7b490878ba030563467b937ac3474e6d56c7036882f0ee744415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041c0b6e87de7b490878ba030563467b937ac3474e6d56c7036882f0ee744415->enter($__internal_041c0b6e87de7b490878ba030563467b937ac3474e6d56c7036882f0ee744415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</h2>
";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "dodate", array()), "m/d/Y"), "html", null, true);
        echo "
";
        
        $__internal_041c0b6e87de7b490878ba030563467b937ac3474e6d56c7036882f0ee744415->leave($__internal_041c0b6e87de7b490878ba030563467b937ac3474e6d56c7036882f0ee744415_prof);

        
        $__internal_524b5dc7f999761a38c0d281b62dbdd2df7282ec249c74965cfd53f8e9f2ee5f->leave($__internal_524b5dc7f999761a38c0d281b62dbdd2df7282ec249c74965cfd53f8e9f2ee5f_prof);

    }

    public function getTemplateName()
    {
        return "task/view-one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}


{% block body %}

    <h2>{{ task.name }}</h2>
{{ task.dodate|date(\"m/d/Y\") }}
{% endblock %}", "task/view-one.html.twig", "/var/www/loctestx.com/app/Resources/views/task/view-one.html.twig");
    }
}
