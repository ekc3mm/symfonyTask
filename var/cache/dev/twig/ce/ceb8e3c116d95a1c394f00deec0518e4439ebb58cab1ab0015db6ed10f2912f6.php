<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b232c3fd026fc0037a08155abd33b710fabd954581e79771178bfb0797443094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6506942a2039e7ce4056925ea9902fb9a5c54fed3a14cad6a5742c285f48fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6506942a2039e7ce4056925ea9902fb9a5c54fed3a14cad6a5742c285f48fae->enter($__internal_b6506942a2039e7ce4056925ea9902fb9a5c54fed3a14cad6a5742c285f48fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_46a225915454dc68af07360353e570d78f16dfdd7bffc8c4cf722bd0431273e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a225915454dc68af07360353e570d78f16dfdd7bffc8c4cf722bd0431273e3->enter($__internal_46a225915454dc68af07360353e570d78f16dfdd7bffc8c4cf722bd0431273e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6506942a2039e7ce4056925ea9902fb9a5c54fed3a14cad6a5742c285f48fae->leave($__internal_b6506942a2039e7ce4056925ea9902fb9a5c54fed3a14cad6a5742c285f48fae_prof);

        
        $__internal_46a225915454dc68af07360353e570d78f16dfdd7bffc8c4cf722bd0431273e3->leave($__internal_46a225915454dc68af07360353e570d78f16dfdd7bffc8c4cf722bd0431273e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_522e3b824b4d940ea43232fd2c7cb43ec78b57e5ae171c1d561ef592d48f3ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522e3b824b4d940ea43232fd2c7cb43ec78b57e5ae171c1d561ef592d48f3ed9->enter($__internal_522e3b824b4d940ea43232fd2c7cb43ec78b57e5ae171c1d561ef592d48f3ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc1db52e833c98390b10d2cacb82dcad732e09a3a5076ccec787aed2acc59eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1db52e833c98390b10d2cacb82dcad732e09a3a5076ccec787aed2acc59eb8->enter($__internal_dc1db52e833c98390b10d2cacb82dcad732e09a3a5076ccec787aed2acc59eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>

";
        
        $__internal_dc1db52e833c98390b10d2cacb82dcad732e09a3a5076ccec787aed2acc59eb8->leave($__internal_dc1db52e833c98390b10d2cacb82dcad732e09a3a5076ccec787aed2acc59eb8_prof);

        
        $__internal_522e3b824b4d940ea43232fd2c7cb43ec78b57e5ae171c1d561ef592d48f3ed9->leave($__internal_522e3b824b4d940ea43232fd2c7cb43ec78b57e5ae171c1d561ef592d48f3ed9_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22d12489f7928aa07af1d67842c8a7b5cd222968c4a2210853b78b62ef7b8aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d12489f7928aa07af1d67842c8a7b5cd222968c4a2210853b78b62ef7b8aed->enter($__internal_22d12489f7928aa07af1d67842c8a7b5cd222968c4a2210853b78b62ef7b8aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d0557405e708e38175058b7a2c9add76bcb641f59f2b947eb96da06b53e11bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0557405e708e38175058b7a2c9add76bcb641f59f2b947eb96da06b53e11bb->enter($__internal_4d0557405e708e38175058b7a2c9add76bcb641f59f2b947eb96da06b53e11bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_4d0557405e708e38175058b7a2c9add76bcb641f59f2b947eb96da06b53e11bb->leave($__internal_4d0557405e708e38175058b7a2c9add76bcb641f59f2b947eb96da06b53e11bb_prof);

        
        $__internal_22d12489f7928aa07af1d67842c8a7b5cd222968c4a2210853b78b62ef7b8aed->leave($__internal_22d12489f7928aa07af1d67842c8a7b5cd222968c4a2210853b78b62ef7b8aed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 27,  135 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/loctestx.com/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
