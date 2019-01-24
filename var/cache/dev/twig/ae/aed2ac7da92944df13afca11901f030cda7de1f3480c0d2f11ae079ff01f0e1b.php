<?php

/* ATCAppBundle:Questionnaire:Difficulte/facile.html.twig */
class __TwigTemplate_e9609e579970d3827e07240275fff3e52ff2d487977d857299accbc89814eba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Questionnaire:Difficulte/facile.html.twig", 1);
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
        $__internal_2986426100a55c03d9d4209da5a961c3c19901829739ad0f3e1d57e5eb3a70cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2986426100a55c03d9d4209da5a961c3c19901829739ad0f3e1d57e5eb3a70cb->enter($__internal_2986426100a55c03d9d4209da5a961c3c19901829739ad0f3e1d57e5eb3a70cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Difficulte/facile.html.twig"));

        $__internal_3801a135b0a06a9a0c970349da71d02179d85fd2aefd08dba73130df939fa83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3801a135b0a06a9a0c970349da71d02179d85fd2aefd08dba73130df939fa83d->enter($__internal_3801a135b0a06a9a0c970349da71d02179d85fd2aefd08dba73130df939fa83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Difficulte/facile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2986426100a55c03d9d4209da5a961c3c19901829739ad0f3e1d57e5eb3a70cb->leave($__internal_2986426100a55c03d9d4209da5a961c3c19901829739ad0f3e1d57e5eb3a70cb_prof);

        
        $__internal_3801a135b0a06a9a0c970349da71d02179d85fd2aefd08dba73130df939fa83d->leave($__internal_3801a135b0a06a9a0c970349da71d02179d85fd2aefd08dba73130df939fa83d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1638f767542f0782022ec07f304fb8eed4e989d949a904967b7be0151c8e97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1638f767542f0782022ec07f304fb8eed4e989d949a904967b7be0151c8e97b->enter($__internal_c1638f767542f0782022ec07f304fb8eed4e989d949a904967b7be0151c8e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6fb32ecf05283d7ad199da8140705251bb7f886e8bd05434e449a4f1225d20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6fb32ecf05283d7ad199da8140705251bb7f886e8bd05434e449a4f1225d20b->enter($__internal_e6fb32ecf05283d7ad199da8140705251bb7f886e8bd05434e449a4f1225d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"view\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond.gif"), "html", null, true);
        echo "\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">
        <!-- Content -->
        <div class=\"text-center white-text mx-5 wow fadeIn\">
            
            <section class=\"text-center my-5\">
                <div class=\"container\">
                    <!-- Section heading -->
                    <h2 class=\"h1-responsive  font-weight-bold text-center my-5\">Facile ! Sélectionner votre thèmes favoris !</h2>
                    
                </div>
                <!-- Grid row -->
                <div class=\"row justify-content-center\">

                    <!-- Grid column -->
                    <div class=\"col-md-5 mb-md-0 mb-4 \">
                    <div class=\"card card-image  \" style=\"
                        background-image: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/math.jpg"), "html", null, true);
        echo "); 
                       
                         background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"pink-text\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <strong> MATHEMATIQUES</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Mathématiques</strong>
                            </h3>
                    
                            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_facile_math");
        echo "\" class=\"btn purple-gradient\"><i class=\"fas fa-clone left\"></i> Lancement du questionnaire </a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-5\">
                    <div class=\"card card-image\"  style = \" background-image: url(";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/geo.png"), "html", null, true);
        echo ") ; 
                       
                        background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"green-text\">
                            <i class=\"fas fa-eye\"></i>
                            <strong> GEOGRAPHIE</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Géographie</strong>
                            </h3>
                            
                            <a class=\"btn blue-gradient\"><i class=\"fas fa-clone left\"></i> View project</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                 </div>

                    <div class=\"row justify-content-center\">

                    <!-- Grid column -->
                    <div class=\"col-md-5 mb-md-0 mb-4 \">
                    <div class=\"card card-image  \" style=\"
                        background-image: url(";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/math.gif"), "html", null, true);
        echo "); 
                       
                         background-size: auto auto;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"pink-text\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <strong> FRANCAIS</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Français</strong>
                            </h3>
                    
                            <a class=\"btn purple-gradient\"><i class=\"fas fa-clone left\"></i> Lancement du questionnaire </a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-5\">
                    <div class=\"card card-image\"  style = \" background-image: url(";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/histoire.jpg"), "html", null, true);
        echo "); background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"green-text\">
                            <i class=\"fas fa-eye\"></i>
                            <strong> HISTOIRE</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Histoire</strong>
                            </h3>
                            
                            <a class=\"btn blue-gradient\"><i class=\"fas fa-clone left\"></i> View project</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                 </div>
                
                </div>
            </section>
        </div>
    </div>
</div>
";
        
        $__internal_e6fb32ecf05283d7ad199da8140705251bb7f886e8bd05434e449a4f1225d20b->leave($__internal_e6fb32ecf05283d7ad199da8140705251bb7f886e8bd05434e449a4f1225d20b_prof);

        
        $__internal_c1638f767542f0782022ec07f304fb8eed4e989d949a904967b7be0151c8e97b->leave($__internal_c1638f767542f0782022ec07f304fb8eed4e989d949a904967b7be0151c8e97b_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Questionnaire:Difficulte/facile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 96,  133 => 74,  103 => 47,  91 => 38,  75 => 25,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
<div class=\"view\">
    <img src=\"{{  asset('img/fond.gif') }}\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">
        <!-- Content -->
        <div class=\"text-center white-text mx-5 wow fadeIn\">
            
            <section class=\"text-center my-5\">
                <div class=\"container\">
                    <!-- Section heading -->
                    <h2 class=\"h1-responsive  font-weight-bold text-center my-5\">Facile ! Sélectionner votre thèmes favoris !</h2>
                    
                </div>
                <!-- Grid row -->
                <div class=\"row justify-content-center\">

                    <!-- Grid column -->
                    <div class=\"col-md-5 mb-md-0 mb-4 \">
                    <div class=\"card card-image  \" style=\"
                        background-image: url({{  asset('img/math.jpg') }}); 
                       
                         background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"pink-text\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <strong> MATHEMATIQUES</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Mathématiques</strong>
                            </h3>
                    
                            <a href=\"{{ path('questionnaire_facile_math')}}\" class=\"btn purple-gradient\"><i class=\"fas fa-clone left\"></i> Lancement du questionnaire </a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-5\">
                    <div class=\"card card-image\"  style = \" background-image: url({{  asset('img/geo.png') }}) ; 
                       
                        background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"green-text\">
                            <i class=\"fas fa-eye\"></i>
                            <strong> GEOGRAPHIE</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Géographie</strong>
                            </h3>
                            
                            <a class=\"btn blue-gradient\"><i class=\"fas fa-clone left\"></i> View project</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                 </div>

                    <div class=\"row justify-content-center\">

                    <!-- Grid column -->
                    <div class=\"col-md-5 mb-md-0 mb-4 \">
                    <div class=\"card card-image  \" style=\"
                        background-image: url({{  asset('img/math.gif') }}); 
                       
                         background-size: auto auto;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"pink-text\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <strong> FRANCAIS</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Français</strong>
                            </h3>
                    
                            <a class=\"btn purple-gradient\"><i class=\"fas fa-clone left\"></i> Lancement du questionnaire </a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-5\">
                    <div class=\"card card-image\"  style = \" background-image: url({{  asset('img/histoire.jpg') }}); background-size: 100% 100%;\">
                        <div class=\"text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded\">
                        <div>
                            <h6 class=\"green-text\">
                            <i class=\"fas fa-eye\"></i>
                            <strong> HISTOIRE</strong>
                            </h6>
                            <h3 class=\"py-3  font-weight-bold\">
                            <strong>Choisis le questionnaire de Histoire</strong>
                            </h3>
                            
                            <a class=\"btn blue-gradient\"><i class=\"fas fa-clone left\"></i> View project</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                 </div>
                
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}", "ATCAppBundle:Questionnaire:Difficulte/facile.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Questionnaire/Difficulte/facile.html.twig");
    }
}
