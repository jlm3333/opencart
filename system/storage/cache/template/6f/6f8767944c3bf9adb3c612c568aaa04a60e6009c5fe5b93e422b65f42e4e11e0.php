<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/recurring_form.twig */
class __TwigTemplate_c698039f806700f2499db6149dcf59866833a79ee4e9d78276704a685a1a69e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-recurring\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"alert alert-info\">";
        echo ($context["text_recurring"] ?? null);
        echo "</div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-recurring\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 33
            echo "              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 33);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 33);
            echo "\" /></span>
                <input type=\"text\" name=\"recurring_description[";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["recurring_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["recurring_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 34)] ?? null) : null), "name", [], "any", false, false, false, 34)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
              </div>
              ";
            // line 36
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36)] ?? null) : null)) {
                // line 37
                echo "              <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 37)] ?? null) : null);
                echo "</div>
              ";
            }
            // line 39
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
          </div>
          <fieldset>
            <legend>";
        // line 43
        echo ($context["text_profile"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 45
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"price\" value=\"";
        // line 47
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-duration\">";
        // line 51
        echo ($context["entry_duration"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"duration\" value=\"";
        // line 53
        echo ($context["duration"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_duration"] ?? null);
        echo "\" id=\"input-duration\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-cycle\">";
        // line 57
        echo ($context["entry_cycle"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"cycle\" value=\"";
        // line 59
        echo ($context["cycle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_cycle"] ?? null);
        echo "\" id=\"input-cycle\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-frequency\">";
        // line 63
        echo ($context["entry_frequency"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"frequency\" id=\"input-frequency\" class=\"form-control\">
                  ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 67
            echo "                  ";
            if ((($context["frequency"] ?? null) == twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 67))) {
                // line 68
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 68);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 68);
                echo "</option>
                  ";
            } else {
                // line 70
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 70);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 70);
                echo "</option>
                  ";
            }
            // line 72
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 77
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 80
        if (($context["status"] ?? null)) {
            // line 81
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 84
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 87
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 92
        echo ($context["text_trial"] ?? null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-price\">";
        // line 94
        echo ($context["entry_trial_price"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_price\" value=\"";
        // line 96
        echo ($context["trial_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_price"] ?? null);
        echo "\" id=\"input-trial-price\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-duration\">";
        // line 100
        echo ($context["entry_trial_duration"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_duration\" value=\"";
        // line 102
        echo ($context["trial_duration"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_duration"] ?? null);
        echo "\" id=\"input-trial-duration\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-cycle\">";
        // line 106
        echo ($context["entry_trial_cycle"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_cycle\" value=\"";
        // line 108
        echo ($context["trial_cycle"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_trial_cycle"] ?? null);
        echo "\" id=\"input-trial-cycle\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-frequency\">";
        // line 112
        echo ($context["entry_trial_frequency"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_frequency\" id=\"input-trial-frequency\" class=\"form-control\">
                  ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 116
            echo "                  ";
            if ((($context["trial_frequency"] ?? null) == twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 116))) {
                // line 117
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 117);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 117);
                echo "</option>
                  ";
            } else {
                // line 119
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 119);
                echo "</option>
                  ";
            }
            // line 121
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frequency_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-trial-status\">";
        // line 126
        echo ($context["entry_trial_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_status\" id=\"input-trial-status\" class=\"form-control\">
                  ";
        // line 129
        if (($context["trial_status"] ?? null)) {
            // line 130
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  <option value=\"1\" selected=\"selected\">";
            // line 131
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 133
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  <option value=\"1\">";
            // line 134
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 136
        echo "                </select>
              </div>
            </div>
          </fieldset>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 141
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 143
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 153
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/recurring_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 153,  407 => 143,  402 => 141,  395 => 136,  390 => 134,  385 => 133,  380 => 131,  375 => 130,  373 => 129,  367 => 126,  361 => 122,  355 => 121,  347 => 119,  339 => 117,  336 => 116,  332 => 115,  326 => 112,  317 => 108,  312 => 106,  303 => 102,  298 => 100,  289 => 96,  284 => 94,  279 => 92,  272 => 87,  267 => 85,  262 => 84,  257 => 82,  252 => 81,  250 => 80,  244 => 77,  238 => 73,  232 => 72,  224 => 70,  216 => 68,  213 => 67,  209 => 66,  203 => 63,  194 => 59,  189 => 57,  180 => 53,  175 => 51,  166 => 47,  161 => 45,  156 => 43,  151 => 40,  145 => 39,  139 => 37,  137 => 36,  128 => 34,  119 => 33,  115 => 32,  110 => 30,  105 => 28,  99 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/recurring_form.twig", "");
    }
}
