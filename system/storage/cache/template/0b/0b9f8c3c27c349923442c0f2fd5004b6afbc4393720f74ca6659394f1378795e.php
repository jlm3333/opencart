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

/* management/error_form.twig */
class __TwigTemplate_21626c8a30c94b4832d5be1bfe8a60fa255ae489e598490654da1d7bc0fd6fd4 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-marketing\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 29
        echo ($context["entry_code"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 31
        echo ($context["code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_code"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_code"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-reference\">";
        // line 38
        echo ($context["entry_reference"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"reference\" value=\"";
        // line 40
        echo ($context["reference"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reference"] ?? null);
        echo "\" id=\"input-reference\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_reference"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reference"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-error_message\">";
        // line 47
        echo ($context["entry_error"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"error_message\" rows=\"5\" placeholder=\"";
        // line 49
        echo ($context["entry_error"] ?? null);
        echo "\" id=\"input-error_message\" class=\"form-control\">";
        echo ($context["error_message"] ?? null);
        echo "</textarea>
            </div>
          </div>
          <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
              ";
        // line 55
        echo ($context["status"] ?? null);
        echo "
                <select name=\"status\" id=\"input-frequency\" class=\"form-control\">
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status_option"]) {
            // line 58
            echo "                  ";
            if ((($context["status"] ?? null) == twig_get_attribute($this->env, $this->source, $context["status_option"], "value", [], "any", false, false, false, 58))) {
                // line 59
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["status_option"], "value", [], "any", false, false, false, 59);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["status_option"], "text", [], "any", false, false, false, 59);
                echo "</option>
                  ";
            } else {
                // line 61
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["status_option"], "value", [], "any", false, false, false, 61);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["status_option"], "text", [], "any", false, false, false, 61);
                echo "</option>
                  ";
            }
            // line 63
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </select>
              </div>
            </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-section\">";
        // line 68
        echo ($context["entry_section"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"section\" value=\"";
        // line 70
        echo ($context["section"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_section"] ?? null);
        echo "\" id=\"input-section\" class=\"form-control\" />
              ";
        // line 71
        if (($context["error_section"] ?? null)) {
            // line 72
            echo "              <div class=\"text-danger\">";
            echo ($context["error_section"] ?? null);
            echo "</div>
              ";
        }
        // line 74
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-data_log\">";
        // line 77
        echo ($context["entry_data_log"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"data_log\" rows=\"5\" placeholder=\"";
        // line 79
        echo ($context["entry_data_log"] ?? null);
        echo "\" id=\"input-data_log\" class=\"form-control\">";
        echo ($context["data_log"] ?? null);
        echo "</textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#input-code').on('keyup', function() {
\t\$('#input-example1').val('";
        // line 88
        echo ($context["store"] ?? null);
        echo "?tracking=' + \$('#input-code').val());
\t\$('#input-example2').val('";
        // line 89
        echo ($context["store"] ?? null);
        echo "index.php?route=common/home&tracking=' + \$('#input-code').val());
});

\$('#input-code').trigger('keyup');
//--></script></div>
";
        // line 94
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "management/error_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 94,  261 => 89,  257 => 88,  243 => 79,  238 => 77,  233 => 74,  227 => 72,  225 => 71,  219 => 70,  214 => 68,  208 => 64,  202 => 63,  194 => 61,  186 => 59,  183 => 58,  179 => 57,  174 => 55,  169 => 53,  160 => 49,  155 => 47,  150 => 44,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "management/error_form.twig", "");
    }
}
