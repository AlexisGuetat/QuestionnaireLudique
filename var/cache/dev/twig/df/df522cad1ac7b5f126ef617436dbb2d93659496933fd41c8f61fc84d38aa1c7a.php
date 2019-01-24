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
        $__internal_ad42f2fe9a9a2eaf6d7cb1d3475e340cfb4f7e16832b8d0ec4bbf0d646bfd9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad42f2fe9a9a2eaf6d7cb1d3475e340cfb4f7e16832b8d0ec4bbf0d646bfd9dd->enter($__internal_ad42f2fe9a9a2eaf6d7cb1d3475e340cfb4f7e16832b8d0ec4bbf0d646bfd9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add2.html.twig"));

        $__internal_e9dd3d910764273f9f7b317f958114c1032c1afebaa2792285992f4eada4f650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9dd3d910764273f9f7b317f958114c1032c1afebaa2792285992f4eada4f650->enter($__internal_e9dd3d910764273f9f7b317f958114c1032c1afebaa2792285992f4eada4f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:add2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad42f2fe9a9a2eaf6d7cb1d3475e340cfb4f7e16832b8d0ec4bbf0d646bfd9dd->leave($__internal_ad42f2fe9a9a2eaf6d7cb1d3475e340cfb4f7e16832b8d0ec4bbf0d646bfd9dd_prof);

        
        $__internal_e9dd3d910764273f9f7b317f958114c1032c1afebaa2792285992f4eada4f650->leave($__internal_e9dd3d910764273f9f7b317f958114c1032c1afebaa2792285992f4eada4f650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5930325ad397252039323a2af7171dc718b374b56b1946842d01e38b47f9e48f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5930325ad397252039323a2af7171dc718b374b56b1946842d01e38b47f9e48f->enter($__internal_5930325ad397252039323a2af7171dc718b374b56b1946842d01e38b47f9e48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_121261f2672e2267dbd55d1ebc37e85c5150f50df411953230ecc6e513c86692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121261f2672e2267dbd55d1ebc37e85c5150f50df411953230ecc6e513c86692->enter($__internal_121261f2672e2267dbd55d1ebc37e85c5150f50df411953230ecc6e513c86692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_121261f2672e2267dbd55d1ebc37e85c5150f50df411953230ecc6e513c86692->leave($__internal_121261f2672e2267dbd55d1ebc37e85c5150f50df411953230ecc6e513c86692_prof);

        
        $__internal_5930325ad397252039323a2af7171dc718b374b56b1946842d01e38b47f9e48f->leave($__internal_5930325ad397252039323a2af7171dc718b374b56b1946842d01e38b47f9e48f_prof);

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
