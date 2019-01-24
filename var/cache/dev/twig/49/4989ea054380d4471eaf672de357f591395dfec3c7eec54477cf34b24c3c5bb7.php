<?php

/* ATCAppBundle:Administrateur:add.html.twig */
class __TwigTemplate_76b4127dd5a72eb81e7e6b95613a965a41f2c3795e45c0ecf7bf4cb867a874f3 extends Twig_Template
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
        $__internal_faa5224e1c086adb12ec36f0241d9555405a399eac034b07f2243744b9219711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa5224e1c086adb12ec36f0241d9555405a399eac034b07f2243744b9219711->enter($__internal_faa5224e1c086adb12ec36f0241d9555405a399eac034b07f2243744b9219711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add.html.twig"));

        $__internal_9ac8f75bfec22ce05fdd5c2705358c734a3dccdbf90a483ee9d53357e9dfddf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac8f75bfec22ce05fdd5c2705358c734a3dccdbf90a483ee9d53357e9dfddf0->enter($__internal_9ac8f75bfec22ce05fdd5c2705358c734a3dccdbf90a483ee9d53357e9dfddf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faa5224e1c086adb12ec36f0241d9555405a399eac034b07f2243744b9219711->leave($__internal_faa5224e1c086adb12ec36f0241d9555405a399eac034b07f2243744b9219711_prof);

        
        $__internal_9ac8f75bfec22ce05fdd5c2705358c734a3dccdbf90a483ee9d53357e9dfddf0->leave($__internal_9ac8f75bfec22ce05fdd5c2705358c734a3dccdbf90a483ee9d53357e9dfddf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47f8780eaf33cb34423bbaa46816f99de6ef7fd46af17ee0cc36228556731a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f8780eaf33cb34423bbaa46816f99de6ef7fd46af17ee0cc36228556731a8a->enter($__internal_47f8780eaf33cb34423bbaa46816f99de6ef7fd46af17ee0cc36228556731a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17523266222aaf8982b31ace3e86634cbef3cfb14f7452d4145b97ef5e6b1b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17523266222aaf8982b31ace3e86634cbef3cfb14f7452d4145b97ef5e6b1b62->enter($__internal_17523266222aaf8982b31ace3e86634cbef3cfb14f7452d4145b97ef5e6b1b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17523266222aaf8982b31ace3e86634cbef3cfb14f7452d4145b97ef5e6b1b62->leave($__internal_17523266222aaf8982b31ace3e86634cbef3cfb14f7452d4145b97ef5e6b1b62_prof);

        
        $__internal_47f8780eaf33cb34423bbaa46816f99de6ef7fd46af17ee0cc36228556731a8a->leave($__internal_47f8780eaf33cb34423bbaa46816f99de6ef7fd46af17ee0cc36228556731a8a_prof);

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

{% endblock %}", "ATCAppBundle:Administrateur:add.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Administrateur/add.html.twig");
    }
}
