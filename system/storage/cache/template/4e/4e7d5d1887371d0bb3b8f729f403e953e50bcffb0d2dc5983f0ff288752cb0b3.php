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

/* management/error_list.twig */
class __TwigTemplate_8d9e8ef55373b2ea13935b0c13e080822c94c98061e83b62fb3a9485de533dfa extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-marketing').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-marketing').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-marketing\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-code\">";
        // line 36
        echo ($context["entry_code"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_code\" value=\"";
        // line 37
        echo ($context["filter_code"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"input-code\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-reference\">";
        // line 40
        echo ($context["entry_reference"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_reference\" value=\"";
        // line 41
        echo ($context["filter_reference"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_reference"] ?? null);
        echo "\" id=\"input-reference\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option name=\"filter_status\" value=\"\"></option>
                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["status_list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["status_option"]) {
            // line 47
            echo "                  <option name=\"filter_status\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["status_option"], "text", [], "any", false, false, false, 47);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["status_option"], "text", [], "any", false, false, false, 47);
            echo "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 52
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 60
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 63
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-marketing\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 69
        if ((($context["sort"] ?? null) == "m.code")) {
            echo " <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_code"] ?? null);
            echo "\">";
            echo ($context["column_code"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 70
        echo ($context["column_reference"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 71
        echo ($context["column_error_message"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 72
        echo ($context["column_status"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 73
        echo ($context["column_section"] ?? null);
        echo "</td>
                      <td class=\"text-middle\">";
        // line 74
        echo ($context["column_data_log"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 75
        echo ($context["column_action1"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 80
        if (($context["managements"] ?? null)) {
            // line 81
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["managements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["management"]) {
                // line 82
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 83
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["management"], "id", [], "any", false, false, false, 83), ($context["selected"] ?? null))) {
                    // line 84
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["management"], "id", [], "any", false, false, false, 84);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 86
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["management"], "id", [], "any", false, false, false, 86);
                    echo "\" />
                      ";
                }
                // line 87
                echo "</td>
                    <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["management"], "code", [], "any", false, false, false, 88);
                echo "</td>
                    <td class=\"text-left\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["management"], "reference", [], "any", false, false, false, 89);
                echo "</td>
                    <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["management"], "error", [], "any", false, false, false, 90);
                echo "</td>
                    <td class=\"text-right\">";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["management"], "status", [], "any", false, false, false, 91);
                echo "</td>
                    <td class=\"text-right\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["management"], "section", [], "any", false, false, false, 92);
                echo "</td>
                    <td class=\"text-left\">";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["management"], "data_log", [], "any", false, false, false, 93);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["management"], "edit", [], "any", false, false, false, 94);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['management'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                  ";
        } else {
            // line 98
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 99
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 102
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 108
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 109
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=management/error&user_token=";
        // line 118
        echo ($context["user_token"] ?? null);
        echo "';
\tconsole.log(\"TEST\")
  var filter_code = \$('input[name=\\'filter_code\\']').val();
\tif (filter_code) {
\t\turl += '&filter_code=' + encodeURIComponent(filter_code);
\t}

\tvar filter_reference = \$('input[name=\\'filter_reference\\']').val();
\tif (filter_reference) {
\t\turl += '&filter_reference=' + encodeURIComponent(filter_reference);
\t}
  var select = document.getElementById('filter_status');
  var selected = select.options[select.selectedIndex].value;
  console.log(selected);
  var filter_status = \$('option[selected=\\'selected\\']').val();
\tif (selected) {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}
\t\t
\t/*var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}*/
\tconsole.log(url)
\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 148
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
</div>
";
        // line 153
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "management/error_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 153,  371 => 148,  338 => 118,  326 => 109,  322 => 108,  314 => 102,  308 => 99,  305 => 98,  302 => 97,  291 => 94,  287 => 93,  283 => 92,  279 => 91,  275 => 90,  271 => 89,  267 => 88,  264 => 87,  258 => 86,  252 => 84,  250 => 83,  247 => 82,  242 => 81,  240 => 80,  232 => 75,  228 => 74,  224 => 73,  220 => 72,  216 => 71,  212 => 70,  194 => 69,  185 => 63,  179 => 60,  168 => 52,  163 => 49,  152 => 47,  148 => 46,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "management/error_list.twig", "");
    }
}
