<?php

/* ATCAppBundle:Classement:index.html.twig */
class __TwigTemplate_0137b39e9b362d0dcc64b62e63991c04422fadd4c5a5b3afe2fef5c4206b888c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Classement:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ATCAppBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ebb4d12c70163fa40ffeea37bb2cb84121fae9d8b107f52af5d69be6facb010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebb4d12c70163fa40ffeea37bb2cb84121fae9d8b107f52af5d69be6facb010->enter($__internal_6ebb4d12c70163fa40ffeea37bb2cb84121fae9d8b107f52af5d69be6facb010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Classement:index.html.twig"));

        $__internal_443273a064b3586daeec14751725820eda24fea51bbb72054aefc83716c0e3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443273a064b3586daeec14751725820eda24fea51bbb72054aefc83716c0e3a7->enter($__internal_443273a064b3586daeec14751725820eda24fea51bbb72054aefc83716c0e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Classement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebb4d12c70163fa40ffeea37bb2cb84121fae9d8b107f52af5d69be6facb010->leave($__internal_6ebb4d12c70163fa40ffeea37bb2cb84121fae9d8b107f52af5d69be6facb010_prof);

        
        $__internal_443273a064b3586daeec14751725820eda24fea51bbb72054aefc83716c0e3a7->leave($__internal_443273a064b3586daeec14751725820eda24fea51bbb72054aefc83716c0e3a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d94448d5f4cba4a415c4d848055b1fa5710df04fcbcdf2cd9ce54c988bac7c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94448d5f4cba4a415c4d848055b1fa5710df04fcbcdf2cd9ce54c988bac7c74->enter($__internal_d94448d5f4cba4a415c4d848055b1fa5710df04fcbcdf2cd9ce54c988bac7c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_afaa0186d754a085f4d00c1f0d4052a85029dd0c60d6ce685f660b1d6095dfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaa0186d754a085f4d00c1f0d4052a85029dd0c60d6ce685f660b1d6095dfe6->enter($__internal_afaa0186d754a085f4d00c1f0d4052a85029dd0c60d6ce685f660b1d6095dfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- Table with panel -->
<div class=\"card card-cascade narrower\">

  <!--Card image-->
  <div class=\"view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center\">

    <div>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-th-large mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-columns mt-0\"></i>
      </button>
    </div>

    <a href=\"\" class=\"white-text mx-3\">Thème du classement</a>

    <div>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-pencil-alt mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"far fa-trash-alt mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-info-circle mt-0\"></i>
      </button>
    </div>

  </div>
  <!--/Card image-->

  <div class=\"px-4\">

    <div class=\"table-wrapper\">
      <!--Table-->
      <table class=\"table table-hover mb-0\">

        <!--Table head-->
        <thead>
          <tr>
            <th>
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox\">
              <label class=\"form-check-label\" for=\"checkbox\" class=\"mr-2 label-table\"></label>
            </th>
            <th class=\"th-lg\">
              <a>First Name
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Last Name
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox1\">
              <label class=\"form-check-label\" for=\"checkbox1\" class=\"label-table\"></label>
            </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox2\">
              <label class=\"form-check-label\" for=\"checkbox2\" class=\"label-table\"></label>
            </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox3\">
              <label class=\"form-check-label\" for=\"checkbox3\" class=\"label-table\"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox4\">
              <label class=\"form-check-label\" for=\"checkbox4\" class=\"label-table\"></label>
            </th>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox5\">
              <label class=\"form-check-label\" for=\"checkbox5\" class=\"label-table\"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
";
        
        $__internal_afaa0186d754a085f4d00c1f0d4052a85029dd0c60d6ce685f660b1d6095dfe6->leave($__internal_afaa0186d754a085f4d00c1f0d4052a85029dd0c60d6ce685f660b1d6095dfe6_prof);

        
        $__internal_d94448d5f4cba4a415c4d848055b1fa5710df04fcbcdf2cd9ce54c988bac7c74->leave($__internal_d94448d5f4cba4a415c4d848055b1fa5710df04fcbcdf2cd9ce54c988bac7c74_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Classement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<!-- Table with panel -->
<div class=\"card card-cascade narrower\">

  <!--Card image-->
  <div class=\"view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center\">

    <div>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-th-large mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-columns mt-0\"></i>
      </button>
    </div>

    <a href=\"\" class=\"white-text mx-3\">Thème du classement</a>

    <div>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-pencil-alt mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"far fa-trash-alt mt-0\"></i>
      </button>
      <button type=\"button\" class=\"btn btn-outline-white btn-rounded btn-sm px-2\">
        <i class=\"fas fa-info-circle mt-0\"></i>
      </button>
    </div>

  </div>
  <!--/Card image-->

  <div class=\"px-4\">

    <div class=\"table-wrapper\">
      <!--Table-->
      <table class=\"table table-hover mb-0\">

        <!--Table head-->
        <thead>
          <tr>
            <th>
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox\">
              <label class=\"form-check-label\" for=\"checkbox\" class=\"mr-2 label-table\"></label>
            </th>
            <th class=\"th-lg\">
              <a>First Name
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Last Name
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
            <th class=\"th-lg\">
              <a href=\"\">Username
                <i class=\"fas fa-sort ml-1\"></i>
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox1\">
              <label class=\"form-check-label\" for=\"checkbox1\" class=\"label-table\"></label>
            </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox2\">
              <label class=\"form-check-label\" for=\"checkbox2\" class=\"label-table\"></label>
            </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox3\">
              <label class=\"form-check-label\" for=\"checkbox3\" class=\"label-table\"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox4\">
              <label class=\"form-check-label\" for=\"checkbox4\" class=\"label-table\"></label>
            </th>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
          </tr>
          <tr>
            <th scope=\"row\">
              <input class=\"form-check-input\" type=\"checkbox\" id=\"checkbox5\">
              <label class=\"form-check-label\" for=\"checkbox5\" class=\"label-table\"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
{% endblock %}", "ATCAppBundle:Classement:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Classement/index.html.twig");
    }
}
