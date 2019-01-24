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
        $__internal_395c4f3b58e81902d35e10a8e8e67989e355937abe47d7cc55746160139d91d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395c4f3b58e81902d35e10a8e8e67989e355937abe47d7cc55746160139d91d5->enter($__internal_395c4f3b58e81902d35e10a8e8e67989e355937abe47d7cc55746160139d91d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $__internal_856276c4439371daf477a9980cdd34f742aed2a7c401b686b337660e0a9b6f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856276c4439371daf477a9980cdd34f742aed2a7c401b686b337660e0a9b6f4f->enter($__internal_856276c4439371daf477a9980cdd34f742aed2a7c401b686b337660e0a9b6f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Administrateur:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395c4f3b58e81902d35e10a8e8e67989e355937abe47d7cc55746160139d91d5->leave($__internal_395c4f3b58e81902d35e10a8e8e67989e355937abe47d7cc55746160139d91d5_prof);

        
        $__internal_856276c4439371daf477a9980cdd34f742aed2a7c401b686b337660e0a9b6f4f->leave($__internal_856276c4439371daf477a9980cdd34f742aed2a7c401b686b337660e0a9b6f4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed26989cfea3e0d345217f9c4669a320021fd3d329ee86af3f92ad3a3b5da72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed26989cfea3e0d345217f9c4669a320021fd3d329ee86af3f92ad3a3b5da72b->enter($__internal_ed26989cfea3e0d345217f9c4669a320021fd3d329ee86af3f92ad3a3b5da72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89cbd672d143adefedbb4dca104e41fdef258a6dfed0b2a95ab9870fc8526bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89cbd672d143adefedbb4dca104e41fdef258a6dfed0b2a95ab9870fc8526bf5->enter($__internal_89cbd672d143adefedbb4dca104e41fdef258a6dfed0b2a95ab9870fc8526bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89cbd672d143adefedbb4dca104e41fdef258a6dfed0b2a95ab9870fc8526bf5->leave($__internal_89cbd672d143adefedbb4dca104e41fdef258a6dfed0b2a95ab9870fc8526bf5_prof);

        
        $__internal_ed26989cfea3e0d345217f9c4669a320021fd3d329ee86af3f92ad3a3b5da72b->leave($__internal_ed26989cfea3e0d345217f9c4669a320021fd3d329ee86af3f92ad3a3b5da72b_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dda4753571fc3fc4d97730ed8dfc5759d5f44ec91cf048b7898f2bd69cd744dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda4753571fc3fc4d97730ed8dfc5759d5f44ec91cf048b7898f2bd69cd744dd->enter($__internal_dda4753571fc3fc4d97730ed8dfc5759d5f44ec91cf048b7898f2bd69cd744dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6780361aed344f8d131cf70b9ab6bacbf232981d022935ddde9cdcf74910502a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6780361aed344f8d131cf70b9ab6bacbf232981d022935ddde9cdcf74910502a->enter($__internal_6780361aed344f8d131cf70b9ab6bacbf232981d022935ddde9cdcf74910502a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/administrateur.js"), "html", null, true);
        echo "\"></script>
 ";
        
        $__internal_6780361aed344f8d131cf70b9ab6bacbf232981d022935ddde9cdcf74910502a->leave($__internal_6780361aed344f8d131cf70b9ab6bacbf232981d022935ddde9cdcf74910502a_prof);

        
        $__internal_dda4753571fc3fc4d97730ed8dfc5759d5f44ec91cf048b7898f2bd69cd744dd->leave($__internal_dda4753571fc3fc4d97730ed8dfc5759d5f44ec91cf048b7898f2bd69cd744dd_prof);

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
 {% endblock %}", "ATCAppBundle:Administrateur:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Administrateur/index.html.twig");
    }
}
