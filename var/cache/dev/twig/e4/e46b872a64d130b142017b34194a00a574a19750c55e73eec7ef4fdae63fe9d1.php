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
        $__internal_38d6595137b5bf3f3a993674f7773fbae463164a484d9a0512df28ceaee177cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d6595137b5bf3f3a993674f7773fbae463164a484d9a0512df28ceaee177cf->enter($__internal_38d6595137b5bf3f3a993674f7773fbae463164a484d9a0512df28ceaee177cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        $__internal_f3a0e47a5a2860ba193d355a08d8d6be83ae332dfce467bbc2ca0947a7518319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a0e47a5a2860ba193d355a08d8d6be83ae332dfce467bbc2ca0947a7518319->enter($__internal_f3a0e47a5a2860ba193d355a08d8d6be83ae332dfce467bbc2ca0947a7518319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

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
        
        $__internal_38d6595137b5bf3f3a993674f7773fbae463164a484d9a0512df28ceaee177cf->leave($__internal_38d6595137b5bf3f3a993674f7773fbae463164a484d9a0512df28ceaee177cf_prof);

        
        $__internal_f3a0e47a5a2860ba193d355a08d8d6be83ae332dfce467bbc2ca0947a7518319->leave($__internal_f3a0e47a5a2860ba193d355a08d8d6be83ae332dfce467bbc2ca0947a7518319_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_74657d140de6afcfb0fc07a877fa811952d93cfdf4d18e5751f3f291a922f63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74657d140de6afcfb0fc07a877fa811952d93cfdf4d18e5751f3f291a922f63f->enter($__internal_74657d140de6afcfb0fc07a877fa811952d93cfdf4d18e5751f3f291a922f63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_804a66380727f96e769f091cf6c914869a69dd06b25c80cf62d83479da80e801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a66380727f96e769f091cf6c914869a69dd06b25c80cf62d83479da80e801->enter($__internal_804a66380727f96e769f091cf6c914869a69dd06b25c80cf62d83479da80e801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle::header.html.twig");
        echo "
";
        
        $__internal_804a66380727f96e769f091cf6c914869a69dd06b25c80cf62d83479da80e801->leave($__internal_804a66380727f96e769f091cf6c914869a69dd06b25c80cf62d83479da80e801_prof);

        
        $__internal_74657d140de6afcfb0fc07a877fa811952d93cfdf4d18e5751f3f291a922f63f->leave($__internal_74657d140de6afcfb0fc07a877fa811952d93cfdf4d18e5751f3f291a922f63f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6300e097d827822e3a2ddeabdcdd4597c63c30a0245faddb6d20a46e74d3b20a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6300e097d827822e3a2ddeabdcdd4597c63c30a0245faddb6d20a46e74d3b20a->enter($__internal_6300e097d827822e3a2ddeabdcdd4597c63c30a0245faddb6d20a46e74d3b20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_455c3920cbb6e0766244767fb609cfe5547e63e67c501852863e73abc402c89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c3920cbb6e0766244767fb609cfe5547e63e67c501852863e73abc402c89b->enter($__internal_455c3920cbb6e0766244767fb609cfe5547e63e67c501852863e73abc402c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_455c3920cbb6e0766244767fb609cfe5547e63e67c501852863e73abc402c89b->leave($__internal_455c3920cbb6e0766244767fb609cfe5547e63e67c501852863e73abc402c89b_prof);

        
        $__internal_6300e097d827822e3a2ddeabdcdd4597c63c30a0245faddb6d20a46e74d3b20a->leave($__internal_6300e097d827822e3a2ddeabdcdd4597c63c30a0245faddb6d20a46e74d3b20a_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_75c42026a0273ce4f66e8ef34138b3e51c35e50d9d014d4676fedb57702cbf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c42026a0273ce4f66e8ef34138b3e51c35e50d9d014d4676fedb57702cbf45->enter($__internal_75c42026a0273ce4f66e8ef34138b3e51c35e50d9d014d4676fedb57702cbf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6de08f102c29402c11700127f3201b3da96cc2668d4913206eafb7e303bee66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de08f102c29402c11700127f3201b3da96cc2668d4913206eafb7e303bee66c->enter($__internal_6de08f102c29402c11700127f3201b3da96cc2668d4913206eafb7e303bee66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle::footer.html.twig");
        echo "
";
        
        $__internal_6de08f102c29402c11700127f3201b3da96cc2668d4913206eafb7e303bee66c->leave($__internal_6de08f102c29402c11700127f3201b3da96cc2668d4913206eafb7e303bee66c_prof);

        
        $__internal_75c42026a0273ce4f66e8ef34138b3e51c35e50d9d014d4676fedb57702cbf45->leave($__internal_75c42026a0273ce4f66e8ef34138b3e51c35e50d9d014d4676fedb57702cbf45_prof);

    }

    // line 54
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_b888929cb44af9d04c57dec97bdbd0d6faf228a7d56e4fc99245515d17559fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b888929cb44af9d04c57dec97bdbd0d6faf228a7d56e4fc99245515d17559fe3->enter($__internal_b888929cb44af9d04c57dec97bdbd0d6faf228a7d56e4fc99245515d17559fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_7301a70427448f1eecb15a06d2bd8eb108968bd6c3fed6f8d4237807a81cfe6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7301a70427448f1eecb15a06d2bd8eb108968bd6c3fed6f8d4237807a81cfe6a->enter($__internal_7301a70427448f1eecb15a06d2bd8eb108968bd6c3fed6f8d4237807a81cfe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 55
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle::login.html.twig");
        echo "
";
        
        $__internal_7301a70427448f1eecb15a06d2bd8eb108968bd6c3fed6f8d4237807a81cfe6a->leave($__internal_7301a70427448f1eecb15a06d2bd8eb108968bd6c3fed6f8d4237807a81cfe6a_prof);

        
        $__internal_b888929cb44af9d04c57dec97bdbd0d6faf228a7d56e4fc99245515d17559fe3->leave($__internal_b888929cb44af9d04c57dec97bdbd0d6faf228a7d56e4fc99245515d17559fe3_prof);

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
