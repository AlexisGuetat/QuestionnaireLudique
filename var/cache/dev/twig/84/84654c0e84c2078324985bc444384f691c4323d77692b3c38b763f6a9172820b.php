<?php

/* ATCAppBundle:Administrateur:index.html.twig */
class __TwigTemplate_2660a7a867c65f0739b8dd0e1e9b59d493f674e2f99d3ae7323280a00fe165d8 extends Twig_Template
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
        $__internal_44fa3487e60c487d295d02a3d018b831c46fc675dfeef23af4aa3b7d48c584cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fa3487e60c487d295d02a3d018b831c46fc675dfeef23af4aa3b7d48c584cb->enter($__internal_44fa3487e60c487d295d02a3d018b831c46fc675dfeef23af4aa3b7d48c584cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_c445df6a8584277980bb0aab2d92956b9a812be8c19d7a7dff81ae111ff14eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c445df6a8584277980bb0aab2d92956b9a812be8c19d7a7dff81ae111ff14eae->enter($__internal_c445df6a8584277980bb0aab2d92956b9a812be8c19d7a7dff81ae111ff14eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44fa3487e60c487d295d02a3d018b831c46fc675dfeef23af4aa3b7d48c584cb->leave($__internal_44fa3487e60c487d295d02a3d018b831c46fc675dfeef23af4aa3b7d48c584cb_prof);

        
        $__internal_c445df6a8584277980bb0aab2d92956b9a812be8c19d7a7dff81ae111ff14eae->leave($__internal_c445df6a8584277980bb0aab2d92956b9a812be8c19d7a7dff81ae111ff14eae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e5b5d78abf73f628068416956736f615cb01f5eb837b6e9e6d590f97b1c6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e5b5d78abf73f628068416956736f615cb01f5eb837b6e9e6d590f97b1c6da->enter($__internal_d9e5b5d78abf73f628068416956736f615cb01f5eb837b6e9e6d590f97b1c6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9546c010e32d033386ca272d4191e00aef07fe46ae5b40d0c531ee13f6466c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9546c010e32d033386ca272d4191e00aef07fe46ae5b40d0c531ee13f6466c33->enter($__internal_9546c010e32d033386ca272d4191e00aef07fe46ae5b40d0c531ee13f6466c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container border border-primary rem-5\">

<!-- Default form contact -->
<form  method=\"post\" class=\"text-center border border-light p-5\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrateur_ajout_formulaire");
        echo "\">

    <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

    <!-- Nom -->
    <input type=\"text\" id=\"nom\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

    <!-- Themes -->
    <label>Thémes du formulaire</label>
    <select id=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" selected>Sélectionner une option</option>
        <option value=\"1\">Mathématique</option>
        <option value=\"2\">Français</option>
        <option value=\"3\">Histoire</option>
        <option value=\"4\">Géographie</option>
        <option value=\"4\">Autres</option>
    </select>

     <!-- Autres -->
    <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

    <!-- Difficulté -->
    <label>Difficulté du formulaire</label>
    <select id=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" seected>Sélectionner une option</option>
        <option value=\"1\">Facile</option>
        <option value=\"2\">Moyen</option>
        <option value=\"3\">Difficile</option>
    </select>

    <!-- Send button -->
    <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

</form>
<!-- Default form contact -->

  <!-- Content here -->
</div>
";
        
        $__internal_9546c010e32d033386ca272d4191e00aef07fe46ae5b40d0c531ee13f6466c33->leave($__internal_9546c010e32d033386ca272d4191e00aef07fe46ae5b40d0c531ee13f6466c33_prof);

        
        $__internal_d9e5b5d78abf73f628068416956736f615cb01f5eb837b6e9e6d590f97b1c6da->leave($__internal_d9e5b5d78abf73f628068416956736f615cb01f5eb837b6e9e6d590f97b1c6da_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_028ca2f812e139d61a88dafba59eee002f6a8e24461efde40591740a30dd5d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028ca2f812e139d61a88dafba59eee002f6a8e24461efde40591740a30dd5d83->enter($__internal_028ca2f812e139d61a88dafba59eee002f6a8e24461efde40591740a30dd5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_969367e3532055b535b3d5d4a506106b34b6ed2b0bcc0a0426628c064c98779a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969367e3532055b535b3d5d4a506106b34b6ed2b0bcc0a0426628c064c98779a->enter($__internal_969367e3532055b535b3d5d4a506106b34b6ed2b0bcc0a0426628c064c98779a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_969367e3532055b535b3d5d4a506106b34b6ed2b0bcc0a0426628c064c98779a->leave($__internal_969367e3532055b535b3d5d4a506106b34b6ed2b0bcc0a0426628c064c98779a_prof);

        
        $__internal_028ca2f812e139d61a88dafba59eee002f6a8e24461efde40591740a30dd5d83->leave($__internal_028ca2f812e139d61a88dafba59eee002f6a8e24461efde40591740a30dd5d83_prof);

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
        return array (  117 => 49,  113 => 48,  104 => 47,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
<div class=\"container border border-primary rem-5\">

<!-- Default form contact -->
<form  method=\"post\" class=\"text-center border border-light p-5\" action=\"{{ path('administrateur_ajout_formulaire') }}\">

    <p class=\"h4 mb-4\">Entrez les informations du formulaire</p>

    <!-- Nom -->
    <input type=\"text\" id=\"nom\" class=\"form-control mb-4\" placeholder=\"Titre du formulaire\" required=\"\">

    <!-- Themes -->
    <label>Thémes du formulaire</label>
    <select id=\"theme\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" selected>Sélectionner une option</option>
        <option value=\"1\">Mathématique</option>
        <option value=\"2\">Français</option>
        <option value=\"3\">Histoire</option>
        <option value=\"4\">Géographie</option>
        <option value=\"4\">Autres</option>
    </select>

     <!-- Autres -->
    <input type=\"text\" id=\"theme2\" class=\"form-control mb-4\" placeholder=\"Themes du formulaire\">

    <!-- Difficulté -->
    <label>Difficulté du formulaire</label>
    <select id=\"difficulte\" class=\"browser-default custom-select mb-4\" required=\"\">
        <option value=\"\" seected>Sélectionner une option</option>
        <option value=\"1\">Facile</option>
        <option value=\"2\">Moyen</option>
        <option value=\"3\">Difficile</option>
    </select>

    <!-- Send button -->
    <button class=\"btn btn-info btn-block\" type=\"submit\">Valider</button>

</form>
<!-- Default form contact -->

  <!-- Content here -->
</div>
{% endblock %}

{% block footer %}
{{ parent() }}
 <script src=\"{{  asset('js/administrateur.js') }}\"></script>
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
