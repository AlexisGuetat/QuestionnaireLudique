<?php

/* ATCAppBundle:Default:login.html.twig */
class __TwigTemplate_03efdbd51bd80dbc3993bc00f0319432a282137d708e2b8973a2a196638c4ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16f106dc782220b0d0c1fb4a528388960dd97a6a82a72da222ff0d0ccc05399d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f106dc782220b0d0c1fb4a528388960dd97a6a82a72da222ff0d0ccc05399d->enter($__internal_16f106dc782220b0d0c1fb4a528388960dd97a6a82a72da222ff0d0ccc05399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:login.html.twig"));

        $__internal_5a85fc4cdce25c14cfc24de622c8880962119e000056b028a367baa08138b99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a85fc4cdce25c14cfc24de622c8880962119e000056b028a367baa08138b99f->enter($__internal_5a85fc4cdce25c14cfc24de622c8880962119e000056b028a367baa08138b99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:login.html.twig"));

        // line 1
        echo "
<!-- Modal -->
<!--Modal: Login with Avatar Form-->
<div class=\"modal fade\" id=\"QuestionnaireModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog cascading-modal modal-avatar modal-sm\" role=\"document\">
    <!--Content-->
    <div class=\"modal-content\">

      <!--Header-->
      <div class=\"modal-header\">
        <img src=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/aventurier.gif"), "html", null, true);
        echo "\" alt=\"avatar\" class=\"rounded-circle img-responsive\">
      </div>
      <!--Body-->
      <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire");
        echo "\" >
        <div class=\"modal-body text-center mb-1\">

          <h5 class=\"mt-1 mb-2\">Bienvenue aventurier entrez votre pseudo.</h5>

          <div class=\"md-form ml-0 mr-0\">
            <input type=\"text\" name=\"pseudo\" class=\"form-control form-control-sm validate ml-0\">
            <label data-error=\"wrong\" data-success=\"right\" for=\"pseudo\" class=\"ml-0\"></label>
          </div>

          <div class=\"text-center mt-4\">
            <button class=\"btn btn-cyan mt-1\">Jouer<i class=\"fas fa-sign-in ml-1\"></i></button>
          </div>
        </div>
      </form>
    </div>
    <!--/.Content-->
  </div>
</div>
";
        
        $__internal_16f106dc782220b0d0c1fb4a528388960dd97a6a82a72da222ff0d0ccc05399d->leave($__internal_16f106dc782220b0d0c1fb4a528388960dd97a6a82a72da222ff0d0ccc05399d_prof);

        
        $__internal_5a85fc4cdce25c14cfc24de622c8880962119e000056b028a367baa08138b99f->leave($__internal_5a85fc4cdce25c14cfc24de622c8880962119e000056b028a367baa08138b99f_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!-- Modal -->
<!--Modal: Login with Avatar Form-->
<div class=\"modal fade\" id=\"QuestionnaireModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog cascading-modal modal-avatar modal-sm\" role=\"document\">
    <!--Content-->
    <div class=\"modal-content\">

      <!--Header-->
      <div class=\"modal-header\">
        <img src=\" {{asset('img/aventurier.gif') }}\" alt=\"avatar\" class=\"rounded-circle img-responsive\">
      </div>
      <!--Body-->
      <form action=\"{{ path('questionnaire') }}\" >
        <div class=\"modal-body text-center mb-1\">

          <h5 class=\"mt-1 mb-2\">Bienvenue aventurier entrez votre pseudo.</h5>

          <div class=\"md-form ml-0 mr-0\">
            <input type=\"text\" name=\"pseudo\" class=\"form-control form-control-sm validate ml-0\">
            <label data-error=\"wrong\" data-success=\"right\" for=\"pseudo\" class=\"ml-0\"></label>
          </div>

          <div class=\"text-center mt-4\">
            <button class=\"btn btn-cyan mt-1\">Jouer<i class=\"fas fa-sign-in ml-1\"></i></button>
          </div>
        </div>
      </form>
    </div>
    <!--/.Content-->
  </div>
</div>
", "ATCAppBundle:Default:login.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Default/login.html.twig");
    }
}
