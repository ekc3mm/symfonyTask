<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2471c776f365630bd6d7e9f142f59ef85585d50b40e0dd727ada49aba6f2995c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2471c776f365630bd6d7e9f142f59ef85585d50b40e0dd727ada49aba6f2995c->enter($__internal_2471c776f365630bd6d7e9f142f59ef85585d50b40e0dd727ada49aba6f2995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_515b44640c7d88a0846429ebc046551392cccf5d6c9bb2a147a782369b03a191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515b44640c7d88a0846429ebc046551392cccf5d6c9bb2a147a782369b03a191->enter($__internal_515b44640c7d88a0846429ebc046551392cccf5d6c9bb2a147a782369b03a191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2471c776f365630bd6d7e9f142f59ef85585d50b40e0dd727ada49aba6f2995c->leave($__internal_2471c776f365630bd6d7e9f142f59ef85585d50b40e0dd727ada49aba6f2995c_prof);

        
        $__internal_515b44640c7d88a0846429ebc046551392cccf5d6c9bb2a147a782369b03a191->leave($__internal_515b44640c7d88a0846429ebc046551392cccf5d6c9bb2a147a782369b03a191_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42311f13dc4f11506cc00306a82aef928693609dfbf0e03955792c1f8b8f9fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42311f13dc4f11506cc00306a82aef928693609dfbf0e03955792c1f8b8f9fff->enter($__internal_42311f13dc4f11506cc00306a82aef928693609dfbf0e03955792c1f8b8f9fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b72df9647b33babde245f498dcca44a81ed74e5df426b82d36f901e58cea107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72df9647b33babde245f498dcca44a81ed74e5df426b82d36f901e58cea107f->enter($__internal_b72df9647b33babde245f498dcca44a81ed74e5df426b82d36f901e58cea107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b72df9647b33babde245f498dcca44a81ed74e5df426b82d36f901e58cea107f->leave($__internal_b72df9647b33babde245f498dcca44a81ed74e5df426b82d36f901e58cea107f_prof);

        
        $__internal_42311f13dc4f11506cc00306a82aef928693609dfbf0e03955792c1f8b8f9fff->leave($__internal_42311f13dc4f11506cc00306a82aef928693609dfbf0e03955792c1f8b8f9fff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f87a229c4ccf9362d4fefd237f386cafecd0222289c9607a67a310d538e774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f87a229c4ccf9362d4fefd237f386cafecd0222289c9607a67a310d538e774->enter($__internal_f9f87a229c4ccf9362d4fefd237f386cafecd0222289c9607a67a310d538e774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_183820fe5b89668ce9ff36e6d5705288c3a58531c165fb1f1dd945cf75b10c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_183820fe5b89668ce9ff36e6d5705288c3a58531c165fb1f1dd945cf75b10c7c->enter($__internal_183820fe5b89668ce9ff36e6d5705288c3a58531c165fb1f1dd945cf75b10c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_183820fe5b89668ce9ff36e6d5705288c3a58531c165fb1f1dd945cf75b10c7c->leave($__internal_183820fe5b89668ce9ff36e6d5705288c3a58531c165fb1f1dd945cf75b10c7c_prof);

        
        $__internal_f9f87a229c4ccf9362d4fefd237f386cafecd0222289c9607a67a310d538e774->leave($__internal_f9f87a229c4ccf9362d4fefd237f386cafecd0222289c9607a67a310d538e774_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd066cdde353d6259cd0688beb853729edb8f62e94a9b29c78996a4e2b28a47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd066cdde353d6259cd0688beb853729edb8f62e94a9b29c78996a4e2b28a47a->enter($__internal_dd066cdde353d6259cd0688beb853729edb8f62e94a9b29c78996a4e2b28a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45b37d905abc165b3bc1bf02d1b01c465c22ce11de35048c41d7755e56b9b015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b37d905abc165b3bc1bf02d1b01c465c22ce11de35048c41d7755e56b9b015->enter($__internal_45b37d905abc165b3bc1bf02d1b01c465c22ce11de35048c41d7755e56b9b015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_45b37d905abc165b3bc1bf02d1b01c465c22ce11de35048c41d7755e56b9b015->leave($__internal_45b37d905abc165b3bc1bf02d1b01c465c22ce11de35048c41d7755e56b9b015_prof);

        
        $__internal_dd066cdde353d6259cd0688beb853729edb8f62e94a9b29c78996a4e2b28a47a->leave($__internal_dd066cdde353d6259cd0688beb853729edb8f62e94a9b29c78996a4e2b28a47a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/loctestx.com/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
