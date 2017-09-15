<?php

/* ::flash-messages.html.twig */
class __TwigTemplate_3369988085c0661f61831c24df4d5985102ef3129d3588fc2081d0971d48e5ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'flash_messages' => array($this, 'block_flash_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13af10c782496448d9bda7cdc65e3b9583b324315aea0d4db7ef5ff4f8b5c523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13af10c782496448d9bda7cdc65e3b9583b324315aea0d4db7ef5ff4f8b5c523->enter($__internal_13af10c782496448d9bda7cdc65e3b9583b324315aea0d4db7ef5ff4f8b5c523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::flash-messages.html.twig"));

        $__internal_df6c52666d7aef9f677284a5f3aff5fd27e084ce25e2e739468eb4c077fa4b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6c52666d7aef9f677284a5f3aff5fd27e084ce25e2e739468eb4c077fa4b6f->enter($__internal_df6c52666d7aef9f677284a5f3aff5fd27e084ce25e2e739468eb4c077fa4b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::flash-messages.html.twig"));

        // line 1
        $this->displayBlock('flash_messages', $context, $blocks);
        
        $__internal_13af10c782496448d9bda7cdc65e3b9583b324315aea0d4db7ef5ff4f8b5c523->leave($__internal_13af10c782496448d9bda7cdc65e3b9583b324315aea0d4db7ef5ff4f8b5c523_prof);

        
        $__internal_df6c52666d7aef9f677284a5f3aff5fd27e084ce25e2e739468eb4c077fa4b6f->leave($__internal_df6c52666d7aef9f677284a5f3aff5fd27e084ce25e2e739468eb4c077fa4b6f_prof);

    }

    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_4bee60e1b5d3486724b1cef258de964feca0f9642662281132df415247d2d7cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bee60e1b5d3486724b1cef258de964feca0f9642662281132df415247d2d7cd->enter($__internal_4bee60e1b5d3486724b1cef258de964feca0f9642662281132df415247d2d7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_4c77160d63e1891bd5bd365ff3edd00a759368d625f5c03a08074d2750ee8383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c77160d63e1891bd5bd365ff3edd00a759368d625f5c03a08074d2750ee8383->enter($__internal_4c77160d63e1891bd5bd365ff3edd00a759368d625f5c03a08074d2750ee8383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
                </button>
                ";
                // line 8
                echo $context["message"];
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4c77160d63e1891bd5bd365ff3edd00a759368d625f5c03a08074d2750ee8383->leave($__internal_4c77160d63e1891bd5bd365ff3edd00a759368d625f5c03a08074d2750ee8383_prof);

        
        $__internal_4bee60e1b5d3486724b1cef258de964feca0f9642662281132df415247d2d7cd->leave($__internal_4bee60e1b5d3486724b1cef258de964feca0f9642662281132df415247d2d7cd_prof);

    }

    public function getTemplateName()
    {
        return "::flash-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  62 => 8,  54 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block flash_messages %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                    <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
                </button>
                {{ message | raw }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock %}", "::flash-messages.html.twig", "/var/www/loctestx.com/app/Resources/views/flash-messages.html.twig");
    }
}
