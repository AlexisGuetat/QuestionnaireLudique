<?php

/* ATCAppBundle:Administrateur:add2.html.twig */
class __TwigTemplate_b2e5cc27ba52968430b2934f3bc71846f102a1076f87d850a83392275f22fbb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Administrateur:add2.html.twig", 1);
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
        $__internal_cb0be6bf7d7475ee7e3e238f142a3264d9eb80003ff24effdbee0603e01ccbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0be6bf7d7475ee7e3e238f142a3264d9eb80003ff24effdbee0603e01ccbd5->enter($__internal_cb0be6bf7d7475ee7e3e238f142a3264d9eb80003ff24effdbee0603e01ccbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add2.html.twig"));

        $__internal_49a25ba64426023b59d3c937914ac9ecb4c675b40a720397b314058847e65600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a25ba64426023b59d3c937914ac9ecb4c675b40a720397b314058847e65600->enter($__internal_49a25ba64426023b59d3c937914ac9ecb4c675b40a720397b314058847e65600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0be6bf7d7475ee7e3e238f142a3264d9eb80003ff24effdbee0603e01ccbd5->leave($__internal_cb0be6bf7d7475ee7e3e238f142a3264d9eb80003ff24effdbee0603e01ccbd5_prof);

        
        $__internal_49a25ba64426023b59d3c937914ac9ecb4c675b40a720397b314058847e65600->leave($__internal_49a25ba64426023b59d3c937914ac9ecb4c675b40a720397b314058847e65600_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03058d2ab6c3c8eb597beec14a73750429861db7cf21c2f33dd7853f01fb1b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03058d2ab6c3c8eb597beec14a73750429861db7cf21c2f33dd7853f01fb1b12->enter($__internal_03058d2ab6c3c8eb597beec14a73750429861db7cf21c2f33dd7853f01fb1b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd0a2e0f8ac16729ac91b46d42b28eb1c86fd2f34c9d0f8f2ea38948b8652b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0a2e0f8ac16729ac91b46d42b28eb1c86fd2f34c9d0f8f2ea38948b8652b2d->enter($__internal_bd0a2e0f8ac16729ac91b46d42b28eb1c86fd2f34c9d0f8f2ea38948b8652b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container mt-4 pt-5 pb-5 \">
\t\t
\t\t\t<div class=\"card text-white\" style=\"text-align:center;\">
            <img class=\"card-img-top\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/jungle.jpg"), "html", null, true);
        echo "\" alt\"Card image\"> 
               <div class=\"card-img-overlay \"> 
                <h5 class=\"card-header\"><b>Ajouter une question</b></h5>
\t\t\t\t\t<form id=\"addQuestion\" action=\"\">
                        <div class=\"container \">
                            <div class=\"form-group \" >
            
                                <label for=\"questionText\" class=\"text-center btn aqua-gradient\"><b>Question:</b> </label>
                                <input autofocus type=\"text\" name=\"questionText\" class=\"form-control mb-1\" required=\"\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionAnswer\" class=\"text-center btn aqua-gradient\"><b>Réponse: </b></label>
                                <input type=\"text\" name=\"questionAnswer\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal1\" class=\"text-center btn aqua-gradient\"><b>Choix 1:</b></label>
                                <input type=\"text\" name=\"questionProposal1\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal2\" class=\"text-center btn aqua-gradient\"><b>Choix 2:</b></label>
                                <input type=\"text\" name=\"questionProposal2\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal3\" class=\"text-center btn aqua-gradient\"><b>Choix 3:</b></label>
                                <input type=\"text\" name=\"questionProposal3\" class=\"form-control\" value=\"\" />
            
                            </div>
                            <div>
                            <button type=\"submit\" class=\"btn btn-primary\">Envois</button>\t
                            </div>\t
                        </div>  
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>

";
        
        $__internal_bd0a2e0f8ac16729ac91b46d42b28eb1c86fd2f34c9d0f8f2ea38948b8652b2d->leave($__internal_bd0a2e0f8ac16729ac91b46d42b28eb1c86fd2f34c9d0f8f2ea38948b8652b2d_prof);

        
        $__internal_03058d2ab6c3c8eb597beec14a73750429861db7cf21c2f33dd7853f01fb1b12->leave($__internal_03058d2ab6c3c8eb597beec14a73750429861db7cf21c2f33dd7853f01fb1b12_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Administrateur:add2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"container mt-4 pt-5 pb-5 \">
\t\t
\t\t\t<div class=\"card text-white\" style=\"text-align:center;\">
            <img class=\"card-img-top\" src=\"{{  asset('img/jungle.jpg') }}\" alt\"Card image\"> 
               <div class=\"card-img-overlay \"> 
                <h5 class=\"card-header\"><b>Ajouter une question</b></h5>
\t\t\t\t\t<form id=\"addQuestion\" action=\"\">
                        <div class=\"container \">
                            <div class=\"form-group \" >
            
                                <label for=\"questionText\" class=\"text-center btn aqua-gradient\"><b>Question:</b> </label>
                                <input autofocus type=\"text\" name=\"questionText\" class=\"form-control mb-1\" required=\"\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionAnswer\" class=\"text-center btn aqua-gradient\"><b>Réponse: </b></label>
                                <input type=\"text\" name=\"questionAnswer\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal1\" class=\"text-center btn aqua-gradient\"><b>Choix 1:</b></label>
                                <input type=\"text\" name=\"questionProposal1\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal2\" class=\"text-center btn aqua-gradient\"><b>Choix 2:</b></label>
                                <input type=\"text\" name=\"questionProposal2\" class=\"form-control\" value=\"\" />
            
                            </div>
            
                            <div class=\"form-group\">
            
                                <label for=\"questionProposal3\" class=\"text-center btn aqua-gradient\"><b>Choix 3:</b></label>
                                <input type=\"text\" name=\"questionProposal3\" class=\"form-control\" value=\"\" />
            
                            </div>
                            <div>
                            <button type=\"submit\" class=\"btn btn-primary\">Envois</button>\t
                            </div>\t
                        </div>  
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>

{% endblock %}", "ATCAppBundle:Administrateur:add2.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Administrateur/add2.html.twig");
    }
}
