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
        $__internal_a1b95f0d510201f644915bf0f5de2563844b70760ad3cbe67871dffa789d4c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b95f0d510201f644915bf0f5de2563844b70760ad3cbe67871dffa789d4c39->enter($__internal_a1b95f0d510201f644915bf0f5de2563844b70760ad3cbe67871dffa789d4c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_03cab06d090e6f8da4c77ad4da93adfca5f6fa80fee4978cd1ad90c17f57486f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cab06d090e6f8da4c77ad4da93adfca5f6fa80fee4978cd1ad90c17f57486f->enter($__internal_03cab06d090e6f8da4c77ad4da93adfca5f6fa80fee4978cd1ad90c17f57486f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1b95f0d510201f644915bf0f5de2563844b70760ad3cbe67871dffa789d4c39->leave($__internal_a1b95f0d510201f644915bf0f5de2563844b70760ad3cbe67871dffa789d4c39_prof);

        
        $__internal_03cab06d090e6f8da4c77ad4da93adfca5f6fa80fee4978cd1ad90c17f57486f->leave($__internal_03cab06d090e6f8da4c77ad4da93adfca5f6fa80fee4978cd1ad90c17f57486f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f90a507b132c9628eb22814ff6b054370362851bec268d87fe5b2f5c111e61fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90a507b132c9628eb22814ff6b054370362851bec268d87fe5b2f5c111e61fe->enter($__internal_f90a507b132c9628eb22814ff6b054370362851bec268d87fe5b2f5c111e61fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b62c1d67bc818ba7f355e4d470a9117779590a33eeefdd14f53beffdfa238456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62c1d67bc818ba7f355e4d470a9117779590a33eeefdd14f53beffdfa238456->enter($__internal_b62c1d67bc818ba7f355e4d470a9117779590a33eeefdd14f53beffdfa238456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b62c1d67bc818ba7f355e4d470a9117779590a33eeefdd14f53beffdfa238456->leave($__internal_b62c1d67bc818ba7f355e4d470a9117779590a33eeefdd14f53beffdfa238456_prof);

        
        $__internal_f90a507b132c9628eb22814ff6b054370362851bec268d87fe5b2f5c111e61fe->leave($__internal_f90a507b132c9628eb22814ff6b054370362851bec268d87fe5b2f5c111e61fe_prof);

    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5bf4f9f4462deb6ede1a16a527e2f24fdda5f0e10670c18d09406f7d9532efbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf4f9f4462deb6ede1a16a527e2f24fdda5f0e10670c18d09406f7d9532efbd->enter($__internal_5bf4f9f4462deb6ede1a16a527e2f24fdda5f0e10670c18d09406f7d9532efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f57c16abf7640c296df745c87b614b816d9781831adf06c90d07365e8fe0a349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57c16abf7640c296df745c87b614b816d9781831adf06c90d07365e8fe0a349->enter($__internal_f57c16abf7640c296df745c87b614b816d9781831adf06c90d07365e8fe0a349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 94
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_f57c16abf7640c296df745c87b614b816d9781831adf06c90d07365e8fe0a349->leave($__internal_f57c16abf7640c296df745c87b614b816d9781831adf06c90d07365e8fe0a349_prof);

        
        $__internal_5bf4f9f4462deb6ede1a16a527e2f24fdda5f0e10670c18d09406f7d9532efbd->leave($__internal_5bf4f9f4462deb6ede1a16a527e2f24fdda5f0e10670c18d09406f7d9532efbd_prof);

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
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
