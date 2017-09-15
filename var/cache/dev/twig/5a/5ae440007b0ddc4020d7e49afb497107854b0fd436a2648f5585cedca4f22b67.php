<?php

/* :task:new.html.twig */
class __TwigTemplate_ee104eb5742fa472b0d7d92e3205aebee907a8945a1ee854ef40491a36755484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":task:new.html.twig", 1);
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
        $__internal_0b53aba5494db1fca5ba03af3cb3d8acb98bf456a4faea0f5f0295be0a67cb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b53aba5494db1fca5ba03af3cb3d8acb98bf456a4faea0f5f0295be0a67cb27->enter($__internal_0b53aba5494db1fca5ba03af3cb3d8acb98bf456a4faea0f5f0295be0a67cb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:new.html.twig"));

        $__internal_af5e76dc18aa0ae8b3092461e5ff4ac5bb61f926a8ff10da014ea754e44dc86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5e76dc18aa0ae8b3092461e5ff4ac5bb61f926a8ff10da014ea754e44dc86b->enter($__internal_af5e76dc18aa0ae8b3092461e5ff4ac5bb61f926a8ff10da014ea754e44dc86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":task:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b53aba5494db1fca5ba03af3cb3d8acb98bf456a4faea0f5f0295be0a67cb27->leave($__internal_0b53aba5494db1fca5ba03af3cb3d8acb98bf456a4faea0f5f0295be0a67cb27_prof);

        
        $__internal_af5e76dc18aa0ae8b3092461e5ff4ac5bb61f926a8ff10da014ea754e44dc86b->leave($__internal_af5e76dc18aa0ae8b3092461e5ff4ac5bb61f926a8ff10da014ea754e44dc86b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce9b5321bf13338fa47f9800f51fbf64c28671c0fcd731a3d4e457233a42a1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9b5321bf13338fa47f9800f51fbf64c28671c0fcd731a3d4e457233a42a1a8->enter($__internal_ce9b5321bf13338fa47f9800f51fbf64c28671c0fcd731a3d4e457233a42a1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b1ba9bc1659367d438ccb094a941c28dfbe66c7236c569aee9f7c7287a4270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b1ba9bc1659367d438ccb094a941c28dfbe66c7236c569aee9f7c7287a4270->enter($__internal_27b1ba9bc1659367d438ccb094a941c28dfbe66c7236c569aee9f7c7287a4270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h2>New Task</h2>

    <hr />

    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["TaskForm"] ?? $this->getContext($context, "TaskForm")), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["TaskForm"] ?? $this->getContext($context, "TaskForm")), 'widget');
        echo "
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["TaskForm"] ?? $this->getContext($context, "TaskForm")), 'form_end');
        echo "

";
        
        $__internal_27b1ba9bc1659367d438ccb094a941c28dfbe66c7236c569aee9f7c7287a4270->leave($__internal_27b1ba9bc1659367d438ccb094a941c28dfbe66c7236c569aee9f7c7287a4270_prof);

        
        $__internal_ce9b5321bf13338fa47f9800f51fbf64c28671c0fcd731a3d4e457233a42a1a8->leave($__internal_ce9b5321bf13338fa47f9800f51fbf64c28671c0fcd731a3d4e457233a42a1a8_prof);

    }

    public function getTemplateName()
    {
        return ":task:new.html.twig";
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

    <h2>New Task</h2>

    <hr />

    {{ form_start(TaskForm) }}
    {{ form_widget(TaskForm) }}
    {{ form_end(TaskForm) }}

{% endblock %}", ":task:new.html.twig", "/var/www/loctestx.com/app/Resources/views/task/new.html.twig");
    }
}
