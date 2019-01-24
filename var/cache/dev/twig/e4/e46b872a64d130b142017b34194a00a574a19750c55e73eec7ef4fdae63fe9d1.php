<?php

/* ATCAppBundle::index.html.twig */
class __TwigTemplate_b67aaa431887f29d57969301fe47890dd0ba186f6396f9b00fbcaa8720efa3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'modaux' => array($this, 'block_modaux'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_152a659dc92e433e71465d01755ec81cf923ae6afb7025d4dac5cb4963605150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152a659dc92e433e71465d01755ec81cf923ae6afb7025d4dac5cb4963605150->enter($__internal_152a659dc92e433e71465d01755ec81cf923ae6afb7025d4dac5cb4963605150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        $__internal_577f92d5097b97d659fb1db0b557ce334fa037a598b96254c2ecc986a0c33370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577f92d5097b97d659fb1db0b557ce334fa037a598b96254c2ecc986a0c33370->enter($__internal_577f92d5097b97d659fb1db0b557ce334fa037a598b96254c2ecc986a0c33370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('modaux', $context, $blocks);
        
        $__internal_152a659dc92e433e71465d01755ec81cf923ae6afb7025d4dac5cb4963605150->leave($__internal_152a659dc92e433e71465d01755ec81cf923ae6afb7025d4dac5cb4963605150_prof);

        
        $__internal_577f92d5097b97d659fb1db0b557ce334fa037a598b96254c2ecc986a0c33370->leave($__internal_577f92d5097b97d659fb1db0b557ce334fa037a598b96254c2ecc986a0c33370_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_865a0d3652845b8f78a0bde203fdfaccd86d8c49ba380162c68e0d9cb25ddeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865a0d3652845b8f78a0bde203fdfaccd86d8c49ba380162c68e0d9cb25ddeb1->enter($__internal_865a0d3652845b8f78a0bde203fdfaccd86d8c49ba380162c68e0d9cb25ddeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_87457d1fc33c6c380b94871d43ee1754cd9491c25c9f1585c577db8ae1d3d1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87457d1fc33c6c380b94871d43ee1754cd9491c25c9f1585c577db8ae1d3d1dd->enter($__internal_87457d1fc33c6c380b94871d43ee1754cd9491c25c9f1585c577db8ae1d3d1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle::header.html.twig");
        echo "
";
        
        $__internal_87457d1fc33c6c380b94871d43ee1754cd9491c25c9f1585c577db8ae1d3d1dd->leave($__internal_87457d1fc33c6c380b94871d43ee1754cd9491c25c9f1585c577db8ae1d3d1dd_prof);

        
        $__internal_865a0d3652845b8f78a0bde203fdfaccd86d8c49ba380162c68e0d9cb25ddeb1->leave($__internal_865a0d3652845b8f78a0bde203fdfaccd86d8c49ba380162c68e0d9cb25ddeb1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc4b85f8c0dbd6e5c5cc3c3c4a96097916a047a28c5ba0463799be4f3c6a735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc4b85f8c0dbd6e5c5cc3c3c4a96097916a047a28c5ba0463799be4f3c6a735->enter($__internal_dcc4b85f8c0dbd6e5c5cc3c3c4a96097916a047a28c5ba0463799be4f3c6a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_804326e842b36d47f0f95e7dbb58449de24332d051bb417f62a6221cee895d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804326e842b36d47f0f95e7dbb58449de24332d051bb417f62a6221cee895d3c->enter($__internal_804326e842b36d47f0f95e7dbb58449de24332d051bb417f62a6221cee895d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <!-- Full Page Intro -->
  <div class=\"view\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond3.gif"), "html", null, true);
        echo "\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <h1 class=\"display-3 mb-5\">
          <strong>Lud'ile Quiz</strong>
        </h1>

        <!-- Time Counter -->
        <p id=\"time-counter\" class=\"border border-light my-4\"></p>


        <h4 class=\"mb-4\">
          <strong>Bienvenue sur l'ile du Quiz Ludique. </strong>
        </h4>

        <h4 class=\"mb-4 d-none d-md-block\">
          <strong>Testez vos connaissances et devenez le meilleur !</strong>
        </h4>

        <a  id =\"questionnaire2\" href=\"#\" class=\"btn btn-outline-white btn-lg\" data-toggle=\"modal\" data-target=\"#QuestionnaireModal\">Lancer le Lud'ile Quiz 
          <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
        
        
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
";
        
        $__internal_804326e842b36d47f0f95e7dbb58449de24332d051bb417f62a6221cee895d3c->leave($__internal_804326e842b36d47f0f95e7dbb58449de24332d051bb417f62a6221cee895d3c_prof);

        
        $__internal_dcc4b85f8c0dbd6e5c5cc3c3c4a96097916a047a28c5ba0463799be4f3c6a735->leave($__internal_dcc4b85f8c0dbd6e5c5cc3c3c4a96097916a047a28c5ba0463799be4f3c6a735_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8ad4b83aa6d4d2bd0fc8947b661c0f5a7ff4c21f8855f2f135485bfa7a4ce4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad4b83aa6d4d2bd0fc8947b661c0f5a7ff4c21f8855f2f135485bfa7a4ce4d5->enter($__internal_8ad4b83aa6d4d2bd0fc8947b661c0f5a7ff4c21f8855f2f135485bfa7a4ce4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a4ff5c6e65f44a83afbfa9c3dec6f40d398c7de70af45d4d6d45e15338dcbdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ff5c6e65f44a83afbfa9c3dec6f40d398c7de70af45d4d6d45e15338dcbdbe->enter($__internal_a4ff5c6e65f44a83afbfa9c3dec6f40d398c7de70af45d4d6d45e15338dcbdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle::footer.html.twig");
        echo "
";
        
        $__internal_a4ff5c6e65f44a83afbfa9c3dec6f40d398c7de70af45d4d6d45e15338dcbdbe->leave($__internal_a4ff5c6e65f44a83afbfa9c3dec6f40d398c7de70af45d4d6d45e15338dcbdbe_prof);

        
        $__internal_8ad4b83aa6d4d2bd0fc8947b661c0f5a7ff4c21f8855f2f135485bfa7a4ce4d5->leave($__internal_8ad4b83aa6d4d2bd0fc8947b661c0f5a7ff4c21f8855f2f135485bfa7a4ce4d5_prof);

    }

    // line 54
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_a4777ce27c9b7cc40916338a90bebfa9d6902761dd3eae1422c91a378a47426e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4777ce27c9b7cc40916338a90bebfa9d6902761dd3eae1422c91a378a47426e->enter($__internal_a4777ce27c9b7cc40916338a90bebfa9d6902761dd3eae1422c91a378a47426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_5b2a4892c65a9330d74c29639bd3f221d2b5405c67367b1721be7c056df6ace0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2a4892c65a9330d74c29639bd3f221d2b5405c67367b1721be7c056df6ace0->enter($__internal_5b2a4892c65a9330d74c29639bd3f221d2b5405c67367b1721be7c056df6ace0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 55
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle::login.html.twig");
        echo "
";
        
        $__internal_5b2a4892c65a9330d74c29639bd3f221d2b5405c67367b1721be7c056df6ace0->leave($__internal_5b2a4892c65a9330d74c29639bd3f221d2b5405c67367b1721be7c056df6ace0_prof);

        
        $__internal_a4777ce27c9b7cc40916338a90bebfa9d6902761dd3eae1422c91a378a47426e->leave($__internal_a4777ce27c9b7cc40916338a90bebfa9d6902761dd3eae1422c91a378a47426e_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  163 => 54,  150 => 51,  141 => 50,  92 => 10,  88 => 8,  79 => 7,  67 => 4,  58 => 3,  48 => 54,  45 => 53,  43 => 50,  40 => 49,  38 => 7,  35 => 6,  33 => 3,  29 => 1,);
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

{% block header %}
{{ include(\"ATCAppBundle::header.html.twig\") }}
{% endblock %}

{% block body %}
  <!-- Full Page Intro -->
  <div class=\"view\">
    <img src=\"{{  asset('img/fond3.gif') }}\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <h1 class=\"display-3 mb-5\">
          <strong>Lud'ile Quiz</strong>
        </h1>

        <!-- Time Counter -->
        <p id=\"time-counter\" class=\"border border-light my-4\"></p>


        <h4 class=\"mb-4\">
          <strong>Bienvenue sur l'ile du Quiz Ludique. </strong>
        </h4>

        <h4 class=\"mb-4 d-none d-md-block\">
          <strong>Testez vos connaissances et devenez le meilleur !</strong>
        </h4>

        <a  id =\"questionnaire2\" href=\"#\" class=\"btn btn-outline-white btn-lg\" data-toggle=\"modal\" data-target=\"#QuestionnaireModal\">Lancer le Lud'ile Quiz 
          <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
        
        
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
{% endblock %}

{% block footer %}
  {{ include(\"ATCAppBundle::footer.html.twig\") }}
{% endblock  %}

{% block modaux %}
 {{ include(\"ATCAppBundle::login.html.twig\") }}
{% endblock %}
", "ATCAppBundle::index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/index.html.twig");
    }
}
