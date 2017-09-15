<?php

/* default/main.html.twig */
class __TwigTemplate_6e4614d12082e501fc6cade568e92f12a66dd10b620b44ade13b4f6c3ae89e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/main.html.twig", 1);
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
        $__internal_be7b739049849c43efd3924de3dbe31fa5090906d654c99cd7c5c240aec8f566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7b739049849c43efd3924de3dbe31fa5090906d654c99cd7c5c240aec8f566->enter($__internal_be7b739049849c43efd3924de3dbe31fa5090906d654c99cd7c5c240aec8f566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main.html.twig"));

        $__internal_312540e3ed0ac99b61d7d01c6075ff02f61ce0ad01f06dc5c89d8843699fce60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312540e3ed0ac99b61d7d01c6075ff02f61ce0ad01f06dc5c89d8843699fce60->enter($__internal_312540e3ed0ac99b61d7d01c6075ff02f61ce0ad01f06dc5c89d8843699fce60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be7b739049849c43efd3924de3dbe31fa5090906d654c99cd7c5c240aec8f566->leave($__internal_be7b739049849c43efd3924de3dbe31fa5090906d654c99cd7c5c240aec8f566_prof);

        
        $__internal_312540e3ed0ac99b61d7d01c6075ff02f61ce0ad01f06dc5c89d8843699fce60->leave($__internal_312540e3ed0ac99b61d7d01c6075ff02f61ce0ad01f06dc5c89d8843699fce60_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7f36336b092f4fdca2fcc2cfb02cba1fef53bc0711bab0b698deb66d847abe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7f36336b092f4fdca2fcc2cfb02cba1fef53bc0711bab0b698deb66d847abe9->enter($__internal_f7f36336b092f4fdca2fcc2cfb02cba1fef53bc0711bab0b698deb66d847abe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93c297f98cba0b74a6134ec66bb0ba21e4341ff7b5c3539da69f3f30e224740b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c297f98cba0b74a6134ec66bb0ba21e4341ff7b5c3539da69f3f30e224740b->enter($__internal_93c297f98cba0b74a6134ec66bb0ba21e4341ff7b5c3539da69f3f30e224740b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>main page</h1>

";
        
        $__internal_93c297f98cba0b74a6134ec66bb0ba21e4341ff7b5c3539da69f3f30e224740b->leave($__internal_93c297f98cba0b74a6134ec66bb0ba21e4341ff7b5c3539da69f3f30e224740b_prof);

        
        $__internal_f7f36336b092f4fdca2fcc2cfb02cba1fef53bc0711bab0b698deb66d847abe9->leave($__internal_f7f36336b092f4fdca2fcc2cfb02cba1fef53bc0711bab0b698deb66d847abe9_prof);

    }

    public function getTemplateName()
    {
        return "default/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    <h1>main page</h1>

{% endblock %}", "default/main.html.twig", "/var/www/loctestx.com/app/Resources/views/default/main.html.twig");
    }
}
