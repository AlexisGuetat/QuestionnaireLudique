<?php

/* ATCAppBundle:Administrateur:index.html.twig */
class __TwigTemplate_7fbc718f16f54f9a8d868dc1391077cc74222c64db1a66eaf4a73fb8413467b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Administrateur:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ATCAppBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e244e53f901258b3e487ac94d7ed917c74a3521a08504fc88d3338c9a26fca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e244e53f901258b3e487ac94d7ed917c74a3521a08504fc88d3338c9a26fca5->enter($__internal_9e244e53f901258b3e487ac94d7ed917c74a3521a08504fc88d3338c9a26fca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_028d8e6e6c0ee5a8b4042f8a90ab715dbbda0906fccfba6264da1d1ae6d7e755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028d8e6e6c0ee5a8b4042f8a90ab715dbbda0906fccfba6264da1d1ae6d7e755->enter($__internal_028d8e6e6c0ee5a8b4042f8a90ab715dbbda0906fccfba6264da1d1ae6d7e755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e244e53f901258b3e487ac94d7ed917c74a3521a08504fc88d3338c9a26fca5->leave($__internal_9e244e53f901258b3e487ac94d7ed917c74a3521a08504fc88d3338c9a26fca5_prof);

        
        $__internal_028d8e6e6c0ee5a8b4042f8a90ab715dbbda0906fccfba6264da1d1ae6d7e755->leave($__internal_028d8e6e6c0ee5a8b4042f8a90ab715dbbda0906fccfba6264da1d1ae6d7e755_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_955fce219a34520e448b1307cb5e8d735cfd692fd448daedcc6a969b65039f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955fce219a34520e448b1307cb5e8d735cfd692fd448daedcc6a969b65039f41->enter($__internal_955fce219a34520e448b1307cb5e8d735cfd692fd448daedcc6a969b65039f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54d757e8d6683bb909d1d1cc821896317203a903d5720d1fd51c67877ffbd46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d757e8d6683bb909d1d1cc821896317203a903d5720d1fd51c67877ffbd46a->enter($__internal_54d757e8d6683bb909d1d1cc821896317203a903d5720d1fd51c67877ffbd46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<<<<<<< HEAD
<div class=\"container border border-primary rem-5\">

<!-- Default form contact -->
<form class=\"text-center border border-light p-5\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrateur_ajout_formulaire");
        echo "\">

    <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

    <!-- Nom -->
    <input type=\"text\" name=\"titre\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

    <!-- Themes -->
    <label>Thémes du formulaire</label>
    <select name=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" selected>Sélectionner une option</option>
        <option value=\"MATH\">Mathématique</option>
        <option value=\"FRANCAIS\">Français</option>
        <option value=\"HISTOIRE\">Histoire</option>
        <option value=\"GEO\">Géographie</option>
        <option value=\"AUTRES\">Autres</option>
    </select>

     <!-- Autres -->
    <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

    <!-- Difficulté -->
    <label>Difficulté du formulaire</label>
    <select name=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" seected>Sélectionner une option</option>
        <option value=\"FACILE\">Facile</option>
        <option value=\"MOYEN\">Moyen</option>
        <option value=\"DIFFICILE\">Difficile</option>
    </select>

    <!-- Send button -->
    <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

</form>
<!-- Default form contact -->

  <!-- Content here -->
=======
<div class=\"view\">
    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond3.gif"), "html", null, true);
        echo "\" class=\"fond\">
    <div class=\"container border border-primary rem-5\">

    <!-- Default form contact -->
    <form class=\"text-center border border-light p-5\" action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrateur_ajout_formulaire");
        echo "\">

        <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

        <!-- Nom -->
        <input type=\"text\" name=\"titre\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

        <!-- Themes -->
        <label>Thémes du formulaire</label>
        <select name=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
            <option value=\"\" selected>Sélectionner une option</option>
            <option value=\"MATH\">Mathématique</option>
            <option value=\"FRANCAIS\">Français</option>
            <option value=\"HISTOIRE\">Histoire</option>
            <option value=\"GEO\">Géographie</option>
            <option value=\"AUTRES\">Autres</option>
        </select>

        <!-- Autres -->
        <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

        <!-- Difficulté -->
        <label>Difficulté du formulaire</label>
        <select name=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
            <option value=\"\" seected>Sélectionner une option</option>
            <option value=\"FACILE\">Facile</option>
            <option value=\"MOYEN\">Moyen</option>
            <option value=\"DIFFICILE\">Difficile</option>
        </select>

        <!-- Send button -->
        <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

    </form>
    <!-- Default form contact -->

    <!-- Content here -->
    </div>
>>>>>>> fc3c48cb1f8e86be664608112f125c37b5b7303f
</div>
";
        
        $__internal_54d757e8d6683bb909d1d1cc821896317203a903d5720d1fd51c67877ffbd46a->leave($__internal_54d757e8d6683bb909d1d1cc821896317203a903d5720d1fd51c67877ffbd46a_prof);

        
        $__internal_955fce219a34520e448b1307cb5e8d735cfd692fd448daedcc6a969b65039f41->leave($__internal_955fce219a34520e448b1307cb5e8d735cfd692fd448daedcc6a969b65039f41_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c932b094b9d22cf3afcf74fc08a0be7e9ac55df7fdf00ed8ed344fd47e444a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c932b094b9d22cf3afcf74fc08a0be7e9ac55df7fdf00ed8ed344fd47e444a12->enter($__internal_c932b094b9d22cf3afcf74fc08a0be7e9ac55df7fdf00ed8ed344fd47e444a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8de388f55b5272bff0ce54db75939525e60fa497a3123938f9ca97f8f8d4b9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de388f55b5272bff0ce54db75939525e60fa497a3123938f9ca97f8f8d4b9e5->enter($__internal_8de388f55b5272bff0ce54db75939525e60fa497a3123938f9ca97f8f8d4b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_8de388f55b5272bff0ce54db75939525e60fa497a3123938f9ca97f8f8d4b9e5->leave($__internal_8de388f55b5272bff0ce54db75939525e60fa497a3123938f9ca97f8f8d4b9e5_prof);

        
        $__internal_c932b094b9d22cf3afcf74fc08a0be7e9ac55df7fdf00ed8ed344fd47e444a12->leave($__internal_c932b094b9d22cf3afcf74fc08a0be7e9ac55df7fdf00ed8ed344fd47e444a12_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Administrateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 95,  165 => 94,  156 => 93,  105 => 51,  98 => 47,  56 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
<<<<<<< HEAD
<div class=\"container border border-primary rem-5\">

<!-- Default form contact -->
<form class=\"text-center border border-light p-5\" action=\"{{ path('administrateur_ajout_formulaire') }}\">

    <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

    <!-- Nom -->
    <input type=\"text\" name=\"titre\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

    <!-- Themes -->
    <label>Thémes du formulaire</label>
    <select name=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" selected>Sélectionner une option</option>
        <option value=\"MATH\">Mathématique</option>
        <option value=\"FRANCAIS\">Français</option>
        <option value=\"HISTOIRE\">Histoire</option>
        <option value=\"GEO\">Géographie</option>
        <option value=\"AUTRES\">Autres</option>
    </select>

     <!-- Autres -->
    <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

    <!-- Difficulté -->
    <label>Difficulté du formulaire</label>
    <select name=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" seected>Sélectionner une option</option>
        <option value=\"FACILE\">Facile</option>
        <option value=\"MOYEN\">Moyen</option>
        <option value=\"DIFFICILE\">Difficile</option>
    </select>

    <!-- Send button -->
    <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

</form>
<!-- Default form contact -->

  <!-- Content here -->
=======
<div class=\"view\">
    <img src=\"{{  asset('img/fond3.gif') }}\" class=\"fond\">
    <div class=\"container border border-primary rem-5\">

    <!-- Default form contact -->
    <form class=\"text-center border border-light p-5\" action=\"{{ path('administrateur_ajout_formulaire') }}\">

        <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

        <!-- Nom -->
        <input type=\"text\" name=\"titre\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

        <!-- Themes -->
        <label>Thémes du formulaire</label>
        <select name=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
            <option value=\"\" selected>Sélectionner une option</option>
            <option value=\"MATH\">Mathématique</option>
            <option value=\"FRANCAIS\">Français</option>
            <option value=\"HISTOIRE\">Histoire</option>
            <option value=\"GEO\">Géographie</option>
            <option value=\"AUTRES\">Autres</option>
        </select>

        <!-- Autres -->
        <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

        <!-- Difficulté -->
        <label>Difficulté du formulaire</label>
        <select name=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
            <option value=\"\" seected>Sélectionner une option</option>
            <option value=\"FACILE\">Facile</option>
            <option value=\"MOYEN\">Moyen</option>
            <option value=\"DIFFICILE\">Difficile</option>
        </select>

        <!-- Send button -->
        <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

    </form>
    <!-- Default form contact -->

    <!-- Content here -->
    </div>
>>>>>>> fc3c48cb1f8e86be664608112f125c37b5b7303f
</div>
{% endblock %}

{% block footer %}
{{ parent() }}
 <script src=\"{{  asset('js/administrateur.js') }}\"></script>
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
