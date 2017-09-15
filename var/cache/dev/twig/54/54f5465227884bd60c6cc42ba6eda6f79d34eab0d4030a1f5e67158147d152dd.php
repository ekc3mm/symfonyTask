<?php

/* :form-example:index.html.twig */
class __TwigTemplate_db72e1a3f5e5b8f0352a036b3c19e1c708279f318c6bade6e1a0671bc2476253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":form-example:index.html.twig", 1);
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
        $__internal_17d9f68ef3e12022fe4c0be59aad95bd36ceb2f9cb7efc92218d32789e3f638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d9f68ef3e12022fe4c0be59aad95bd36ceb2f9cb7efc92218d32789e3f638e->enter($__internal_17d9f68ef3e12022fe4c0be59aad95bd36ceb2f9cb7efc92218d32789e3f638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-example:index.html.twig"));

        $__internal_8d9a169df64c19a639d07cb05714b1efbdf144b77a74e0ceb8c7ce2043123f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9a169df64c19a639d07cb05714b1efbdf144b77a74e0ceb8c7ce2043123f62->enter($__internal_8d9a169df64c19a639d07cb05714b1efbdf144b77a74e0ceb8c7ce2043123f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-example:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d9f68ef3e12022fe4c0be59aad95bd36ceb2f9cb7efc92218d32789e3f638e->leave($__internal_17d9f68ef3e12022fe4c0be59aad95bd36ceb2f9cb7efc92218d32789e3f638e_prof);

        
        $__internal_8d9a169df64c19a639d07cb05714b1efbdf144b77a74e0ceb8c7ce2043123f62->leave($__internal_8d9a169df64c19a639d07cb05714b1efbdf144b77a74e0ceb8c7ce2043123f62_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f761addd7c79e35d6411df8b8b0f6d20a58f7fb70a662f74a8c63f445f8746ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f761addd7c79e35d6411df8b8b0f6d20a58f7fb70a662f74a8c63f445f8746ee->enter($__internal_f761addd7c79e35d6411df8b8b0f6d20a58f7fb70a662f74a8c63f445f8746ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf28df63b6d9c6d2add63ea7d26c2ae8f0b254c12b7ae1ffd6aa45b40aeba3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf28df63b6d9c6d2add63ea7d26c2ae8f0b254c12b7ae1ffd6aa45b40aeba3e1->enter($__internal_bf28df63b6d9c6d2add63ea7d26c2ae8f0b254c12b7ae1ffd6aa45b40aeba3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h2>Symfony 3 Form Tutorial</h2>

    <hr />

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["productForm"] ?? $this->getContext($context, "productForm")), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["productForm"] ?? $this->getContext($context, "productForm")), 'widget');
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["productForm"] ?? $this->getContext($context, "productForm")), 'form_end');
        echo "

";
        
        $__internal_bf28df63b6d9c6d2add63ea7d26c2ae8f0b254c12b7ae1ffd6aa45b40aeba3e1->leave($__internal_bf28df63b6d9c6d2add63ea7d26c2ae8f0b254c12b7ae1ffd6aa45b40aeba3e1_prof);

        
        $__internal_f761addd7c79e35d6411df8b8b0f6d20a58f7fb70a662f74a8c63f445f8746ee->leave($__internal_f761addd7c79e35d6411df8b8b0f6d20a58f7fb70a662f74a8c63f445f8746ee_prof);

    }

    public function getTemplateName()
    {
        return ":form-example:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  56 => 10,  49 => 5,  40 => 4,  11 => 1,);
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

    <h2>Symfony 3 Form Tutorial</h2>

    <hr />

    {{ form_start(productForm) }}
    {{ form_widget(productForm) }}
    {{ form_end(productForm) }}

{% endblock %}", ":form-example:index.html.twig", "/var/www/loctestx.com/app/Resources/views/form-example/index.html.twig");
    }
}
