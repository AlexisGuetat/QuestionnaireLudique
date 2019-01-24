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
        $__internal_2e7f20e8958914105e17142e00514dfd95ea59f70dad9f3a8e4a54f3dfd2d8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7f20e8958914105e17142e00514dfd95ea59f70dad9f3a8e4a54f3dfd2d8ba->enter($__internal_2e7f20e8958914105e17142e00514dfd95ea59f70dad9f3a8e4a54f3dfd2d8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_9d9f32669c78636a24f088914ec9ec6ce95999bed473e1d9ac081162f5aafdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9f32669c78636a24f088914ec9ec6ce95999bed473e1d9ac081162f5aafdd2->enter($__internal_9d9f32669c78636a24f088914ec9ec6ce95999bed473e1d9ac081162f5aafdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7f20e8958914105e17142e00514dfd95ea59f70dad9f3a8e4a54f3dfd2d8ba->leave($__internal_2e7f20e8958914105e17142e00514dfd95ea59f70dad9f3a8e4a54f3dfd2d8ba_prof);

        
        $__internal_9d9f32669c78636a24f088914ec9ec6ce95999bed473e1d9ac081162f5aafdd2->leave($__internal_9d9f32669c78636a24f088914ec9ec6ce95999bed473e1d9ac081162f5aafdd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3877cd5b199b3c139ac07fda898de268366ce0538125e5c707fb98acaa6bd678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3877cd5b199b3c139ac07fda898de268366ce0538125e5c707fb98acaa6bd678->enter($__internal_3877cd5b199b3c139ac07fda898de268366ce0538125e5c707fb98acaa6bd678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26b08a3771034009c20204a8e657fd7fddabd366a868ea5561ac5bf3f801a420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b08a3771034009c20204a8e657fd7fddabd366a868ea5561ac5bf3f801a420->enter($__internal_26b08a3771034009c20204a8e657fd7fddabd366a868ea5561ac5bf3f801a420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"view\">
    
    <div class=\"container border border-primary rem-5\">
<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond3.gif"), "html", null, true);
        echo "\" class=\"fond\">
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
        
        $__internal_26b08a3771034009c20204a8e657fd7fddabd366a868ea5561ac5bf3f801a420->leave($__internal_26b08a3771034009c20204a8e657fd7fddabd366a868ea5561ac5bf3f801a420_prof);

        
        $__internal_3877cd5b199b3c139ac07fda898de268366ce0538125e5c707fb98acaa6bd678->leave($__internal_3877cd5b199b3c139ac07fda898de268366ce0538125e5c707fb98acaa6bd678_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1329716e713e499242e975bcacd435a1849ed28c6a8cbbcfef84a00afa972ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1329716e713e499242e975bcacd435a1849ed28c6a8cbbcfef84a00afa972ba6->enter($__internal_1329716e713e499242e975bcacd435a1849ed28c6a8cbbcfef84a00afa972ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a920e1a3fc7de8f93f9ed4c2829afc32bb53643720fe305b6ba9a5110e739b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a920e1a3fc7de8f93f9ed4c2829afc32bb53643720fe305b6ba9a5110e739b06->enter($__internal_a920e1a3fc7de8f93f9ed4c2829afc32bb53643720fe305b6ba9a5110e739b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_a920e1a3fc7de8f93f9ed4c2829afc32bb53643720fe305b6ba9a5110e739b06->leave($__internal_a920e1a3fc7de8f93f9ed4c2829afc32bb53643720fe305b6ba9a5110e739b06_prof);

        
        $__internal_1329716e713e499242e975bcacd435a1849ed28c6a8cbbcfef84a00afa972ba6->leave($__internal_1329716e713e499242e975bcacd435a1849ed28c6a8cbbcfef84a00afa972ba6_prof);

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
        return array (  123 => 52,  119 => 51,  110 => 50,  60 => 9,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    
    <div class=\"container border border-primary rem-5\">
<img src=\"{{  asset('img/fond3.gif') }}\" class=\"fond\">
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
