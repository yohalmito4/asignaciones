<?php

/* base.html.twig */
class __TwigTemplate_f5a0ec5cb472a690b5519f1da890d4a46af94f38c7ea445f4adc9f2d6c2eb654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0776a9eeaa971b445b453ba738a35547c25646eeff6798df45e234b4ac7e83f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0776a9eeaa971b445b453ba738a35547c25646eeff6798df45e234b4ac7e83f6->enter($__internal_0776a9eeaa971b445b453ba738a35547c25646eeff6798df45e234b4ac7e83f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0776a9eeaa971b445b453ba738a35547c25646eeff6798df45e234b4ac7e83f6->leave($__internal_0776a9eeaa971b445b453ba738a35547c25646eeff6798df45e234b4ac7e83f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca1dbe26048ea46f7c47ef91b9d838ab5e919163c49e1c1be6668ecc8472637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1dbe26048ea46f7c47ef91b9d838ab5e919163c49e1c1be6668ecc8472637f->enter($__internal_ca1dbe26048ea46f7c47ef91b9d838ab5e919163c49e1c1be6668ecc8472637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_ca1dbe26048ea46f7c47ef91b9d838ab5e919163c49e1c1be6668ecc8472637f->leave($__internal_ca1dbe26048ea46f7c47ef91b9d838ab5e919163c49e1c1be6668ecc8472637f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1f07c6a0e9bb04a3900cb16ccd714fc6b5cd3498e6d1ae4924c2482152a4f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f07c6a0e9bb04a3900cb16ccd714fc6b5cd3498e6d1ae4924c2482152a4f03->enter($__internal_c1f07c6a0e9bb04a3900cb16ccd714fc6b5cd3498e6d1ae4924c2482152a4f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c1f07c6a0e9bb04a3900cb16ccd714fc6b5cd3498e6d1ae4924c2482152a4f03->leave($__internal_c1f07c6a0e9bb04a3900cb16ccd714fc6b5cd3498e6d1ae4924c2482152a4f03_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c4f73481a364c3a87803ff2a795103287763a38cf8a096f61b0755a471fe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c4f73481a364c3a87803ff2a795103287763a38cf8a096f61b0755a471fe4d->enter($__internal_a7c4f73481a364c3a87803ff2a795103287763a38cf8a096f61b0755a471fe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_a7c4f73481a364c3a87803ff2a795103287763a38cf8a096f61b0755a471fe4d->leave($__internal_a7c4f73481a364c3a87803ff2a795103287763a38cf8a096f61b0755a471fe4d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0456b342f3b37609ee8c93e19e07ca9a3761d6a743c81ceb7eed25c89403796c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0456b342f3b37609ee8c93e19e07ca9a3761d6a743c81ceb7eed25c89403796c->enter($__internal_0456b342f3b37609ee8c93e19e07ca9a3761d6a743c81ceb7eed25c89403796c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0456b342f3b37609ee8c93e19e07ca9a3761d6a743c81ceb7eed25c89403796c->leave($__internal_0456b342f3b37609ee8c93e19e07ca9a3761d6a743c81ceb7eed25c89403796c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
