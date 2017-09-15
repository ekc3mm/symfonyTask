<?php

/* task/all.html.twig */
class __TwigTemplate_48c9013523866f6165a16d1dd53d0d0d0aad43416c3d5f61d28c4dabf947963c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "task/all.html.twig", 1);
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
        $__internal_fb2dcd18ce898e50070a97d83da6c9f6e6ee68cb545aca640914e43f37b9f56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2dcd18ce898e50070a97d83da6c9f6e6ee68cb545aca640914e43f37b9f56d->enter($__internal_fb2dcd18ce898e50070a97d83da6c9f6e6ee68cb545aca640914e43f37b9f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/all.html.twig"));

        $__internal_f949f9c0c1e3f268e75cf4088928ad48569e8d815d20e23220c41f752f6f6af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f949f9c0c1e3f268e75cf4088928ad48569e8d815d20e23220c41f752f6f6af1->enter($__internal_f949f9c0c1e3f268e75cf4088928ad48569e8d815d20e23220c41f752f6f6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2dcd18ce898e50070a97d83da6c9f6e6ee68cb545aca640914e43f37b9f56d->leave($__internal_fb2dcd18ce898e50070a97d83da6c9f6e6ee68cb545aca640914e43f37b9f56d_prof);

        
        $__internal_f949f9c0c1e3f268e75cf4088928ad48569e8d815d20e23220c41f752f6f6af1->leave($__internal_f949f9c0c1e3f268e75cf4088928ad48569e8d815d20e23220c41f752f6f6af1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eeacc6875e85438f9ce7e7ad797d20e1dcba8f706834a843922f95d2a1cb831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eeacc6875e85438f9ce7e7ad797d20e1dcba8f706834a843922f95d2a1cb831->enter($__internal_1eeacc6875e85438f9ce7e7ad797d20e1dcba8f706834a843922f95d2a1cb831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63c7fa28d912f857079f4236243f684eda71e8fae8186a64a448d5ca5d281ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c7fa28d912f857079f4236243f684eda71e8fae8186a64a448d5ca5d281ff7->enter($__internal_63c7fa28d912f857079f4236243f684eda71e8fae8186a64a448d5ca5d281ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, ($context["header"] ?? $this->getContext($context, "header")), "html", null, true);
        echo " </h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 7
            echo "        <div class=\"col-md-3\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "
            </a>
        </div>
        <div class=\"col-md-3\">
            ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "dodate", array()), "m/d/Y"), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-3\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "category", array()), "html", null, true);
            echo "
        </div>
        <div class=\"col-md-3\">

            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-copy", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">copy</a>
            ";
            // line 21
            if (($this->getAttribute($context["task"], "user", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 22
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">edit</a>
                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task-delete", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">delete</a>
            ";
            } else {
                // line 25
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "html", null, true);
                echo " task
            ";
            }
            // line 27
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_63c7fa28d912f857079f4236243f684eda71e8fae8186a64a448d5ca5d281ff7->leave($__internal_63c7fa28d912f857079f4236243f684eda71e8fae8186a64a448d5ca5d281ff7_prof);

        
        $__internal_1eeacc6875e85438f9ce7e7ad797d20e1dcba8f706834a843922f95d2a1cb831->leave($__internal_1eeacc6875e85438f9ce7e7ad797d20e1dcba8f706834a843922f95d2a1cb831_prof);

    }

    public function getTemplateName()
    {
        return "task/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  101 => 25,  96 => 23,  91 => 22,  89 => 21,  85 => 20,  78 => 16,  72 => 13,  65 => 9,  61 => 8,  58 => 7,  54 => 6,  49 => 5,  40 => 4,  11 => 1,);
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
    <h1>{{ header }} </h1>
    {% for task in tasks %}
        <div class=\"col-md-3\">
            <a href=\"{{ path('task-view', {'id': task.id})  }}\">
            {{ task.name }}
            </a>
        </div>
        <div class=\"col-md-3\">
            {{ task.dodate|date(\"m/d/Y\") }}
        </div>
        <div class=\"col-md-3\">
            {{ task.category }}
        </div>
        <div class=\"col-md-3\">

            <a href=\"{{ path('task-copy', {'id': task.id})  }}\" class=\"btn btn-success\">copy</a>
            {% if task.user ==  app.user.id  %}
                <a href=\"{{ path('task-edit', {'id': task.id})  }}\" class=\"btn btn-warning\">edit</a>
                <a href=\"{{ path('task-delete', {'id': task.id})  }}\" class=\"btn btn-danger\">delete</a>
            {% else %}
                {{ app.user }} task
            {% endif %}
        </div>
    {% endfor %}
{% endblock %}", "task/all.html.twig", "/var/www/loctestx.com/app/Resources/views/task/all.html.twig");
    }
}
