<?php

/* ATCAppBundle::login.html.twig */
class __TwigTemplate_24b02f257ed4cf939509557ab18cd1ccf00e62d846098f7ecf5f4518c21a174c extends Twig_Template
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
        $__internal_604a55aaaf904295fea230fa9f8e2df4e067e447db3bb19a758a3ea6361d1911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604a55aaaf904295fea230fa9f8e2df4e067e447db3bb19a758a3ea6361d1911->enter($__internal_604a55aaaf904295fea230fa9f8e2df4e067e447db3bb19a758a3ea6361d1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::login.html.twig"));

        $__internal_3eb96e5b941ebf651bcc019a1fea9e2d25bf04eff38427b0cff8bce1833ea5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb96e5b941ebf651bcc019a1fea9e2d25bf04eff38427b0cff8bce1833ea5df->enter($__internal_3eb96e5b941ebf651bcc019a1fea9e2d25bf04eff38427b0cff8bce1833ea5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::login.html.twig"));

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
        
        $__internal_604a55aaaf904295fea230fa9f8e2df4e067e447db3bb19a758a3ea6361d1911->leave($__internal_604a55aaaf904295fea230fa9f8e2df4e067e447db3bb19a758a3ea6361d1911_prof);

        
        $__internal_3eb96e5b941ebf651bcc019a1fea9e2d25bf04eff38427b0cff8bce1833ea5df->leave($__internal_3eb96e5b941ebf651bcc019a1fea9e2d25bf04eff38427b0cff8bce1833ea5df_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle::login.html.twig";
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
", "ATCAppBundle::login.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/login.html.twig");
    }
}
