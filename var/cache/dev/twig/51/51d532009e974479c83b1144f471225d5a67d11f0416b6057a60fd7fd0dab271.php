<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b1155c6dd4c577947e62fffa524974037d88a04081ce16e74642b325752c569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1155c6dd4c577947e62fffa524974037d88a04081ce16e74642b325752c569->enter($__internal_0b1155c6dd4c577947e62fffa524974037d88a04081ce16e74642b325752c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cf2b6e1ed36e44793b1344aa91afa2e360d6ad85500799db6db4cf8fd1a359aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2b6e1ed36e44793b1344aa91afa2e360d6ad85500799db6db4cf8fd1a359aa->enter($__internal_cf2b6e1ed36e44793b1344aa91afa2e360d6ad85500799db6db4cf8fd1a359aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0b1155c6dd4c577947e62fffa524974037d88a04081ce16e74642b325752c569->leave($__internal_0b1155c6dd4c577947e62fffa524974037d88a04081ce16e74642b325752c569_prof);

        
        $__internal_cf2b6e1ed36e44793b1344aa91afa2e360d6ad85500799db6db4cf8fd1a359aa->leave($__internal_cf2b6e1ed36e44793b1344aa91afa2e360d6ad85500799db6db4cf8fd1a359aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac6a6ec2b5904702aeb02470ec974c62a12e4a9668a3745b24c65c1d4b036939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6a6ec2b5904702aeb02470ec974c62a12e4a9668a3745b24c65c1d4b036939->enter($__internal_ac6a6ec2b5904702aeb02470ec974c62a12e4a9668a3745b24c65c1d4b036939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_868e8911e0b3dadf038dde68e119b8b4a81f5c78ed49b1fce6e92c4970b2691f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868e8911e0b3dadf038dde68e119b8b4a81f5c78ed49b1fce6e92c4970b2691f->enter($__internal_868e8911e0b3dadf038dde68e119b8b4a81f5c78ed49b1fce6e92c4970b2691f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_868e8911e0b3dadf038dde68e119b8b4a81f5c78ed49b1fce6e92c4970b2691f->leave($__internal_868e8911e0b3dadf038dde68e119b8b4a81f5c78ed49b1fce6e92c4970b2691f_prof);

        
        $__internal_ac6a6ec2b5904702aeb02470ec974c62a12e4a9668a3745b24c65c1d4b036939->leave($__internal_ac6a6ec2b5904702aeb02470ec974c62a12e4a9668a3745b24c65c1d4b036939_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_93c541cfa3313a10a54a572d49603672f85864465ca8f1f0e6787fbe33b4e31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c541cfa3313a10a54a572d49603672f85864465ca8f1f0e6787fbe33b4e31b->enter($__internal_93c541cfa3313a10a54a572d49603672f85864465ca8f1f0e6787fbe33b4e31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be7112c20ad284d0064e439c248e40a346710823e9813ce54632aa64879c93e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7112c20ad284d0064e439c248e40a346710823e9813ce54632aa64879c93e7->enter($__internal_be7112c20ad284d0064e439c248e40a346710823e9813ce54632aa64879c93e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_be7112c20ad284d0064e439c248e40a346710823e9813ce54632aa64879c93e7->leave($__internal_be7112c20ad284d0064e439c248e40a346710823e9813ce54632aa64879c93e7_prof);

        
        $__internal_93c541cfa3313a10a54a572d49603672f85864465ca8f1f0e6787fbe33b4e31b->leave($__internal_93c541cfa3313a10a54a572d49603672f85864465ca8f1f0e6787fbe33b4e31b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_701ed27c1cd21ac5fa6c51d039847eb65539d1363d410db69c891656eac49a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701ed27c1cd21ac5fa6c51d039847eb65539d1363d410db69c891656eac49a5a->enter($__internal_701ed27c1cd21ac5fa6c51d039847eb65539d1363d410db69c891656eac49a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9592badcbcc56638bc4608394dba6ea465897bc24901d5045371be1fe50b479c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9592badcbcc56638bc4608394dba6ea465897bc24901d5045371be1fe50b479c->enter($__internal_9592badcbcc56638bc4608394dba6ea465897bc24901d5045371be1fe50b479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9592badcbcc56638bc4608394dba6ea465897bc24901d5045371be1fe50b479c->leave($__internal_9592badcbcc56638bc4608394dba6ea465897bc24901d5045371be1fe50b479c_prof);

        
        $__internal_701ed27c1cd21ac5fa6c51d039847eb65539d1363d410db69c891656eac49a5a->leave($__internal_701ed27c1cd21ac5fa6c51d039847eb65539d1363d410db69c891656eac49a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/loctestx.com/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
