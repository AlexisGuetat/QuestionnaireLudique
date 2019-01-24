<?php

/* ATCAppBundle:Administrateur:add.html.twig */
class __TwigTemplate_ea1a62fc907543a274c95718cc27efcef9e2bfff9eeab97d77d8967fbaef3b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Administrateur:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ATCAppBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a34805df3714f2a7e87fcb05cb56af3a8579e607147c48bb52d395c22298301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a34805df3714f2a7e87fcb05cb56af3a8579e607147c48bb52d395c22298301->enter($__internal_0a34805df3714f2a7e87fcb05cb56af3a8579e607147c48bb52d395c22298301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add.html.twig"));

        $__internal_f6221259cbb783eb955dfc1b00b8350f5ee0ab6ad29389f768eb29c685ff69e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6221259cbb783eb955dfc1b00b8350f5ee0ab6ad29389f768eb29c685ff69e7->enter($__internal_f6221259cbb783eb955dfc1b00b8350f5ee0ab6ad29389f768eb29c685ff69e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a34805df3714f2a7e87fcb05cb56af3a8579e607147c48bb52d395c22298301->leave($__internal_0a34805df3714f2a7e87fcb05cb56af3a8579e607147c48bb52d395c22298301_prof);

        
        $__internal_f6221259cbb783eb955dfc1b00b8350f5ee0ab6ad29389f768eb29c685ff69e7->leave($__internal_f6221259cbb783eb955dfc1b00b8350f5ee0ab6ad29389f768eb29c685ff69e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_14e08e9fb6a58e6f7e2e418b3d1bd5658ab1caa99b5bf3515bc4188859df75fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e08e9fb6a58e6f7e2e418b3d1bd5658ab1caa99b5bf3515bc4188859df75fd->enter($__internal_14e08e9fb6a58e6f7e2e418b3d1bd5658ab1caa99b5bf3515bc4188859df75fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6745988e089b69a0f3e424d7221821130c9d7bf671f2fada740acc714e48a881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6745988e089b69a0f3e424d7221821130c9d7bf671f2fada740acc714e48a881->enter($__internal_6745988e089b69a0f3e424d7221821130c9d7bf671f2fada740acc714e48a881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container mt-4 pt-5 pb-5\">
\t\t
\t\t\t<div class=\"card bg-secondary text-white\">
\t\t\t\t<h5 class=\"card-header\">Ajouter une question</h5>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"addQuestion\" action=\"\">
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionText\">Question: </label>
\t\t\t\t\t\t\t<input autofocus type=\"text\" name=\"questionText\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionAnswer\">Réponse: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionAnswer\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal1\">Choix 1: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal1\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal2\">Choix 2: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal2\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal3\">Choix 3: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal3\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envois</button>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>

";
        
        $__internal_6745988e089b69a0f3e424d7221821130c9d7bf671f2fada740acc714e48a881->leave($__internal_6745988e089b69a0f3e424d7221821130c9d7bf671f2fada740acc714e48a881_prof);

        
        $__internal_14e08e9fb6a58e6f7e2e418b3d1bd5658ab1caa99b5bf3515bc4188859df75fd->leave($__internal_14e08e9fb6a58e6f7e2e418b3d1bd5658ab1caa99b5bf3515bc4188859df75fd_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Administrateur:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ATCAppBundle::index.html.twig\" %}

{% block body %}
<div class=\"container mt-4 pt-5 pb-5\">
\t\t
\t\t\t<div class=\"card bg-secondary text-white\">
\t\t\t\t<h5 class=\"card-header\">Ajouter une question</h5>
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<form id=\"addQuestion\" action=\"\">
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionText\">Question: </label>
\t\t\t\t\t\t\t<input autofocus type=\"text\" name=\"questionText\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionAnswer\">Réponse: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionAnswer\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal1\">Choix 1: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal1\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal2\">Choix 2: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal2\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t
\t\t\t\t\t\t\t<label for=\"questionProposal3\">Choix 3: </label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"questionProposal3\" class=\"form-control\" value=\"\" />
\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envois</button>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>

{% endblock %}", "ATCAppBundle:Administrateur:add.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Administrateur/add.html.twig");
    }
}
