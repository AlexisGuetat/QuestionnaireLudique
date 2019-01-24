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
        $__internal_32c0d1a2dcbbc93521b04ce3441821a28768207dc07ba9d31ce7c510aa153238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c0d1a2dcbbc93521b04ce3441821a28768207dc07ba9d31ce7c510aa153238->enter($__internal_32c0d1a2dcbbc93521b04ce3441821a28768207dc07ba9d31ce7c510aa153238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_4d700ca61a3d76e913237812089adc5f6a6ae659554cf6a7d9c1793be3efdcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d700ca61a3d76e913237812089adc5f6a6ae659554cf6a7d9c1793be3efdcb6->enter($__internal_4d700ca61a3d76e913237812089adc5f6a6ae659554cf6a7d9c1793be3efdcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c0d1a2dcbbc93521b04ce3441821a28768207dc07ba9d31ce7c510aa153238->leave($__internal_32c0d1a2dcbbc93521b04ce3441821a28768207dc07ba9d31ce7c510aa153238_prof);

        
        $__internal_4d700ca61a3d76e913237812089adc5f6a6ae659554cf6a7d9c1793be3efdcb6->leave($__internal_4d700ca61a3d76e913237812089adc5f6a6ae659554cf6a7d9c1793be3efdcb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_deec7c4b77f8c5e487280daeaf78c8c8073ef040d3d0e2ddb3adc8d599daca7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deec7c4b77f8c5e487280daeaf78c8c8073ef040d3d0e2ddb3adc8d599daca7c->enter($__internal_deec7c4b77f8c5e487280daeaf78c8c8073ef040d3d0e2ddb3adc8d599daca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a2d8d64cd566f2457c3c09a35265456d9fe94ee04d845859d18412c11f2f20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2d8d64cd566f2457c3c09a35265456d9fe94ee04d845859d18412c11f2f20c->enter($__internal_2a2d8d64cd566f2457c3c09a35265456d9fe94ee04d845859d18412c11f2f20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"view\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond3.gif"), "html", null, true);
        echo "\" class=\"fond\">
    <div class=\"container border border-primary rem-5\">

    <!-- Default form contact -->
    <form class=\"text-center border border-light p-5\" action=\"";
        // line 9
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
</div>
";
        
        $__internal_2a2d8d64cd566f2457c3c09a35265456d9fe94ee04d845859d18412c11f2f20c->leave($__internal_2a2d8d64cd566f2457c3c09a35265456d9fe94ee04d845859d18412c11f2f20c_prof);

        
        $__internal_deec7c4b77f8c5e487280daeaf78c8c8073ef040d3d0e2ddb3adc8d599daca7c->leave($__internal_deec7c4b77f8c5e487280daeaf78c8c8073ef040d3d0e2ddb3adc8d599daca7c_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9a4497894731199274a58e30610d0651b1ebcb186bc953d1fa18995e916b19da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4497894731199274a58e30610d0651b1ebcb186bc953d1fa18995e916b19da->enter($__internal_9a4497894731199274a58e30610d0651b1ebcb186bc953d1fa18995e916b19da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ddc1d2030a1db432774d0a73623059fa8673e65578661cc473c1f07d0a46d62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc1d2030a1db432774d0a73623059fa8673e65578661cc473c1f07d0a46d62c->enter($__internal_ddc1d2030a1db432774d0a73623059fa8673e65578661cc473c1f07d0a46d62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_ddc1d2030a1db432774d0a73623059fa8673e65578661cc473c1f07d0a46d62c->leave($__internal_ddc1d2030a1db432774d0a73623059fa8673e65578661cc473c1f07d0a46d62c_prof);

        
        $__internal_9a4497894731199274a58e30610d0651b1ebcb186bc953d1fa18995e916b19da->leave($__internal_9a4497894731199274a58e30610d0651b1ebcb186bc953d1fa18995e916b19da_prof);

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
        return array (  123 => 52,  119 => 51,  110 => 50,  60 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
</div>
{% endblock %}

{% block footer %}
{{ parent() }}
 <script src=\"{{  asset('js/administrateur.js') }}\"></script>
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
