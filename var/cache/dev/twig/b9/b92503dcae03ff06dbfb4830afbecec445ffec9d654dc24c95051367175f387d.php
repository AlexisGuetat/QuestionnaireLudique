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
        $__internal_a3b967dad1bb808d39959355e46a225fa43a4d4b3c0d3e58dbd01a9ff90a21d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b967dad1bb808d39959355e46a225fa43a4d4b3c0d3e58dbd01a9ff90a21d9->enter($__internal_a3b967dad1bb808d39959355e46a225fa43a4d4b3c0d3e58dbd01a9ff90a21d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_ed6519d27102b0a41d1d40d3747df479dd0b20f7f4aa9f89ade9c9ea5d99c274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6519d27102b0a41d1d40d3747df479dd0b20f7f4aa9f89ade9c9ea5d99c274->enter($__internal_ed6519d27102b0a41d1d40d3747df479dd0b20f7f4aa9f89ade9c9ea5d99c274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3b967dad1bb808d39959355e46a225fa43a4d4b3c0d3e58dbd01a9ff90a21d9->leave($__internal_a3b967dad1bb808d39959355e46a225fa43a4d4b3c0d3e58dbd01a9ff90a21d9_prof);

        
        $__internal_ed6519d27102b0a41d1d40d3747df479dd0b20f7f4aa9f89ade9c9ea5d99c274->leave($__internal_ed6519d27102b0a41d1d40d3747df479dd0b20f7f4aa9f89ade9c9ea5d99c274_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6041b82912b88ee076bbbda7c9ce7903dac89a356ad170832480fc8019ccbe97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6041b82912b88ee076bbbda7c9ce7903dac89a356ad170832480fc8019ccbe97->enter($__internal_6041b82912b88ee076bbbda7c9ce7903dac89a356ad170832480fc8019ccbe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_82dcc2e47fac17bb2007c7a84f2149be8806c2d942dea5786461d48e158604ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dcc2e47fac17bb2007c7a84f2149be8806c2d942dea5786461d48e158604ca->enter($__internal_82dcc2e47fac17bb2007c7a84f2149be8806c2d942dea5786461d48e158604ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container border border-primary rem-5\">

<!-- Default form contact -->
<form class=\"text-center border border-light p-5\" action=\"";
        // line 7
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
";
        
        $__internal_82dcc2e47fac17bb2007c7a84f2149be8806c2d942dea5786461d48e158604ca->leave($__internal_82dcc2e47fac17bb2007c7a84f2149be8806c2d942dea5786461d48e158604ca_prof);

        
        $__internal_6041b82912b88ee076bbbda7c9ce7903dac89a356ad170832480fc8019ccbe97->leave($__internal_6041b82912b88ee076bbbda7c9ce7903dac89a356ad170832480fc8019ccbe97_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b3becc81ebdbecd8135ee421ab082b212c6b53b836659e3b9cccd1d119850b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3becc81ebdbecd8135ee421ab082b212c6b53b836659e3b9cccd1d119850b19->enter($__internal_b3becc81ebdbecd8135ee421ab082b212c6b53b836659e3b9cccd1d119850b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_34a4f646032aa97c3653da37953cad6a9df816fa6b2f7e555f8ec488740286ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a4f646032aa97c3653da37953cad6a9df816fa6b2f7e555f8ec488740286ea->enter($__internal_34a4f646032aa97c3653da37953cad6a9df816fa6b2f7e555f8ec488740286ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_34a4f646032aa97c3653da37953cad6a9df816fa6b2f7e555f8ec488740286ea->leave($__internal_34a4f646032aa97c3653da37953cad6a9df816fa6b2f7e555f8ec488740286ea_prof);

        
        $__internal_b3becc81ebdbecd8135ee421ab082b212c6b53b836659e3b9cccd1d119850b19->leave($__internal_b3becc81ebdbecd8135ee421ab082b212c6b53b836659e3b9cccd1d119850b19_prof);

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
{% endblock %}

{% block footer %}
{{ parent() }}
 <script src=\"{{  asset('js/administrateur.js') }}\"></script>
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
